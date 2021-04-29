<?php

namespace JGI\BjornLunden\Model;

class CustomerInvoice
{
    /**
     * @var int|null
     */
    private $amountInLocalCurrency;

    /**
     * @var int|null
     */
    private $amountInOriginalCurrency;

    /**
     * @var int|null
     */
    private $amountPaidInLocalCurrency;

    /**
     * @var int|null
     */
    private $amountPaidInOriginalCurrency;

    /**
     * @var array
     */
    private $associatedCustomerPayments = [];

    /**
     * @var string|null
     */
    private $costBearerId;

    /**
     * @var string|null
     */
    private $costCenterId;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * @var \DateTimeImmutable|null
     */
    private $dateOfLatestPayment;

    /**
     * @var array
     */
    private $documentIds = [];

    /**
     * @var \DateTimeImmutable|null
     */
    private $dueDate;

    /**
     * @var int|null
     */
    private $exchangeRate;

    /**
     * @var int|null
     */
    private $externalInvoiceId;

    /**
     * @var \DateTimeImmutable|null
     */
    private $invoiceDate;

    /**
     * @var int|null
     */
    private $invoiceNumber;

    /**
     * @var \DateTimeImmutable|null
     */
    private $journalEntryDate;

    /**
     * @var int|null
     */
    private $journalEntryId;

    /**
     * @var string|null
     */
    private $journalId;

    /**
     * @var int|null
     */
    private $numberOfRemindersSent;

    /**
     * @var int|null
     */
    private $orderNumber;

    /**
     * @var bool
     */
    private $paid = false;

    /**
     * @var int|null
     */
    private $paymentType;

    /**
     * @var bool
     */
    private $preliminary = false;

    /**
     * @var string|null
     */
    private $projectId;

    /**
     * @var string|null
     */
    private $receivableAccount;

    /**
     * @var string|null
     */
    private $registeredByUser;

    /**
     * @var LedgerEntry[]
     */
    private $subLedgerEntries = [];

    /**
     * @var string|null
     */
    private $type;

    /**
     * @return int|null
     */
    public function getAmountInLocalCurrency(): ?int
    {
        return $this->amountInLocalCurrency;
    }

    /**
     * @param int|null $amountInLocalCurrency
     */
    public function setAmountInLocalCurrency(?int $amountInLocalCurrency): void
    {
        $this->amountInLocalCurrency = $amountInLocalCurrency;
    }

    /**
     * @return int|null
     */
    public function getAmountInOriginalCurrency(): ?int
    {
        return $this->amountInOriginalCurrency;
    }

    /**
     * @param int|null $amountInOriginalCurrency
     */
    public function setAmountInOriginalCurrency(?int $amountInOriginalCurrency): void
    {
        $this->amountInOriginalCurrency = $amountInOriginalCurrency;
    }

    /**
     * @return int|null
     */
    public function getAmountPaidInLocalCurrency(): ?int
    {
        return $this->amountPaidInLocalCurrency;
    }

    /**
     * @param int|null $amountPaidInLocalCurrency
     */
    public function setAmountPaidInLocalCurrency(?int $amountPaidInLocalCurrency): void
    {
        $this->amountPaidInLocalCurrency = $amountPaidInLocalCurrency;
    }

    /**
     * @return int|null
     */
    public function getAmountPaidInOriginalCurrency(): ?int
    {
        return $this->amountPaidInOriginalCurrency;
    }

    /**
     * @param int|null $amountPaidInOriginalCurrency
     */
    public function setAmountPaidInOriginalCurrency(?int $amountPaidInOriginalCurrency): void
    {
        $this->amountPaidInOriginalCurrency = $amountPaidInOriginalCurrency;
    }

    /**
     * @return array
     */
    public function getAssociatedCustomerPayments(): array
    {
        return $this->associatedCustomerPayments;
    }

    /**
     * @param array $associatedCustomerPayments
     */
    public function setAssociatedCustomerPayments(array $associatedCustomerPayments): void
    {
        $this->associatedCustomerPayments = $associatedCustomerPayments;
    }

    /**
     * @return string|null
     */
    public function getCostBearerId(): ?string
    {
        return $this->costBearerId;
    }

    /**
     * @param string|null $costBearerId
     */
    public function setCostBearerId(?string $costBearerId): void
    {
        $this->costBearerId = $costBearerId;
    }

