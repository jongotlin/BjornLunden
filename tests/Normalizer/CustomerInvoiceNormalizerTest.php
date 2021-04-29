<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Normalizer;

use JGI\BjornLunden\Model\CustomerInvoice;
use JGI\BjornLunden\Normalizer\CustomerInvoiceNormalizer;
use PHPUnit\Framework\TestCase;

class CustomerInvoiceNormalizerTest extends TestCase
{
    /**
     * @test
     */
    public function it_normalize_a_customer_invoice()
    {
        $customerInvoice = new CustomerInvoice();
        $customerInvoice->setAmountInLocalCurrency(100000);
        $customerInvoice->setAmountInOriginalCurrency(100000);
        $customerInvoice->setAmountPaidInLocalCurrency(100000);
        $customerInvoice->setAmountPaidInOriginalCurrency(100000);
        $customerInvoice->setAssociatedCustomerPayments([]);
        $customerInvoice->setCostBearerId('32');
        $customerInvoice->setCostCenterId('52');
        $customerInvoice->setCurrency('SEK');
        $customerInvoice->setCustomerId('0013');
        $customerInvoice->setDateOfLatestPayment(new \DateTimeImmutable('2013-03-18'));
        $customerInvoice->setDocumentIds([]);
        $customerInvoice->setDueDate(new \DateTimeImmutable('2011-03-23'));
        $customerInvoice->setExchangeRate(1);
        $customerInvoice->setExternalInvoiceId(32);
        $customerInvoice->setInvoiceDate(new \DateTimeImmutable('2011-02-21'));
        $customerInvoice->setInvoiceNumber(878787);
        $customerInvoice->setJournalEntryDate(new \DateTimeImmutable('2011-02-22'));
        $customerInvoice->setJournalEntryId(2);
        $customerInvoice->setJournalId('F');
        $customerInvoice->setNumberOfRemindersSent(0);
        $customerInvoice->setOrderNumber(0);
        $customerInvoice->setPaid(true);
        $customerInvoice->setPaymentType(1);
        $customerInvoice->setPreliminary(false);
        $customerInvoice->setProjectId('P21');
        $customerInvoice->setReceivableAccount('1510');
        $customerInvoice->setRegisteredByUser('PEM');
        $customerInvoice->setType('Manuell');

        $expected = [
            'amountInLocalCurrency' => 1000,
            'amountInOriginalCurrency' => 1000,
            'amountPaidInLocalCurrency' => 1000,
            'amountPaidInOriginalCurrency' => 1000,
            'associatedCustomerPayments' => [],
            'costBearerId' => '32',
            'costCenterId' => '52',
            'currency' => 'SEK',
            'customerId' => '0013',
            'dateOfLatestPayment' => '2013-03-18',
            'documentIds' => [],
            'dueDate' => '2011-03-23',
            'exchangeRate' => 1,
            'externalInvoiceId' => 32,
            'invoiceDate' => '2011-02-21',
            'invoiceNumber' => 878787,
            'journalEntryDate' => '2011-02-22',
            'journalEntryId' => 2,
            'journalId' => 'F',
            'numberOfRemindersSent' => 0,
            'orderNumber' => 0,
            'paid' => true,
            'paymentType' => 1,
            'preliminary' => false,
            'projectId' => 'P21',
            'receivableAccount' => '1510',
            'registeredByUser' => 'PEM',
            'subLedgerEntries' => [],
            'type' => 'Manuell',
        ];

        $this->assertEquals($expected, CustomerInvoiceNormalizer::normalize($customerInvoice));
    }

    /**
     * @test
     */
    public function it_denormalize_a_customer_invoice()
    {
        $data = [
            'amountInLocalCurrency' => 1000,
            'amountInOriginalCurrency' => 1000,
            'amountPaidInLocalCurrency' => 1000,
            'amountPaidInOriginalCurrency' => 1000,
            'associatedCustomerPayments' => [],
            'costBearerId' => '32',
            'costCenterId' => '52',
            'currency' => 'SEK',
            'customerId' => '0013',
            'dateOfLatestPayment' => '2013-03-18',
            'documentIds' => [],
            'dueDate' => '2011-03-23',
            'exchangeRate' => 1,
            'externalInvoiceId' => 32,
            'invoiceDate' => '2011-02-21',
            'invoiceNumber' => 878787,
            'journalEntryDate' => '2011-02-22',
            'journalEntryId' => 2,
            'journalId' => 'F',
            'numberOfRemindersSent' => 0,
            'orderNumber' => 0,
            'paid' => true,
            'paymentType' => 1,
            'preliminary' => false,
            'projectId' => 'P21',
            'receivableAccount' => '1510',
            'registeredByUser' => 'PEM',
            'type' => 'Manuell',
        ];

        $customerInvoice = CustomerInvoiceNormalizer::denormalize($data);
        $this->assertEquals(100000, $customerInvoice->getAmountInLocalCurrency());
        $this->assertEquals(100000, $customerInvoice->getAmountInOriginalCurrency());
        $this->assertEquals(100000, $customerInvoice->getAmountPaidInLocalCurrency());
        $this->assertEquals(100000, $customerInvoice->getAmountPaidInOriginalCurrency());
        $this->assertEquals([], $customerInvoice->getAssociatedCustomerPayments());
        $this->assertEquals('32', $customerInvoice->getCostBearerId());
        $this->assertEquals('52', $customerInvoice->getCostCenterId());
        $this->assertEquals('SEK', $customerInvoice->getCurrency());
        $this->assertEquals('0013', $customerInvoice->getCustomerId());
        $this->assertEquals('2013-03-18', $customerInvoice->getDateOfLatestPayment()->format('Y-m-d'));
        $this->assertEquals([], $customerInvoice->getDocumentIds());
        $this->assertEquals('2011-03-23', $customerInvoice->getDueDate()->format('Y-m-d'));
        $this->assertEquals(1, $customerInvoice->getExchangeRate());
        $this->assertEquals(32, $customerInvoice->getExternalInvoiceId());
        $this->assertEquals('2011-02-21', $customerInvoice->getInvoiceDate()->format('Y-m-d'));
        $this->assertEquals(878787, $customerInvoice->getInvoiceNumber());
        $this->assertEquals('2011-02-22', $customerInvoice->getJournalEntryDate()->format('Y-m-d'));
        $this->assertEquals(2, $customerInvoice->getJournalEntryId());
        $this->assertEquals('F', $customerInvoice->getJournalId());
        $this->assertEquals(0, $customerInvoice->getNumberOfRemindersSent());
        $this->assertEquals(0, $customerInvoice->getOrderNumber());
        $this->assertTrue($customerInvoice->isPaid());
        $this->assertEquals(1, $customerInvoice->getPaymentType());
        $this->assertFalse($customerInvoice->isPreliminary());
        $this->assertEquals('P21', $customerInvoice->getProjectId());
        $this->assertEquals('1510', $customerInvoice->getReceivableAccount());
        $this->assertEquals('PEM', $customerInvoice->getRegisteredByUser());
        $this->assertEquals('Manuell', $customerInvoice->getType());
    }
}
