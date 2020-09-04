<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Model\User;
use JGI\BjornLunden\Provider\UserProvider;
use PHPUnit\Framework\TestCase;

class UserProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_returns_an_array_of_users()
    {
        $json = file_get_contents(__DIR__ . '/json/users.json');

        $userProvider = new UserProvider($this->createHttpClientMock($json), $this->createCredentialsMock());
        $users = $userProvider->all();

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
