<?php

namespace JGI\BjornLunden\Model;

class Article
{
    /**
     * @var string|null
     */
    private $account;

    /**
     * @var float|null
     */
    private $availableStock;

    /**
     * @var string|null
     */
    private $barcode;

    /**
     * @var bool
     */
    private $closed = false;

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var float|null
     */
    private $costPrice;

    /**
     * @var string|null
     */
    private $descriptionDE;

    /**
     * @var string|null
     */
    private $descriptionES;

    /**
     * @var string|null
     */
    private $descriptionFR;

    /**
     * @var string|null
     */
    private $descriptionIT;

    /**
     * @var string|null
     */
    private $descriptionUK;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var float|null
     */
    private $orderingPoint;

    /**
     * @var float|null
     */
    private $orderingQuantity;

    /**
     * @var float|null
     */
    private $physicalStock;

    /**
     * @var float|null
     */
    private $sellPrice1;

    /**
     * @var float|null
     */
    private $sellPrice2;

    /**
     * @var float|null
     */
    private $sellPrice3;

    /**
     * @var float|null
     */
    private $sellPrice4;

    /**
     * @var float|null
     */
    private $sellPrice5;

    /**
     * @var float|null
     */
    private $sellPriceIncVat;

    /**
     * @var string|null
     */
    private $supplierArticleId;

    /**
     * @var string|null
     */
    private $supplierId;

    /**
     * @var int|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $unitCostPrice;

    /**
     * @var string|null
     */
    private $unitSellPrice1;

    /**
     * @var string|null
     */
    private $unitSellPrice2;

    /**
     * @var string|null
     */
    private $unitSellPrice3;

    /**
     * @var string|null
     */
    private $unitSellPrice4;

    /**
     * @var string|null
     */
    private $unitSellPrice5;

    /**
     * @var string|null
     */
    private $vatCode;

    /**
     * @var float|null
     */
    private $volume;

    /**
     * @var float|null
     */
    private $weight;

    /**
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * @param string|null $account
     */
    public function setAccount(?string $account): void
    {
        $this->account = $account;
    }

    /**
     * @return float|null
     */
    public function getAvailableStock(): ?float
    {
        return $this->availableStock;
    }

    /**
     * @param float|null $availableStock
     */
    public function setAvailableStock(?float $availableStock): void
    {
        $this->availableStock = $availableStock;
    }

