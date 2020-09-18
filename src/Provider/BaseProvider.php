<?php

namespace JGI\BjornLunden\Provider;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenException;
use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\Error;
use Psr\Http\Message\ResponseInterface;

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

        return $this->handleResponse($response);
    }

    /**
     * @param string $path
     * @param array $data
     *
     * @return array|null
     */
    protected function post(string $path, array $data, \SplFileInfo $file = null): ?array
    {
        $options = [];
        if ($data) {
            $options[RequestOptions::JSON] = $data;
        };

        if ($file) {
            $options[RequestOptions::MULTIPART] = [
                [
                    'Content-type' => 'multipart/form-data',
                    'name' => 'file',
                    'contents' => fopen($file->getPathname(), 'r'),
                ],
            ];
        }
        $response = $this->client->post(
            $this->getUrl($path),
            array_merge($options, $this->createOptions())
        );

        return $this->handleResponse($response);
    }

    /**
     * @param string $path
     * @param array $data
     *
     * @return array|null
     */
    protected function put(string $path, array $data): ?array
    {
        $response = $this->client->put(
            $this->getUrl($path),
            array_merge([
                RequestOptions::JSON => $data,
            ], $this->createOptions())
        );

        return $this->handleResponse($response);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array
     */
    protected function handleResponse(ResponseInterface $response): array
    {
        $json = $response->getBody()->__toString(); // Pointer is not rewinded in logger
        $array = json_decode($json, true);
        if (!is_array($array)) {
            $error = new Error(
                new \DateTimeImmutable(),
                $response->getStatusCode(),
                $json,
                $response->getReasonPhrase(),
                null
            );

            throw new BjornLundenHttpException($error);
        }

        if (array_key_exists('error', $array)) {
            $error = new Error(
                new \DateTimeImmutable($array['timestamp']),
                $array['status'],
                $array['message'],
                $array['error'],
                $array['path']
            );

            throw new BjornLundenHttpException($error);
        }

        return $array;
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

        return $this->handleResponse($response);
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