    /**
     * @return string|null
     */
    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }

    /**
     * @param string|null $costCenterId
     */
    public function setCostCenterId(?string $costCenterId): void
    {
        $this->costCenterId = $costCenterId;
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
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getDateOfLatestPayment(): ?\DateTimeImmutable
    {
        return $this->dateOfLatestPayment;
    }

    /**
     * @param \DateTimeImmutable|null $dateOfLatestPayment
     */
    public function setDateOfLatestPayment(?\DateTimeImmutable $dateOfLatestPayment): void
    {
        $this->dateOfLatestPayment = $dateOfLatestPayment;
    }

    /**
     * @return array
     */
    public function getDocumentIds(): array
    {
        return $this->documentIds;
    }

    /**
     * @param array $documentIds
     */
    public function setDocumentIds(array $documentIds): void
    {
        $this->documentIds = $documentIds;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getDueDate(): ?\DateTimeImmutable
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTimeImmutable|null $dueDate
     */
    public function setDueDate(?\DateTimeImmutable $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return int|null
     */
    public function getExchangeRate(): ?int
    {
        return $this->exchangeRate;
    }

    /**
     * @param int|null $exchangeRate
     */
    public function setExchangeRate(?int $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * @return int|null
     */
    public function getExternalInvoiceId(): ?int
    {
        return $this->externalInvoiceId;
    }

    /**
     * @param int|null $externalInvoiceId
     */
    public function setExternalInvoiceId(?int $externalInvoiceId): void
    {
        $this->externalInvoiceId = $externalInvoiceId;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getInvoiceDate(): ?\DateTimeImmutable
    {
        return $this->invoiceDate;
    }

    /**
     * @param \DateTimeImmutable|null $invoiceDate
     */
    public function setInvoiceDate(?\DateTimeImmutable $invoiceDate): void
    {
        $this->invoiceDate = $invoiceDate;
    }

    /**
     * @return int|null
     */
    public function getInvoiceNumber(): ?int
    {
        return $this->invoiceNumber;
    }

    /**
     * @param int|null $invoiceNumber
     */
    public function setInvoiceNumber(?int $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getJournalEntryDate(): ?\DateTimeImmutable
    {
        return $this->journalEntryDate;
    }

    /**
     * @param \DateTimeImmutable|null $journalEntryDate
     */
    public function setJournalEntryDate(?\DateTimeImmutable $journalEntryDate): void
    {
        $this->journalEntryDate = $journalEntryDate;
    }

    /**
     * @return int|null
     */
    public function getJournalEntryId(): ?string
    {
        return $this->journalEntryId;
    }

    /**
     * @param int|null $journalEntryId
     */
    public function setJournalEntryId(?int $journalEntryId): void
    {
        $this->journalEntryId = $journalEntryId;
    }

    /**
     * @return string|null
     */
    public function getJournalId(): ?string
    {
        return $this->journalId;
    }

    /**
     * @param string|null $journalId
     */
    public function setJournalId(?string $journalId): void
    {
        $this->journalId = $journalId;
    }

    /**
     * @return int|null
     */
    public function getNumberOfRemindersSent(): ?int
    {
        return $this->numberOfRemindersSent;
    }

    /**
     * @param int|null $numberOfRemindersSent
     */
    public function setNumberOfRemindersSent(?int $numberOfRemindersSent): void
    {
        $this->numberOfRemindersSent = $numberOfRemindersSent;
    }

    /**
     * @return int|null
     */
    public function getOrderNumber(): ?int
    {
        return $this->orderNumber;
    }

    /**
     * @param int|null $orderNumber
     */
    public function setOrderNumber(?int $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     */
    public function setPaid(bool $paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return int|null
     */
    public function getPaymentType(): ?int
    {
        return $this->paymentType;
    }

    /**
     * @param int|null $paymentType
     */
    public function setPaymentType(?int $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return bool
     */
    public function isPreliminary(): bool
    {
        return $this->preliminary;
    }

    /**
     * @param bool $preliminary
     */
    public function setPreliminary(bool $preliminary): void
    {
        $this->preliminary = $preliminary;
    }

    /**
     * @return string|null
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * @param string|null $projectId
     */
    public function setProjectId(?string $projectId): void
    {
        $this->projectId = $projectId;
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
     * @return string|null
     */
    public function getRegisteredByUser(): ?string
    {
        return $this->registeredByUser;
    }

    /**
     * @param string|null $registeredByUser
     */
    public function setRegisteredByUser(?string $registeredByUser): void
    {
        $this->registeredByUser = $registeredByUser;
    }

    /**
     * @return LedgerEntry[]
     */
    public function getSubLedgerEntries(): array
    {
        return $this->subLedgerEntries;
    }

    /**
     * @param LedgerEntry[] $subLedgerEntries
     */
    public function setSubLedgerEntries(array $subLedgerEntries): void
    {
        $this->subLedgerEntries = $subLedgerEntries;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

}
