<?php

namespace JGI\BjornLunden\Model;

class Journal
{
    /**
     * @var int[]
     */
    private $documentIds = [];

    /**
     * @var string|null
     */
    private $entryInfoBy;

    /**
     * @var \DateTimeImmutable|null
     */
    private $entryInfoDate;

    /**
     * @var string|null
     */
    private $financialYearId;

    /**
     * @var LedgerEntry[]
     */
    private $ledgerEntries = [];

    /**
     * @var int|null
     */
    private $journalEntryId;

    /**
     * @var \DateTimeImmutable|null
     */
    private $journalEntryDate;

    /**
     * @var string|null
     */
    private $journalEntryText;

    /**
     * @var string|null
     */
    private $journalId;

    /**
     * @var string|null
     */
    private $journalName;

    /**
     * @var string|null
     */
    private $lockingInfoBy;

    /**
     * @var \DateTimeImmutable|null
     */
    private $lockingInfoDate;

    /**
     * @var \DateTimeImmutable|null
     */
    private $reportDate;

    /**
     * @return int[]
     */
    public function getDocumentIds(): array
    {
        return $this->documentIds;
    }

    /**
     * @param int[] $documentIds
     */
    public function setDocumentIds(array $documentIds): void
    {
        $this->documentIds = $documentIds;
    }

    /**
     * @return string|null
     */
    public function getEntryInfoBy(): ?string
    {
        return $this->entryInfoBy;
    }

    /**
     * @param string|null $entryInfoBy
     */
    public function setEntryInfoBy(?string $entryInfoBy): void
    {
        $this->entryInfoBy = $entryInfoBy;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getEntryInfoDate(): ?\DateTimeImmutable
    {
        return $this->entryInfoDate;
    }

    /**
     * @param \DateTimeImmutable|null $entryInfoDate
     */
    public function setEntryInfoDate(?\DateTimeImmutable $entryInfoDate): void
    {
        $this->entryInfoDate = $entryInfoDate;
    }

    /**
     * @return string|null
     */
    public function getFinancialYearId(): ?string
    {
        return $this->financialYearId;
    }

    /**
     * @param string|null $financialYearId
     */
    public function setFinancialYearId(?string $financialYearId): void
    {
        $this->financialYearId = $financialYearId;
    }

    /**
     * @return LedgerEntry[]
     */
    public function getLedgerEntries(): array
    {
        return $this->ledgerEntries;
    }

    /**
     * @param LedgerEntry[] $ledgerEntries
     */
    public function setLedgerEntries(array $ledgerEntries): void
    {
        $this->ledgerEntries = $ledgerEntries;
    }

    /**
     * @param LedgerEntry $ledgerEntry
     */
    public function addLedgerEntry(LedgerEntry $ledgerEntry): void
    {
        $this->ledgerEntries[] = $ledgerEntry;
    }

    /**
     * @return int|null
     */
    public function getJournalEntryId(): ?int
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
     * @return string|null
     */
    public function getJournalEntryText(): ?string
    {
        return $this->journalEntryText;
    }

    /**
     * @param string|null $journalEntryText
     */
    public function setJournalEntryText(?string $journalEntryText): void
    {
        $this->journalEntryText = $journalEntryText;
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
     * @return string|null
     */
    public function getJournalName(): ?string
    {
        return $this->journalName;
    }

    /**
     * @param string|null $journalName
     */
    public function setJournalName(?string $journalName): void
    {
        $this->journalName = $journalName;
    }

    /**
     * @return string|null
     */
    public function getLockingInfoBy(): ?string
    {
        return $this->lockingInfoBy;
    }

    /**
     * @param string|null $lockingInfoBy
     */
    public function setLockingInfoBy(?string $lockingInfoBy): void
    {
        $this->lockingInfoBy = $lockingInfoBy;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getLockingInfoDate(): ?\DateTimeImmutable
    {
        return $this->lockingInfoDate;
    }

    /**
     * @param \DateTimeImmutable|null $lockingInfoDate
     */
    public function setLockingInfoDate(?\DateTimeImmutable $lockingInfoDate): void
    {
        $this->lockingInfoDate = $lockingInfoDate;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getReportDate(): ?\DateTimeImmutable
    {
        return $this->reportDate;
    }

    /**
     * @param \DateTimeImmutable|null $reportDate
     */
    public function setReportDate(?\DateTimeImmutable $reportDate): void
    {
        $this->reportDate = $reportDate;
    }
}
