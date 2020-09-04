<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\CustomerInvoice;
use JGI\BjornLunden\Provider\CustomerInvoiceProvider;
use JGI\BjornLunden\Provider\CustomerProvider;
use PHPUnit\Framework\TestCase;

class CustomerInvoiceProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_returns_an_array_of_customer_invoices()
    {
        $json = file_get_contents(__DIR__ . '/json/customerinvoices.json');

        $customerInvoiceProvider = new CustomerInvoiceProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $customerInvoices = $customerInvoiceProvider->all();

        $this->assertIsArray($customerInvoices);
        $this->assertCount(50, $customerInvoices);
        $customerInvoice = $customerInvoices[0];
        $this->assertInstanceOf(CustomerInvoice::class, $customerInvoice);
    }

    /**
     * @test
     */
    public function it_creates_an_invoice()
    {
        $json = file_get_contents(__DIR__ . '/json/customerinvoice.json');

        $customerInvoiceProvider = new CustomerInvoiceProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $customerInvoice = new CustomerInvoice();
        $newCustomerInvoice = $customerInvoiceProvider->create($customerInvoice);

        $this->assertInstanceOf(CustomerInvoice::class, $newCustomerInvoice);
    }
}
