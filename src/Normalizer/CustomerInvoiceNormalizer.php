<?php

namespace JGI\BjornLunden\Normalizer;

use JGI\BjornLunden\Model\CustomerInvoice;

class CustomerInvoiceNormalizer
{
    /**
     * @param CustomerInvoice $customerInvoice
     *
     * @return array
     */
    public static function normalize(CustomerInvoice $customerInvoice): array
    {
        return [
            'amountInLocalCurrency' => $customerInvoice->getAmountInLocalCurrency() ? $customerInvoice->getAmountInLocalCurrency() / 100 : null,
            'amountInOriginalCurrency' => $customerInvoice->getAmountInOriginalCurrency() ? $customerInvoice->getAmountInOriginalCurrency() / 100 : null,
            'amountPaidInLocalCurrency' => $customerInvoice->getAmountPaidInLocalCurrency() ? $customerInvoice->getAmountPaidInLocalCurrency() / 100 : null,
            'amountPaidInOriginalCurrency' => $customerInvoice->getAmountPaidInOriginalCurrency() ? $customerInvoice->getAmountPaidInOriginalCurrency() / 100 : null,
            'associatedCustomerPayments' => $customerInvoice->getAssociatedCustomerPayments(),
            'costBearerId' => $customerInvoice->getCostBearerId(),
            'costCenterId' => $customerInvoice->getCostCenterId(),
            'currency' => $customerInvoice->getCurrency(),
            'customerId' => $customerInvoice->getCustomerId(),
            'dateOfLatestPayment' => $customerInvoice->getDateOfLatestPayment() ? $customerInvoice->getDateOfLatestPayment()->format('Y-m-d') : null,
            'documentIds' => $customerInvoice->getDocumentIds(),
            'dueDate' => $customerInvoice->getDueDate() ? $customerInvoice->getDueDate()->format('Y-m-d') : null,
            'exchangeRate' => $customerInvoice->getExchangeRate(),
            'externalInvoiceId' => $customerInvoice->getExternalInvoiceId(),
            'invoiceDate' => $customerInvoice->getInvoiceDate() ? $customerInvoice->getInvoiceDate()->format('Y-m-d') : null,
            'invoiceNumber' => $customerInvoice->getInvoiceNumber(),
            'journalEntryDate' => $customerInvoice->getJournalEntryDate() ? $customerInvoice->getJournalEntryDate()->format('Y-m-d') : null,
            'journalEntryId' => $customerInvoice->getJournalEntryId(),
            'journalId' => $customerInvoice->getJournalId(),
            'numberOfRemindersSent' => $customerInvoice->getNumberOfRemindersSent(),
            'orderNumber' => $customerInvoice->getOrderNumber(),
            'paid' => $customerInvoice->isPaid(),
            'paymentType' => $customerInvoice->getPaymentType(),
            'preliminary' => $customerInvoice->isPreliminary(),
            'projectId' => $customerInvoice->getProjectId(),
            'receivableAccount' => $customerInvoice->getReceivableAccount(),
            'registeredByUser' => $customerInvoice->getRegisteredByUser(),
            'type' => $customerInvoice->getType(),
        ];
    }

    /**
     * @param array $data
     *
     * @return CustomerInvoice
     */
    public static function denormalize(array $data): CustomerInvoice
    {
        $customerInvoice = new CustomerInvoice();
        if ($data['amountInLocalCurrency']) {
            $customerInvoice->setAmountInLocalCurrency($data['amountInLocalCurrency'] * 100);
        }
        if ($data['amountInOriginalCurrency']) {
            $customerInvoice->setAmountInOriginalCurrency($data['amountInOriginalCurrency'] * 100);
        }
        if ($data['amountPaidInLocalCurrency']) {
            $customerInvoice->setAmountPaidInLocalCurrency($data['amountPaidInLocalCurrency'] * 100);
        }
        if ($data['amountPaidInOriginalCurrency']) {
            $customerInvoice->setAmountPaidInOriginalCurrency($data['amountPaidInOriginalCurrency'] * 100);
        }
        $customerInvoice->setAssociatedCustomerPayments($data['associatedCustomerPayments']);
        $customerInvoice->setCostBearerId($data['costBearerId']);
        $customerInvoice->setCostCenterId($data['costCenterId']);
        $customerInvoice->setCurrency($data['currency']);
        $customerInvoice->setCustomerId($data['customerId']);
        $customerInvoice->setDateOfLatestPayment(new \DateTimeImmutable($data['dateOfLatestPayment']));
        $customerInvoice->setDocumentIds($data['documentIds']);
        $customerInvoice->setDueDate(new \DateTimeImmutable($data['dueDate']));
        $customerInvoice->setExchangeRate($data['exchangeRate']);
        $customerInvoice->setExternalInvoiceId($data['externalInvoiceId']);
        $customerInvoice->setInvoiceDate(new \DateTimeImmutable($data['invoiceDate']));
        $customerInvoice->setInvoiceNumber($data['invoiceNumber']);
        $customerInvoice->setJournalEntryDate(new \DateTimeImmutable($data['journalEntryDate']));
        $customerInvoice->setJournalEntryId($data['journalEntryId']);
        $customerInvoice->setJournalId($data['journalId']);
        $customerInvoice->setNumberOfRemindersSent($data['numberOfRemindersSent']);
        $customerInvoice->setOrderNumber($data['orderNumber']);
        $customerInvoice->setPaid($data['paid']);
        $customerInvoice->setPaymentType($data['paymentType']);
        $customerInvoice->setPreliminary($data['preliminary']);
        $customerInvoice->setProjectId($data['projectId']);
        $customerInvoice->setReceivableAccount($data['receivableAccount']);
        $customerInvoice->setRegisteredByUser($data['registeredByUser']);
        $customerInvoice->setType($data['type']);

        return $customerInvoice;
    }
}
