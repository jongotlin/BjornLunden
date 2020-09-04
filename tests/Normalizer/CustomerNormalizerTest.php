<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Normalizer;

use JGI\BjornLunden\Model\Customer;
use JGI\BjornLunden\Normalizer\CustomerNormalizer;
use PHPUnit\Framework\TestCase;

class CustomerNormalizerTest extends TestCase
{
    /**
     * @test
     */
    public function it_normalize_a_customer()
    {
        $customer = new Customer();
        $customer->setBg('900-1234');
        $customer->setBox('BOX 7334');
        $customer->setCategory('1');
        $customer->setCity('STOCKHOLM');
        $customer->setClosed(false);
        $customer->setComment('Important');
        $customer->setCountry('Sweden');
        $customer->setCreditLimit(50000);
        $customer->setCurrency('SEK');
        $customer->setDeliveryTerms('0');
        $customer->setEmail('testmail@prov.nu');
        $customer->setFax('0650-12345');
        $customer->setGln('test-gln');
        $customer->setId('+123');
        $customer->setInterestInvoicingAllowed(false);
        $customer->setInvoiceBy('email');
        $customer->setInvoiceTo('Mr Smith');
        $customer->setMobile('070-1234567');
        $customer->setModeOfDelivery('0');
        $customer->setName('Exportkreditnämnden');
        $customer->setOrganisationNumber('660708-4958');
        $customer->setPaymentTerms('30');
        $customer->setPg('1234567-8');
        $customer->setPhone('0650-12354');
        $customer->setPricelist(1);
        $customer->setReceivableAccount('1522');
        $customer->setRemindersAllowed(false);
        $customer->setRemindersFeeAllowed(false);
        $customer->setResponsiblePerson('Kalle');
        $customer->setSalesAccount('A32');
        $customer->setStreet('Storgatan 32');
        $customer->setVatCode(1);
        $customer->setVatNumber('SE999999999999');
        $customer->setWeb('www.sida.se');
        $customer->setYourReference('Sven Svensson');
        $customer->setZip('103 90');


        $expected = [
            'bg' => '900-1234',
            'box' => 'BOX 7334',
            'category' => '1',
            'city' => 'STOCKHOLM',
            'closed' => false,
            'comment' => 'Important',
            'country' => 'Sweden',
            'creditLimit' => 50000,
            'currency' => 'SEK',
            'deliveryTerms' => '0',
            'email' => 'testmail@prov.nu',
            'fax' => '0650-12345',
            'gln' => 'test-gln',
            'id' => '+123',
            'interestInvoicingAllowed' => false,
            'invoiceBy' => 'email',
            'invoiceTo' => 'Mr Smith',
            'mobile' => '070-1234567',
            'modeOfDelivery' => '0',
            'name' => 'Exportkreditnämnden',
            'organisationNumber' => '660708-4958',
            'paymentTerms' => '30',
            'pg' => '1234567-8',
            'phone' => '0650-12354',
            'pricelist' => 1,
            'receivableAccount' => '1522',
            'remindersAllowed' => false,
            'remindersFeeAllowed' => false,
            'responsiblePerson' => 'Kalle',
            'salesAccount' => 'A32',
            'street' => 'Storgatan 32',
            'vatCode' => 1,
            'vatNumber' => 'SE999999999999',
            'web' => 'www.sida.se',
            'yourReference' => 'Sven Svensson',
            'zip' => '103 90',
        ];

        $this->assertEquals($expected, CustomerNormalizer::normalize($customer));
    }

    /**
     * @test
     */
    public function it_denormalize_a_customer()
    {
        $data = [
            'bg' => '900-1234',
            'box' => 'BOX 7334',
            'category' => '1',
            'city' => 'STOCKHOLM',
            'closed' => false,
            'comment' => 'Important',
            'country' => 'Sweden',
            'creditLimit' => 50000,
            'currency' => 'SEK',
            'deliveryTerms' => '0',
            'email' => 'testmail@prov.nu',
            'fax' => '0650-12345',
            'gln' => 'test-gln',
            'id' => '+123',
            'interestInvoicingAllowed' => false,
            'invoiceBy' => 'email',
            'invoiceTo' => 'Mr Smith',
            'mobile' => '070-1234567',
            'modeOfDelivery' => '0',
            'name' => 'Exportkreditnämnden',
            'organisationNumber' => '660708-4958',
            'paymentTerms' => '30',
            'pg' => '1234567-8',
            'phone' => '0650-12354',
            'pricelist' => 1,
            'receivableAccount' => '1522',
            'remindersAllowed' => false,
            'remindersFeeAllowed' => false,
            'responsiblePerson' => 'Kalle',
            'salesAccount' => 'A32',
            'street' => 'Storgatan 32',
            'vatCode' => 1,
            'vatNumber' => 'SE999999999999',
            'web' => 'www.sida.se',
            'yourReference' => 'Sven Svensson',
            'zip' => '103 90',
        ];

        $customer = CustomerNormalizer::denormalize($data);

        $this->assertEquals('900-1234', $customer->getBg());
        $this->assertEquals('BOX 7334', $customer->getBox());
        $this->assertEquals('1', $customer->getCategory());
        $this->assertEquals('STOCKHOLM', $customer->getCity());
        $this->assertFalse($customer->isClosed());
        $this->assertEquals('Important', $customer->getComment());
        $this->assertEquals('Sweden', $customer->getCountry());
        $this->assertEquals(50000, $customer->getCreditLimit());
        $this->assertEquals('SEK', $customer->getCurrency());
        $this->assertEquals('0', $customer->getDeliveryTerms());
        $this->assertEquals('testmail@prov.nu', $customer->getEmail());
        $this->assertEquals('0650-12345', $customer->getFax());
        $this->assertEquals('test-gln', $customer->getGln());
        $this->assertEquals('+123', $customer->getId());
        $this->assertFalse($customer->isInterestInvoicingAllowed());
        $this->assertEquals('email', $customer->getInvoiceBy());
        $this->assertEquals('Mr Smith', $customer->getInvoiceTo());
        $this->assertEquals('070-1234567', $customer->getMobile());
        $this->assertEquals('0', $customer->getModeOfDelivery());
        $this->assertEquals('Exportkreditnämnden', $customer->getName());
        $this->assertEquals('660708-4958', $customer->getOrganisationNumber());
        $this->assertEquals('30', $customer->getPaymentTerms());
        $this->assertEquals('1234567-8', $customer->getPg());
        $this->assertEquals('0650-12354', $customer->getPhone());
        $this->assertEquals(1, $customer->getPricelist());
        $this->assertEquals('1522', $customer->getReceivableAccount());
        $this->assertFalse($customer->isRemindersAllowed());
        $this->assertFalse($customer->isRemindersFeeAllowed());
        $this->assertEquals('Kalle', $customer->getResponsiblePerson());
        $this->assertEquals('A32', $customer->getSalesAccount());
        $this->assertEquals('Storgatan 32', $customer->getStreet());
        $this->assertEquals(1, $customer->getVatCode());
        $this->assertEquals('SE999999999999', $customer->getVatNumber());
        $this->assertEquals('www.sida.se', $customer->getWeb());
        $this->assertEquals('Sven Svensson', $customer->getYourReference());
        $this->assertEquals('103 90', $customer->getZip());
    }
}
