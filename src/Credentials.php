<?php

namespace JGI\BjornLunden;

class Credentials
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string
     */
    private $userKey;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @param string $userKey
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(string $userKey, string $clientId, string $clientSecret)
    {
        $this->userKey = $userKey;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getUserKey(): string
    {
        return $this->userKey;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

}
