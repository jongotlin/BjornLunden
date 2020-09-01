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
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @return UserProvider
     */
    public function users(Credentials $credentials): UserProvider
    {
        return new UserProvider($this->client, $credentials);
    }

    /**
     * @return TokenProvider
     */
    public function tokens(Credentials $credentials): TokenProvider
    {
        return new TokenProvider($this->client, $credentials);
    }
}
