<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Model\Token;
use JGI\BjornLunden\Model\User;
use PHPUnit\Framework\TestCase;

class TokenProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_returns_a_token()
    {
        $json = '{
            "access_token":"5279432c-c5e9-4287-ac11-0708c737fe3b",
            "token_type":"Bearer",
            "expires_in":3600,
            "scope":"oob"
        }';

        $bjornLunden = new BjornLunden($this->createHttpClientMock($json));
        $token = $bjornLunden->tokens($this->createCredentialsMock())->create();

        $this->assertInstanceOf(Token::class, $token);

        $this->assertEquals('5279432c-c5e9-4287-ac11-0708c737fe3b', $token->getAccessToken());
        $this->assertEquals('Bearer', $token->getTokenType());
        $this->assertEquals(3600, $token->getExpiresIn());
        $this->assertInstanceOf(\DateTimeImmutable::class, $token->getExpiresAt());
        $this->assertGreaterThan(new \DateTime(), $token->getExpiresAt());
        $this->assertEquals('oob', $token->getScope());
    }
}
