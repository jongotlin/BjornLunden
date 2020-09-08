<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\Customer;
use JGI\BjornLunden\Model\User;
use JGI\BjornLunden\Provider\CustomerInvoiceProvider;
use JGI\BjornLunden\Provider\CustomerProvider;
use PHPUnit\Framework\TestCase;

class CustomerProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_returns_an_array_of_customers()
    {
        $json = file_get_contents(__DIR__ . '/json/customers.json');

        $customerProvider = new CustomerProvider($this->createHttpClientMock($json), $this->createCredentialsMock());
        $customers = $customerProvider->all();

        $this->assertIsArray($customers);
        $this->assertCount(14, $customers);
        $customer = $customers[0];
        $this->assertInstanceOf(Customer::class, $customer);
    }

    /**
     * @test
     */
    public function it_handles_bad_request()
    {
        $this->expectException(BjornLundenHttpException::class);

        $json = '{
            "timestamp": "2020-09-01T13:37:29.575+0000",
            "status": 400,
            "error": "Bad Request",
            "message": "JSON parse error: Cannot deserialize instance of `blaapi.domain.Customer` out of START_ARRAY token; nested exception is com.fasterxml.jackson.databind.exc.MismatchedInputException: Cannot deserialize instance of `blaapi.domain.Customer` out of START_ARRAY token\n at [Source: (PushbackInputStream); line: 1, column: 1]",
            "path": "/sp/customer/"
        }';

        $customerProvider = new CustomerProvider($this->createHttpClientMock($json), $this->createCredentialsMock());
        $customerProvider->create(new Customer());
    }


    /**
     * @test
     */
    public function it_creates_a_customer()
    {
        $json = file_get_contents(__DIR__ . '/json/customer.json');

        $customerProvider = new CustomerProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $customer = new Customer();
        $newCustomer = $customerProvider->create($customer);

        $this->assertInstanceOf(Customer::class, $newCustomer);
    }

    /**
     * @test
     */
    public function it_updates_a_customer()
    {
        $json = file_get_contents(__DIR__ . '/json/customer.json');

        $customerProvider = new CustomerProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );

        $customer = new Customer();
        $newCustomer = $customerProvider->update($customer);

        $this->assertInstanceOf(Customer::class, $newCustomer);
    }

    /**
     * @test
     */
    public function it_updates_a_customer_from_array()
    {
        $json = file_get_contents(__DIR__ . '/json/customer.json');

        $customerProvider = new CustomerProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );

        $newCustomer = $customerProvider->updateFromArray([]);

        $this->assertInstanceOf(Customer::class, $newCustomer);
    }
}
