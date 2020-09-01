<?php

namespace JGI\BjornLunden\Model;

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $entityId;

    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $socialSecurityNumber;

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $admin = false;

    /**
     * @var bool
     */
    private $accounting = false;

    /**
     * @var bool
     */
    private $accountingView = false;

    /**
     * @var bool
     */
    private $invoicing = false;

    /**
     * @var bool
     */
    private $invoicingView = false;

    /**
     * @var bool
     */
    private $cashRegister = false;

    /**
     * @var bool
     */
    private $supplier = false;

    /**
     * @var bool
     */
    private $supplierView = false;

    /**
     * @var bool
     */
    private $supplierAttest = false;

    /**
     * @var bool
     */
    private $salary = false;

    /**
     * @var bool
     */
    private $time = false;

    /**
     * @var bool
     */
    private $system = false;

    /**
     * @var bool
     */
    private $agi = false;

    /**
     * @var bool
     */
    private $integration = false;

    /**
     * @param int $id
     * @param int $entityId
     * @param string $uuid
     * @param string|null $name
     * @param string|null $email
     * @param string|null $socialSecurityNumber
     * @param string $type
     * @param bool $admin
     * @param bool $accounting
     * @param bool $accountingView
     * @param bool $invoicing
     * @param bool $invoicingView
     * @param bool $cashRegister
     * @param bool $supplier
     * @param bool $supplierView
     * @param bool $supplierAttest
     * @param bool $salary
     * @param bool $time
     * @param bool $system
     * @param bool $agi
     * @param bool $integration
     */
    public function __construct(int $id, int $entityId, string $uuid, ?string $name, ?string $email, ?string $socialSecurityNumber, string $type, bool $admin, bool $accounting, bool $accountingView, bool $invoicing, bool $invoicingView, bool $cashRegister, bool $supplier, bool $supplierView, bool $supplierAttest, bool $salary, bool $time, bool $system, bool $agi, bool $integration)
    {
        $this->id = $id;
        $this->entityId = $entityId;
        $this->uuid = $uuid;
        $this->name = $name;
        $this->email = $email;
        $this->socialSecurityNumber = $socialSecurityNumber;
        $this->type = $type;
        $this->admin = $admin;
        $this->accounting = $accounting;
        $this->accountingView = $accountingView;
        $this->invoicing = $invoicing;
        $this->invoicingView = $invoicingView;
        $this->cashRegister = $cashRegister;
        $this->supplier = $supplier;
        $this->supplierView = $supplierView;
        $this->supplierAttest = $supplierAttest;
        $this->salary = $salary;
        $this->time = $time;
        $this->system = $system;
        $this->agi = $agi;
        $this->integration = $integration;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getSocialSecurityNumber(): ?string
    {
        return $this->socialSecurityNumber;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->admin;
    }

    /**
     * @return bool
     */
    public function isAccounting(): bool
    {
        return $this->accounting;
    }

    /**
     * @return bool
     */
    public function isAccountingView(): bool
    {
        return $this->accountingView;
    }

    /**
     * @return bool
     */
    public function isInvoicing(): bool
    {
        return $this->invoicing;
    }

    /**
     * @return bool
     */
    public function isInvoicingView(): bool
    {
        return $this->invoicingView;
    }

    /**
     * @return bool
     */
    public function isCashRegister(): bool
    {
        return $this->cashRegister;
    }

    /**
     * @return bool
     */
    public function isSupplier(): bool
    {
        return $this->supplier;
    }

    /**
     * @return bool
     */
    public function isSupplierView(): bool
    {
        return $this->supplierView;
    }

    /**
     * @return bool
     */
    public function isSupplierAttest(): bool
    {
        return $this->supplierAttest;
    }

    /**
     * @return bool
     */
    public function isSalary(): bool
    {
        return $this->salary;
    }

    /**
     * @return bool
     */
    public function isTime(): bool
    {
        return $this->time;
    }

    /**
     * @return bool
     */
    public function isSystem(): bool
    {
        return $this->system;
    }

    /**
     * @return bool
     */
    public function isAgi(): bool
    {
        return $this->agi;
    }

    /**
     * @return bool
     */
    public function isIntegration(): bool
    {
        return $this->integration;
    }
}