    /**
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @param string|null $barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->closed;
    }

    /**
     * @param bool $closed
     */
    public function setClosed(bool $closed): void
    {
        $this->closed = $closed;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return float|null
     */
    public function getCostPrice(): ?float
    {
        return $this->costPrice;
    }

    /**
     * @param float|null $costPrice
     */
    public function setCostPrice(?float $costPrice): void
    {
        $this->costPrice = $costPrice;
    }

    /**
     * @return string|null
     */
    public function getDescriptionDE(): ?string
    {
        return $this->descriptionDE;
    }

    /**
     * @param string|null $descriptionDE
     */
    public function setDescriptionDE(?string $descriptionDE): void
    {
        $this->descriptionDE = $descriptionDE;
    }

    /**
     * @return string|null
     */
    public function getDescriptionES(): ?string
    {
        return $this->descriptionES;
    }

    /**
     * @param string|null $descriptionES
     */
    public function setDescriptionES(?string $descriptionES): void
    {
        $this->descriptionES = $descriptionES;
    }

    /**
     * @return string|null
     */
    public function getDescriptionFR(): ?string
    {
        return $this->descriptionFR;
    }

    /**
     * @param string|null $descriptionFR
     */
    public function setDescriptionFR(?string $descriptionFR): void
    {
        $this->descriptionFR = $descriptionFR;
    }

    /**
     * @return string|null
     */
    public function getDescriptionIT(): ?string
    {
        return $this->descriptionIT;
    }

    /**
     * @param string|null $descriptionIT
     */
    public function setDescriptionIT(?string $descriptionIT): void
    {
        $this->descriptionIT = $descriptionIT;
    }

    /**
     * @return string|null
     */
    public function getDescriptionUK(): ?string
    {
        return $this->descriptionUK;
    }

    /**
     * @param string|null $descriptionUK
     */
    public function setDescriptionUK(?string $descriptionUK): void
    {
        $this->descriptionUK = $descriptionUK;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float|null
     */
    public function getOrderingPoint(): ?float
    {
        return $this->orderingPoint;
    }

    /**
     * @param float|null $orderingPoint
     */
    public function setOrderingPoint(?float $orderingPoint): void
    {
        $this->orderingPoint = $orderingPoint;
    }

    /**
     * @return float|null
     */
    public function getOrderingQuantity(): ?float
    {
        return $this->orderingQuantity;
    }

    /**
     * @param float|null $orderingQuantity
     */
    public function setOrderingQuantity(?float $orderingQuantity): void
    {
        $this->orderingQuantity = $orderingQuantity;
    }

    /**
     * @return float|null
     */
    public function getPhysicalStock(): ?float
    {
        return $this->physicalStock;
    }

    /**
     * @param float|null $physicalStock
     */
    public function setPhysicalStock(?float $physicalStock): void
    {
        $this->physicalStock = $physicalStock;
    }

    /**
     * @return float|null
     */
    public function getSellPrice1(): ?float
    {
        return $this->sellPrice1;
    }

    /**
     * @param float|null $sellPrice1
     */
    public function setSellPrice1(?float $sellPrice1): void
    {
        $this->sellPrice1 = $sellPrice1;
    }

    /**
     * @return float|null
     */
    public function getSellPrice2(): ?float
    {
        return $this->sellPrice2;
    }

    /**
     * @param float|null $sellPrice2
     */
    public function setSellPrice2(?float $sellPrice2): void
    {
        $this->sellPrice2 = $sellPrice2;
    }

    /**
     * @return float|null
     */
    public function getSellPrice3(): ?float
    {
        return $this->sellPrice3;
    }

    /**
     * @param float|null $sellPrice3
     */
    public function setSellPrice3(?float $sellPrice3): void
    {
        $this->sellPrice3 = $sellPrice3;
    }

    /**
     * @return float|null
     */
    public function getSellPrice4(): ?float
    {
        return $this->sellPrice4;
    }

    /**
     * @param float|null $sellPrice4
     */
    public function setSellPrice4(?float $sellPrice4): void
    {
        $this->sellPrice4 = $sellPrice4;
    }

    /**
     * @return float|null
     */
    public function getSellPrice5(): ?float
    {
        return $this->sellPrice5;
    }

    /**
     * @param float|null $sellPrice5
     */
    public function setSellPrice5(?float $sellPrice5): void
    {
        $this->sellPrice5 = $sellPrice5;
    }

    /**
     * @return float|null
     */
    public function getSellPriceIncVat(): ?float
    {
        return $this->sellPriceIncVat;
    }

    /**
     * @param float|null $sellPriceIncVat
     */
    public function setSellPriceIncVat(?float $sellPriceIncVat): void
    {
        $this->sellPriceIncVat = $sellPriceIncVat;
    }

    /**
     * @return string|null
     */
    public function getSupplierArticleId(): ?string
    {
        return $this->supplierArticleId;
    }

    /**
     * @param string|null $supplierArticleId
     */
    public function setSupplierArticleId(?string $supplierArticleId): void
    {
        $this->supplierArticleId = $supplierArticleId;
    }

    /**
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    /**
     * @param string|null $supplierId
     */
    public function setSupplierId(?string $supplierId): void
    {
        $this->supplierId = $supplierId;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int|null $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getUnitCostPrice(): ?string
    {
        return $this->unitCostPrice;
    }

    /**
     * @param string|null $unitCostPrice
     */
    public function setUnitCostPrice(?string $unitCostPrice): void
    {
        $this->unitCostPrice = $unitCostPrice;
    }

    /**
     * @return string|null
     */
    public function getUnitSellPrice1(): ?string
    {
        return $this->unitSellPrice1;
    }

    /**
     * @param string|null $unitSellPrice1
     */
    public function setUnitSellPrice1(?string $unitSellPrice1): void
    {
        $this->unitSellPrice1 = $unitSellPrice1;
    }

    /**
     * @return string|null
     */
    public function getUnitSellPrice2(): ?string
    {
        return $this->unitSellPrice2;
    }

    /**
     * @param string|null $unitSellPrice2
     */
    public function setUnitSellPrice2(?string $unitSellPrice2): void
    {
        $this->unitSellPrice2 = $unitSellPrice2;
    }

    /**
     * @return string|null
     */
    public function getUnitSellPrice3(): ?string
    {
        return $this->unitSellPrice3;
    }

    /**
     * @param string|null $unitSellPrice3
     */
    public function setUnitSellPrice3(?string $unitSellPrice3): void
    {
        $this->unitSellPrice3 = $unitSellPrice3;
    }

    /**
     * @return string|null
     */
    public function getUnitSellPrice4(): ?string
    {
        return $this->unitSellPrice4;
    }

    /**
     * @param string|null $unitSellPrice4
     */
    public function setUnitSellPrice4(?string $unitSellPrice4): void
    {
        $this->unitSellPrice4 = $unitSellPrice4;
    }

    /**
     * @return string|null
     */
    public function getUnitSellPrice5(): ?string
    {
        return $this->unitSellPrice5;
    }

    /**
     * @param string|null $unitSellPrice5
     */
    public function setUnitSellPrice5(?string $unitSellPrice5): void
    {
        $this->unitSellPrice5 = $unitSellPrice5;
    }

    /**
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }

    /**
     * @param string|null $vatCode
     */
    public function setVatCode(?string $vatCode): void
    {
        $this->vatCode = $vatCode;
    }

    /**
     * @return float|null
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * @param float|null $volume
     */
    public function setVolume(?float $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     */
    public function setWeight(?float $weight): void
    {
        $this->weight = $weight;
    }
}
