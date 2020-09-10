<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\CustomerInvoice;
use JGI\BjornLunden\Model\Document;
use JGI\BjornLunden\Provider\CustomerInvoiceProvider;
use JGI\BjornLunden\Provider\CustomerProvider;
use JGI\BjornLunden\Provider\DocumentProvider;
use PHPUnit\Framework\TestCase;

class DocumentProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_creates_a_document()
    {
        $json = '{"id": "1234"}';

        $documentProvider = new DocumentProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $document = new Document();
        $document->setFile(new \SplFileInfo(__DIR__ . '/json/customer.json'));
        $newDocument = $documentProvider->create($document);

        $this->assertInstanceOf(Document::class, $newDocument);
    }

    /**
     * @test
     */
    public function it_creates_a_document_connected_to_invoice()
    {
        $json = file_get_contents(__DIR__ . '/json/customerinvoice.json');

        $documentProvider = new DocumentProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $document = new Document();
        $document->setFile(new \SplFileInfo(__DIR__ . '/json/customer.json'));
        $customerInvoice = $documentProvider->createAndAddToInvoice($document, 123);

        $this->assertInstanceOf(CustomerInvoice::class, $customerInvoice);
    }
}
