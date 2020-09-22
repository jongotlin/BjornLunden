<?php

namespace JGI\BjornLunden\Model;

class LedgerEntry
{
    /**
     * @var string|null
     */
    private $accountId;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $costBearerId;

    /**
     * @var string|null
     */
    private $costCenterId;

    /**
     * @var \DateTimeImmutable|null
     */
    private $date;

    /**
     * @var string|null
     */
    private $projectId;

    /**
     * @var float|null
     */
    private $quantity;

    /**
     * @var string|null
     */
    private $text;

    /**
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string|null $accountId
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
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
     * @return \DateTimeImmutable|null
     */
    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @param \DateTimeImmutable|null $date
     */
    public function setDate(?\DateTimeImmutable $date): void
    {
        $this->date = $date;
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
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * @param float|null $quantity
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}
