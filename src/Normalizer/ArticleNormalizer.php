<?php

namespace JGI\BjornLunden\Normalizer;

use JGI\BjornLunden\Model\Article;

class ArticleNormalizer
{
    /**
     * @param Article $article
     *
     * @return array
     */
    public static function normalize(Article $article): array
    {
        return [
            'account' => $article->getAccount(),
            'availableStock' => $article->getAvailableStock(),
            'barcode' => $article->getBarcode(),
            'closed' => $article->isClosed(),
            'comment' => $article->getComment(),
            'costPrice' => $article->getCostPrice(),
            'descriptionDE' => $article->getDescriptionDE(),
            'descriptionES' => $article->getDescriptionES(),
            'descriptionFR' => $article->getDescriptionFR(),
            'descriptionIT' => $article->getDescriptionIT(),
            'descriptionUK' => $article->getDescriptionUK(),
            'id' => $article->getId(),
            'name' => $article->getName(),
            'orderingPoint' => $article->getOrderingPoint(),
            'orderingQuantity' => $article->getOrderingQuantity(),
            'physicalStock' => $article->getPhysicalStock(),
            'sellPrice1' => $article->getSellPrice1(),
            'sellPrice2' => $article->getSellPrice2(),
            'sellPrice3' => $article->getSellPrice3(),
            'sellPrice4' => $article->getSellPrice4(),
            'sellPrice5' => $article->getSellPrice5(),
            'sellPriceIncVat' => $article->getSellPriceIncVat(),
            'supplierArticleId' => $article->getSupplierArticleId(),
            'supplierId' => $article->getSupplierId(),
            'type' => $article->getType(),
            'unitCostPrice' => $article->getUnitCostPrice(),
            'unitSellPrice1' => $article->getUnitSellPrice1(),
            'unitSellPrice2' => $article->getUnitSellPrice2(),
            'unitSellPrice3' => $article->getUnitSellPrice3(),
            'unitSellPrice4' => $article->getUnitSellPrice4(),
            'unitSellPrice5' => $article->getUnitSellPrice5(),
            'vatCode' => $article->getVatCode(),
            'volume' => $article->getVolume(),
            'weight' => $article->getWeight(),
        ];
    }

    /**
     * @param array $data
     *
     * @return Article
     */
    public static function denormalize(array $data): Article
    {
        $article = new Article();
        $article->setAccount($data['account']);
        $article->setAvailableStock($data['availableStock']);
        $article->setBarcode($data['barcode']);
        if (!is_null($data['closed'])) {
            $article->setClosed($data['closed']);
        }
        $article->setComment($data['comment']);
        $article->setCostPrice($data['costPrice']);
        $article->setDescriptionDE($data['descriptionDE']);
        $article->setDescriptionES($data['descriptionES']);
        $article->setDescriptionFR($data['descriptionFR']);
        $article->setDescriptionIT($data['descriptionIT']);
        $article->setDescriptionUK($data['descriptionUK']);
        $article->setId($data['id']);
        $article->setName($data['name']);
        $article->setOrderingPoint($data['orderingPoint']);
        $article->setOrderingQuantity($data['orderingQuantity']);
        $article->setPhysicalStock($data['physicalStock']);
        $article->setSellPrice1($data['sellPrice1']);
        $article->setSellPrice2($data['sellPrice2']);
        $article->setSellPrice3($data['sellPrice3']);
        $article->setSellPrice4($data['sellPrice4']);
        $article->setSellPrice5($data['sellPrice5']);
        $article->setSellPriceIncVat($data['sellPriceIncVat']);
        $article->setSupplierArticleId($data['supplierArticleId']);
        $article->setSupplierId($data['supplierId']);
        $article->setType($data['type']);
        $article->setUnitCostPrice($data['unitCostPrice']);
        $article->setUnitSellPrice1($data['unitSellPrice1']);
        $article->setUnitSellPrice2($data['unitSellPrice2']);
        $article->setUnitSellPrice3($data['unitSellPrice3']);
        $article->setUnitSellPrice4($data['unitSellPrice4']);
        $article->setUnitSellPrice5($data['unitSellPrice5']);
        $article->setVatCode($data['vatCode']);
        $article->setVolume($data['volume']);
        $article->setWeight($data['weight']);

        return $article;
    }
}
