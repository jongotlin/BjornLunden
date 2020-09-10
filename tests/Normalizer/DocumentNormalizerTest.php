<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Normalizer;

use JGI\BjornLunden\Model\Document;
use JGI\BjornLunden\Normalizer\DocumentNormalizer;
use PHPUnit\Framework\TestCase;

class DocumentNormalizerTest extends TestCase
{
    /**
     * @test
     */
    public function it_normalize_a_document()
    {
        $document = new Document();
        $document->setId('123');

        $expected = [
            'id' => '123'
        ];

        $this->assertEquals($expected, DocumentNormalizer::normalize($document));
    }

    /**
     * @test
     */
    public function it_denormalize_a_document()
    {
        $data = [
            'id' => '123',
        ];

        $document = DocumentNormalizer::denormalize($data);
        $this->assertEquals('123', $document->getId());
    }
}
