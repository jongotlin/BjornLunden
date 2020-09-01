<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use Http\Client\HttpClient;
use GuzzleHttp\Client;
use JGI\BjornLunden\Credentials;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

trait ProviderTestTrait
{
    /**
     * @param string|null $json
     *
     * @return MockObject|HttpClient
     */
    private function createHttpClientMock(?string $json): Client
    {
        $httpClientMock = $this->getMockBuilder(Client::class)->getMock();
        $responseMock = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $streamMock = $this->getMockBuilder(StreamInterface::class)->getMock();
        $streamMock->method('getContents')->willReturn($json);
        $responseMock->method('getBody')->willReturn($streamMock);
        $httpClientMock->method('__call')->willReturn($responseMock);

        return $httpClientMock;
    }

    /**
     * @return MockObject|Credentials
     */
    private function createCredentialsMock(): Credentials
    {
        $credentialsMock = $this->createMock(Credentials::class);
        $credentialsMock->method('getToken')->willReturn('foo');

        return $credentialsMock;
    }
}
