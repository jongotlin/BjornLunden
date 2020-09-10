<?php

namespace JGI\BjornLunden\Normalizer;

use JGI\BjornLunden\Model\Customer;
use JGI\BjornLunden\Model\Document;

class DocumentNormalizer
{
    /**
     * @param Document $document
     *
     * @return array
     */
    public static function normalize(Document $document): array
    {
        return [
            'id' => $document->getId(),
        ];
    }

    /**
     * @param array $data
     *
     * @return Document
     */
    public static function denormalize(array $data): Document
    {
        $document = new Document();
        $document->setId($data['id']);

        return $document;
    }
}
