<?php

namespace JGI\BjornLunden;

use GuzzleHttp\Client;
use JGI\BjornLunden\Model\Document;
use JGI\BjornLunden\Provider\CustomerInvoiceProvider;
use JGI\BjornLunden\Provider\DocumentProvider;
use JGI\BjornLunden\Provider\JournalProvider;
use JGI\BjornLunden\Provider\TokenProvider;
use JGI\BjornLunden\Provider\UserProvider;
use JGI\BjornLunden\Provider\CustomerProvider;

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
     * @return CustomerProvider
     */
    public function customers(Credentials $credentials): CustomerProvider
    {
        return new CustomerProvider($this->client, $credentials);
    }

    /**
     * @return CustomerInvoiceProvider
     */
    public function customerInvoices(Credentials $credentials): CustomerInvoiceProvider
    {
        return new CustomerInvoiceProvider($this->client, $credentials);
    }

    /**
     * @param Credentials $credentials
     * 
     * @return DocumentProvider
     */
    public function documents(Credentials $credentials): DocumentProvider
    {
        return new DocumentProvider($this->client, $credentials);
    }

    /**
     * @param Credentials $credentials
     *
     * @return JournalProvider
     */
    public function journals(Credentials $credentials): JournalProvider
    {
        return new JournalProvider($this->client, $credentials);
    }

    /**
     * @return TokenProvider
     */
    public function tokens(Credentials $credentials): TokenProvider
    {
        return new TokenProvider($this->client, $credentials);
    }
}
