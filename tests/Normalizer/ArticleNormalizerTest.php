<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Normalizer;

use JGI\BjornLunden\Model\Article;
use JGI\BjornLunden\Normalizer\ArticleNormalizer;
use PHPUnit\Framework\TestCase;

class ArticleNormalizerTest extends TestCase
{
    /**
     * @test
     */
    public function it_normalizes_an_article()
    {
        $article = new Article();
        $article->setAccount('1227');
        $article->setAvailableStock(10);
        $article->setBarcode('1234567890');
        $article->setClosed(false);
        $article->setComment('Comment here');
        $article->setCostPrice(149.50);
        $article->setDescriptionDE('Deutsche jah');
        $article->setDescriptionES('Claro que si');
        $article->setDescriptionFR('Bien sur');
        $article->setDescriptionIT('Prego');
        $article->setDescriptionUK('What up');
        $article->setId('1076');
        $article->setName('Bed sheet');
        $article->setOrderingPoint(100);
        $article->setOrderingQuantity(200);
        $article->setPhysicalStock(150);
        $article->setSellPrice1(50);
        $article->setSellPrice2(40);
        $article->setSellPrice3(35.3);
        $article->setSellPrice4(20);
        $article->setSellPrice5(10.9);
        $article->setSellPriceIncVat(60);
        $article->setSupplierArticleId('ABC');
        $article->setSupplierId('123');
        $article->setType(0);
        $article->setUnitCostPrice('mån');
        $article->setUnitSellPrice1('mån');
        $article->setUnitSellPrice2('mån');
        $article->setUnitSellPrice3('mån');
        $article->setUnitSellPrice4('mån');
        $article->setUnitSellPrice5('mån');
        $article->setVatCode('1');
        $article->setVolume(3.25);
        $article->setWeight(0.76);


        $expected = [
            'account' => '1227', 
            'availableStock' => 10, 
            'barcode' => '1234567890', 
            'closed' => false, 
            'comment' => 'Comment here', 
            'costPrice' => 149.50, 
            'descriptionDE' => 'Deutsche jah', 
            'descriptionES' => 'Claro que si', 
            'descriptionFR' => 'Bien sur', 
            'descriptionIT' => 'Prego', 
            'descriptionUK' => 'What up', 
            'id' => '1076', 
            'name' => 'Bed sheet', 
            'orderingPoint' => 100, 
            'orderingQuantity' => 200, 
            'physicalStock' => 150, 
            'sellPrice1' => 50, 
            'sellPrice2' => 40, 
            'sellPrice3' => 35.3, 
            'sellPrice4' => 20, 
            'sellPrice5' => 10.9, 
            'sellPriceIncVat' => 60, 
            'supplierArticleId' => 'ABC', 
            'supplierId' => '123', 
            'type' => 0, 
            'unitCostPrice' => 'mån', 
            'unitSellPrice1' => 'mån', 
            'unitSellPrice2' => 'mån', 
            'unitSellPrice3' => 'mån', 
            'unitSellPrice4' => 'mån', 
            'unitSellPrice5' => 'mån', 
            'vatCode' => '1', 
            'volume' => 3.25, 
            'weight' => 0.76, 
        ];

        $this->assertEquals($expected, ArticleNormalizer::normalize($article));
    }

    /**
     * @test
     */
    public function it_denormalizes_an_article()
    {
        $data = [
            'account' => '1227', 
            'availableStock' => 10, 
            'barcode' => '1234567890', 
            'closed' => false, 
            'comment' => 'Comment here', 
            'costPrice' => 149.50, 
            'descriptionDE' => 'Deutsche jah', 
            'descriptionES' => 'Claro que si', 
            'descriptionFR' => 'Bien sur', 
            'descriptionIT' => 'Prego', 
            'descriptionUK' => 'What up', 
            'id' => '1076', 
            'name' => 'Bed sheet', 
            'orderingPoint' => 100, 
            'orderingQuantity' => 200, 
            'physicalStock' => 150, 
            'sellPrice1' => 50, 
            'sellPrice2' => 40, 
            'sellPrice3' => 35.3, 
            'sellPrice4' => 20, 
            'sellPrice5' => 10.9, 
            'sellPriceIncVat' => 60, 
            'supplierArticleId' => 'ABC', 
            'supplierId' => '123', 
            'type' => 0, 
            'unitCostPrice' => 'mån', 
            'unitSellPrice1' => 'mån', 
            'unitSellPrice2' => 'mån', 
            'unitSellPrice3' => 'mån', 
            'unitSellPrice4' => 'mån', 
            'unitSellPrice5' => 'mån', 
            'vatCode' => '1', 
            'volume' => 3.25, 
            'weight' => 0.76, 
        ];

        $article = ArticleNormalizer::denormalize($data);

        $this->assertEquals('1227', $article->getAccount());
        $this->assertEquals(10, $article->getAvailableStock());
        $this->assertEquals('1234567890', $article->getBarcode());
        $this->assertEquals(false, $article->isClosed());
        $this->assertEquals('Comment here', $article->getComment());
        $this->assertEquals(149.50, $article->getCostPrice());
        $this->assertEquals('Deutsche jah', $article->getDescriptionDE());
        $this->assertEquals('Claro que si', $article->getDescriptionES());
        $this->assertEquals('Bien sur', $article->getDescriptionFR());
        $this->assertEquals('Prego', $article->getDescriptionIT());
        $this->assertEquals('What up', $article->getDescriptionUK());
        $this->assertEquals('1076', $article->getId());
        $this->assertEquals('Bed sheet', $article->getName());
        $this->assertEquals(100, $article->getOrderingPoint());
        $this->assertEquals(200, $article->getOrderingQuantity());
        $this->assertEquals(150, $article->getPhysicalStock());
        $this->assertEquals(50, $article->getSellPrice1());
        $this->assertEquals(40, $article->getSellPrice2());
        $this->assertEquals(35.3, $article->getSellPrice3());
        $this->assertEquals(20, $article->getSellPrice4());
        $this->assertEquals(10.9, $article->getSellPrice5());
        $this->assertEquals(60, $article->getSellPriceIncVat());
        $this->assertEquals('ABC', $article->getSupplierArticleId());
        $this->assertEquals('123', $article->getSupplierId());
        $this->assertEquals(0, $article->getType());
        $this->assertEquals('mån', $article->getUnitCostPrice());
        $this->assertEquals('mån', $article->getUnitSellPrice1());
        $this->assertEquals('mån', $article->getUnitSellPrice2());
        $this->assertEquals('mån', $article->getUnitSellPrice3());
        $this->assertEquals('mån', $article->getUnitSellPrice4());
        $this->assertEquals('mån', $article->getUnitSellPrice5());
        $this->assertEquals('1', $article->getVatCode());
        $this->assertEquals(3.25, $article->getVolume());
        $this->assertEquals(0.76, $article->getWeight());
    }
}
