<?php

namespace JGI\BjornLunden\Provider;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenException;
use JGI\BjornLunden\BjornLunden;

abstract class BaseProvider implements ProviderInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @param Client $client
     * @param Credentials $credentials
     */
    public function __construct(Client $client, Credentials $credentials)
    {
        $this->client = $client;
        $this->credentials = $credentials;
    }

    /**
     * @param string $path
     *
     * @return array|null
     */
    protected function get(string $path): ?array
    {
        $response = $this->client->get(
            $this->getUrl($path),
            $this->createOptions()
        );

        $json = $response->getBody()->getContents();

        if ($response->getStatusCode() == 401) {
            throw new BjornLundenException($json);
        }

        $data = json_decode($json, true);

        if (array_key_exists('error', $data)) {
            throw new BjornLundenException($data['error']);
        }

        return $data;
    }

    /**
     * @param string $path
     * @param array $data
     *
     * @return array|null
     */
    protected function post(string $path, array $data): ?array
    {
        $response = $this->client->post(
            $this->getUrl($path),
            array_merge([
                RequestOptions::JSON => $data,
            ], $this->createOptions())
        );

        $json = $response->getBody()->getContents();

        if ($response->getStatusCode() == 401) {
            throw new BjornLundenException($json);
        }

        return json_decode($json, true);
    }

    /**
     * @param string $path
     *
     * @return array|null
     */
    protected function deleteRequest(string $path): ?array
    {
        $response = $this->client->delete(
            $this->getUrl($path),
            $this->createOptions()
        );

        $json = $response->getBody()->getContents();

        if ($response->getStatusCode() == 401) {
            throw new BjornLundenException($json);
        }

        return json_decode($json, true);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function getUrl(string $path): string
    {
        return BjornLunden::API_URL . $path;
    }

    /**
     * @return array
     */
    protected function createOptions(): array
    {
        if (!$this->credentials->getToken()) {
            throw new BjornLundenException('Token is empty');
        }

        $options = [
            RequestOptions::HEADERS => [
                'authorization' => 'Bearer ' . $this->credentials->getToken(),
                'user-key' => $this->credentials->getUserKey(),
                'Content-Type' => 'application/json',
            ],
        ];

        return $options;
    }
}
