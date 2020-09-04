<?php

namespace JGI\BjornLunden\Model;

class Customer
{
    /**
     * @var string|null
     */
    private $bg;

    /**
     * @var string|null
     */
    private $box;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var bool
     */
    private $closed = false;

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var int|null
     */
    private $creditLimit;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $deliveryTerms;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $fax;

    /**
     * @var string|null
     */
    private $gln;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var bool
     */
    private $interestInvoicingAllowed = false;

    /**
     * @var string|null
     */
    private $invoiceBy;

    /**
     * @var string|null
     */
    private $invoiceTo;

    /**
     * @var string|null
     */
    private $mobile;

    /**
     * @var string|null
     */
    private $modeOfDelivery;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $organisationNumber;

    /**
     * @var string|null
     */
    private $paymentTerms;

    /**
     * @var string|null
     */
    private $pg;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var int|null
     */
    private $pricelist;

    /**
     * @var string|null
     */
    private $receivableAccount;

    /**
     * @var bool
     */
    private $remindersAllowed = false;

    /**
     * @var bool
     */
    private $remindersFeeAllowed = false;

    /**
     * @var string|null
     */
    private $responsiblePerson;

    /**
     * @var string|null
     */
    private $salesAccount;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var int|null
     */
    private $vatCode;

    /**
     * @var string|null
     */
    private $vatNumber;

    /**
     * @var string|null
     */
    private $web;

    /**
     * @var string|null
     */
    private $yourReference;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @return string|null
     */
    public function getBg(): ?string
    {
        return $this->bg;
    }

    /**
     * @param string|null $bg
     */
    public function setBg(?string $bg): void
    {
        $this->bg = $bg;
    }

    /**
     * @return string|null
     */
    public function getBox(): ?string
    {
        return $this->box;
    }

    /**
     * @param string|null $box
     */
    public function setBox(?string $box): void
    {
        $this->box = $box;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
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
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return int|null
     */
    public function getCreditLimit(): ?int
    {
        return $this->creditLimit;
    }

    /**
     * @param int|null $creditLimit
     */
    public function setCreditLimit(?int $creditLimit): void
    {
        $this->creditLimit = $creditLimit;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string|null
     */
    public function getDeliveryTerms(): ?string
    {
        return $this->deliveryTerms;
    }

    /**
     * @param string|null $deliveryTerms
     */
    public function setDeliveryTerms(?string $deliveryTerms): void
    {
        $this->deliveryTerms = $deliveryTerms;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param string|null $fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return string|null
     */
    public function getGln(): ?string
    {
        return $this->gln;
    }

    /**
     * @param string|null $gln
     */
    public function setGln(?string $gln): void
    {
        $this->gln = $gln;
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
     * @return bool
     */
    public function isInterestInvoicingAllowed(): bool
    {
        return $this->interestInvoicingAllowed;
    }

    /**
     * @param bool $interestInvoicingAllowed
     */
    public function setInterestInvoicingAllowed(bool $interestInvoicingAllowed): void
    {
        $this->interestInvoicingAllowed = $interestInvoicingAllowed;
    }

    /**
     * @return string|null
     */
    public function getInvoiceBy(): ?string
    {
        return $this->invoiceBy;
    }

    /**
     * @param string|null $invoiceBy
     */
    public function setInvoiceBy(?string $invoiceBy): void
    {
        $this->invoiceBy = $invoiceBy;
    }

    /**
     * @return string|null
     */
    public function getInvoiceTo(): ?string
    {
        return $this->invoiceTo;
    }

    /**
     * @param string|null $invoiceTo
     */
    public function setInvoiceTo(?string $invoiceTo): void
    {
        $this->invoiceTo = $invoiceTo;
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string|null $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string|null
     */
    public function getModeOfDelivery(): ?string
    {
        return $this->modeOfDelivery;
    }

    /**
     * @param string|null $modeOfDelivery
     */
    public function setModeOfDelivery(?string $modeOfDelivery): void
    {
        $this->modeOfDelivery = $modeOfDelivery;
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
     * @return string|null
     */
    public function getOrganisationNumber(): ?string
    {
        return $this->organisationNumber;
    }

    /**
     * @param string|null $organisationNumber
     */
    public function setOrganisationNumber(?string $organisationNumber): void
    {
        $this->organisationNumber = $organisationNumber;
    }

    /**
     * @return string|null
     */
    public function getPaymentTerms(): ?string
    {
        return $this->paymentTerms;
    }

    /**
     * @param string|null $paymentTerms
     */
    public function setPaymentTerms(?string $paymentTerms): void
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @return string|null
     */
    public function getPg(): ?string
    {
        return $this->pg;
    }

    /**
     * @param string|null $pg
     */
    public function setPg(?string $pg): void
    {
        $this->pg = $pg;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int|null
     */
    public function getPricelist(): ?int
    {
        return $this->pricelist;
    }

    /**
     * @param int|null $pricelist
     */
    public function setPricelist(?int $pricelist): void
    {
        $this->pricelist = $pricelist;
    }

    /**
     * @return string|null
     */
    public function getReceivableAccount(): ?string
    {
        return $this->receivableAccount;
    }

    /**
     * @param string|null $receivableAccount
     */
    public function setReceivableAccount(?string $receivableAccount): void
    {
        $this->receivableAccount = $receivableAccount;
    }

    /**
     * @return bool
     */
    public function isRemindersAllowed(): bool
    {
        return $this->remindersAllowed;
    }

    /**
     * @param bool $remindersAllowed
     */
    public function setRemindersAllowed(bool $remindersAllowed): void
    {
        $this->remindersAllowed = $remindersAllowed;
    }

    /**
     * @return bool
     */
    public function isRemindersFeeAllowed(): bool
    {
        return $this->remindersFeeAllowed;
    }

    /**
     * @param bool $remindersFeeAllowed
     */
    public function setRemindersFeeAllowed(bool $remindersFeeAllowed): void
    {
        $this->remindersFeeAllowed = $remindersFeeAllowed;
    }

    /**
     * @return string|null
     */
    public function getResponsiblePerson(): ?string
    {
        return $this->responsiblePerson;
    }

    /**
     * @param string|null $responsiblePerson
     */
    public function setResponsiblePerson(?string $responsiblePerson): void
    {
        $this->responsiblePerson = $responsiblePerson;
    }

    /**
     * @return string|null
     */
    public function getSalesAccount(): ?string
    {
        return $this->salesAccount;
    }

    /**
     * @param string|null $salesAccount
     */
    public function setSalesAccount(?string $salesAccount): void
    {
        $this->salesAccount = $salesAccount;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return int|null
     */
    public function getVatCode(): ?int
    {
        return $this->vatCode;
    }

    /**
     * @param int|null $vatCode
     */
    public function setVatCode(?int $vatCode): void
    {
        $this->vatCode = $vatCode;
    }

    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * @param string|null $vatNumber
     */
    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return string|null
     */
    public function getWeb(): ?string
    {
        return $this->web;
    }

    /**
     * @param string|null $web
     */
    public function setWeb(?string $web): void
    {
        $this->web = $web;
    }

    /**
     * @return string|null
     */
    public function getYourReference(): ?string
    {
        return $this->yourReference;
    }

    /**
     * @param string|null $yourReference
     */
    public function setYourReference(?string $yourReference): void
    {
        $this->yourReference = $yourReference;
    }

    /**
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * @param string|null $zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip = $zip;
    }
}
