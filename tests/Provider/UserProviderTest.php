<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Model\User;
use PHPUnit\Framework\TestCase;

class UserProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_returns_an_array_of_users()
    {
        $json = '[{
            "entityId": 2,
            "id": 6,
            "uuid": "3061e68b-eed8-4f11-972a-a08a56c00f11",
            "name": "LN",
            "email": "jon@jon.se",
            "socialSecurityNumber": null,
            "type": "225627",
            "admin": false,
            "accounting": false,
            "accountingView": false,
            "invoicing": false,
            "invoicingView": false,
            "cashRegister": false,
            "supplier": false,
            "supplierView": false,
            "supplierAttest": false,
            "salary": false,
            "time": false,
            "system": false,
            "agi": false,
            "integration": false
        }, {
            "entityId": 3,
            "id": 8,
            "uuid": "3b29479e-4cd8-48b9-996e-bca7eaad95e1",
            "name": "BL Digital Intelligens",
            "email": null,
            "socialSecurityNumber": null,
            "type": "EXTERNAL",
            "admin": false,
            "accounting": false,
            "accountingView": false,
            "invoicing": false,
            "invoicingView": false,
            "cashRegister": false,
            "supplier": false,
            "supplierView": false,
            "supplierAttest": false,
            "salary": false,
            "time": false,
            "system": false,
            "agi": false,
            "integration": false
        }, {
            "entityId": 4,
            "id": 2,
            "uuid": "599008e0-ce8c-4f26-bf05-b286489e210e",
            "name": "*",
            "email": null,
            "socialSecurityNumber": null,
            "type": "225627",
            "admin": false,
            "accounting": false,
            "accountingView": false,
            "invoicing": false,
            "invoicingView": false,
            "cashRegister": false,
            "supplier": false,
            "supplierView": false,
            "supplierAttest": false,
            "salary": false,
            "time": false,
            "system": false,
            "agi": false,
            "integration": false
        }, {
            "entityId": 10,
            "id": 7,
            "uuid": "a5c7094c-ca46-4945-9d36-600918e76ef4",
            "name": "LN",
            "email": "",
            "socialSecurityNumber": "",
            "type": "225627",
            "admin": true,
            "accounting": true,
            "accountingView": false,
            "invoicing": true,
            "invoicingView": false,
            "cashRegister": true,
            "supplier": true,
            "supplierView": false,
            "supplierAttest": false,
            "salary": true,
            "time": true,
            "system": true,
            "agi": false,
            "integration": false
        }, {
            "entityId": 6,
            "id": 3,
            "uuid": "b11d7d19-3c55-4cea-bf87-13d294ab09c3",
            "name": "Jenny Karlstedt",
            "email": null,
            "socialSecurityNumber": null,
            "type": "225627",
            "admin": false,
            "accounting": false,
            "accountingView": false,
            "invoicing": false,
            "invoicingView": false,
            "cashRegister": false,
            "supplier": false,
            "supplierView": false,
            "supplierAttest": false,
            "salary": false,
            "time": false,
            "system": false,
            "agi": false,
            "integration": false
        }, {
            "entityId": 7,
            "id": 5,
            "uuid": "b952b8ec-a253-4e93-887f-8c3662ef9061",
            "name": "Jenny Karlstedt",
            "email": null,
            "socialSecurityNumber": null,
            "type": "225627",
            "admin": false,
            "accounting": false,
            "accountingView": false,
            "invoicing": false,
            "invoicingView": false,
            "cashRegister": false,
            "supplier": false,
            "supplierView": false,
            "supplierAttest": false,
            "salary": false,
            "time": false,
            "system": false,
            "agi": false,
            "integration": false
        }, {
            "entityId": 8,
            "id": 1,
            "uuid": "ba3932a4-8d12-48f2-9907-21f79779bdd0",
            "name": "*",
            "email": null,
            "socialSecurityNumber": null,
            "type": "225627",
            "admin": false,
            "accounting": false,
            "accountingView": false,
            "invoicing": false,
            "invoicingView": false,
            "cashRegister": false,
            "supplier": false,
            "supplierView": false,
            "supplierAttest": false,
            "salary": false,
            "time": false,
            "system": false,
            "agi": false,
            "integration": false
        }, {
            "entityId": 9,
            "id": 4,
            "uuid": "c81224d0-ea96-496c-ace4-0508ce1d0fa8",
            "name": "Jenny Karlstedt",
            "email": null,
            "socialSecurityNumber": null,
            "type": "225627",
            "admin": false,
            "accounting": false,
            "accountingView": false,
            "invoicing": false,
            "invoicingView": false,
            "cashRegister": false,
            "supplier": false,
            "supplierView": false,
            "supplierAttest": false,
            "salary": false,
            "time": false,
            "system": false,
            "agi": false,
            "integration": false
        }]';

        $bjornLunden = new BjornLunden($this->createHttpClientMock($json));
        $users = $bjornLunden->users($this->createCredentialsMock())->all();

        $this->assertIsArray($users);
        $this->assertCount(8, $users);
        $user = $users[0];
        $this->assertInstanceOf(User::class, $user);

        $this->assertEquals(2, $user->getEntityId());
        $this->assertEquals('6', $user->getId());
        $this->assertEquals('3061e68b-eed8-4f11-972a-a08a56c00f11', $user->getUuid());
        $this->assertEquals('LN', $user->getName());
        $this->assertEquals('jon@jon.se', $user->getEmail());
        $this->assertNull($user->getSocialSecurityNumber());
        $this->assertEquals('225627', $user->getType());
        $this->assertFalse($user->isAdmin());
        $this->assertFalse($user->isAccounting());
        $this->assertFalse($user->isAccountingView());
        $this->assertFalse($user->isInvoicing());
        $this->assertFalse($user->isInvoicingView());
        $this->assertFalse($user->isCashRegister());
        $this->assertFalse($user->isSupplier());
        $this->assertFalse($user->isSupplierView());
        $this->assertFalse($user->isSupplierAttest());
        $this->assertFalse($user->isSalary());
        $this->assertFalse($user->isTime());
        $this->assertFalse($user->isSystem());
        $this->assertFalse($user->isAgi());
        $this->assertFalse($user->isIntegration());
    }
}
