<?php

namespace JGI\BjornLunden\Provider;

use JGI\BjornLunden\Exception\BjornLundenException;
use JGI\BjornLunden\Model\CustomerInvoice;
use JGI\BjornLunden\Model\Document;
use JGI\BjornLunden\Normalizer\CustomerInvoiceNormalizer;
use JGI\BjornLunden\Normalizer\DocumentNormalizer;

class DocumentProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @param Document $document
     *
     * @return Document
     */
    public function create(Document $document): Document
    {
        if (!$document->getFile()) {
            throw new BjornLundenException('File not set.');
        }

        $result = $this->post('document/' . $document->getFile()->getFilename(), [], $document->getFile());

        $newDocument = DocumentNormalizer::denormalize($result);
        $newDocument->setFile($document->getFile());

        return $newDocument;
    }

    /**
     * @param Document $document
     * @param int $invoiceNumber
     *
     * @return CustomerInvoice
     */
    public function createAndAddToInvoice(Document $document, int $invoiceNumber): CustomerInvoice
    {
        $filename = $document->getFile()->getFilename();
        if ($document->getFileName()) {
            $filename = $document->getFilename();
        }

        $result = $this->post(sprintf(
            'document/andAttachToCustomerInvoice/%s/%s',
            $filename,
            $invoiceNumber
        ), [], $document->getFile());

        return CustomerInvoiceNormalizer::denormalize($result);
    }
}
