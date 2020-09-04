<?php


namespace JGI\BjornLunden\Normalizer;

use JGI\BjornLunden\Model\Customer;

class CustomerNormalizer
{
    /**
     * @param Customer $customer
     *
     * @return array
     */
    public static function normalize(Customer $customer): array
    {
        return [
            'bg' => $customer->getBg(),
            'box' => $customer->getBox(),
            'category' => $customer->getCategory(),
            'city' => $customer->getCity(),
            'closed' => $customer->isClosed(),
            'comment' => $customer->getComment(),
            'country' => $customer->getCountry(),
            'creditLimit' => $customer->getCreditLimit(),
            'currency' => $customer->getCurrency(),
            'deliveryTerms' => $customer->getDeliveryTerms(),
            'email' => $customer->getEmail(),
            'fax' => $customer->getFax(),
            'gln' => $customer->getGln(),
            'id' => $customer->getId(),
            'interestInvoicingAllowed' => $customer->isInterestInvoicingAllowed(),
            'invoiceBy' => $customer->getInvoiceBy(),
            'invoiceTo' => $customer->getInvoiceTo(),
            'mobile' => $customer->getMobile(),
            'modeOfDelivery' => $customer->getModeOfDelivery(),
            'name' => $customer->getName(),
            'organisationNumber' => $customer->getOrganisationNumber(),
            'paymentTerms' => $customer->getPaymentTerms(),
            'pg' => $customer->getPg(),
            'phone' => $customer->getPhone(),
            'pricelist' => $customer->getPricelist(),
            'receivableAccount' => $customer->getReceivableAccount(),
            'remindersAllowed' => $customer->isRemindersAllowed(),
            'remindersFeeAllowed' => $customer->isRemindersFeeAllowed(),
            'responsiblePerson' => $customer->getResponsiblePerson(),
            'salesAccount' => $customer->getSalesAccount(),
            'street' => $customer->getStreet(),
            'vatCode' => $customer->getVatCode(),
            'vatNumber' => $customer->getVatNumber(),
            'web' => $customer->getWeb(),
            'yourReference' => $customer->getYourReference(),
            'zip' => $customer->getZip(),
        ];
    }

    /**
     * @param array $data
     *
     * @return Customer
     */
    public static function denormalize(array $data): Customer
    {
        $customer = new Customer();
        $customer->setBg($data['bg']);
        $customer->setBox($data['box']);
        $customer->setCategory($data['category']);
        $customer->setCity($data['city']);
        if (!is_null($data['closed'])) {
            $customer->setClosed($data['closed']);
        }
        $customer->setComment($data['comment']);
        $customer->setCountry($data['country']);
        $customer->setCreditLimit($data['creditLimit']);
        $customer->setCurrency($data['currency']);
        $customer->setDeliveryTerms($data['deliveryTerms']);
        $customer->setEmail($data['email']);
        $customer->setFax($data['fax']);
        $customer->setGln($data['gln']);
        $customer->setId($data['id']);
        if (!is_null($data['interestInvoicingAllowed'])) {
            $customer->setInterestInvoicingAllowed($data['interestInvoicingAllowed']);
        }
        $customer->setInvoiceBy($data['invoiceBy']);
        $customer->setInvoiceTo($data['invoiceTo']);
        $customer->setMobile($data['mobile']);
        $customer->setModeOfDelivery($data['modeOfDelivery']);
        $customer->setName($data['name']);
        $customer->setOrganisationNumber($data['organisationNumber']);
        $customer->setPaymentTerms($data['paymentTerms']);
        $customer->setPg($data['pg']);
        $customer->setPhone($data['phone']);
        $customer->setPricelist($data['pricelist']);
        $customer->setReceivableAccount($data['receivableAccount']);
        if (!is_null($data['remindersAllowed'])) {
            $customer->setRemindersAllowed($data['remindersAllowed']);
        }
        if (!is_null($data['remindersFeeAllowed'])) {
            $customer->setRemindersFeeAllowed($data['remindersFeeAllowed']);
        }
        $customer->setResponsiblePerson($data['responsiblePerson']);
        $customer->setSalesAccount($data['salesAccount']);
        $customer->setStreet($data['street']);
        $customer->setVatCode($data['vatCode']);
        $customer->setVatNumber($data['vatNumber']);
        $customer->setWeb($data['web']);
        $customer->setYourReference($data['yourReference']);
        $customer->setZip($data['zip']);

        return $customer;
    }
}
