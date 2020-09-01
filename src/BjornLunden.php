<?php

namespace JGI\BjornLunden;

use GuzzleHttp\Client;
use JGI\BjornLunden\Provider\TokenProvider;
use JGI\BjornLunden\Provider\UserProvider;

class BjornLunden
{
    const API_URL = 'https://apigateway.blinfo.se/bla-api/v11/sp/';
    const AUTH_URL = 'https://apigateway.blinfo.se/auth/oauth/v2/token';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Credentials|null
     */
    private $credentials;

    /**
     * @param Client $client
     * @param Credentials $credentials
     */
    public function __construct(Client $client, Credentials $credentials)
    {
        $this->client = $client;
        $this->credentials = $credentials;
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @param Credentials $credentials
     */
    public function setCredentials(Credentials $credentials): void
    {
        $this->credentials = $credentials;
    }

    /**
     * @return Credentials
     */
    public function getCredentials(): Credentials
    {
        return $this->credentials;
    }

    /**
     * @return UserProvider
     */
    public function users(): UserProvider
    {
        return new UserProvider($this->client, $this->credentials);
    }

    /**
     * @return TokenProvider
     */
    public function tokens(): TokenProvider
    {
        return new TokenProvider($this->client, $this->credentials);
    }
}
