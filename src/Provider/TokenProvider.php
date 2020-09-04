<?php

namespace JGI\BjornLunden\Provider;

use GuzzleHttp\RequestOptions;
use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Model\Token;
use JGI\BjornLunden\Model\User;

class TokenProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @return Token
     */
    public function create()
    {
        $response = $this->client->post(
            sprintf(
                '%s?grant_type=client_credentials&client_id=%s&client_secret=%s',
                BjornLunden::AUTH_URL,
                $this->credentials->getClientId(),
                $this->credentials->getClientSecret()
            ),
            [
                RequestOptions::HEADERS => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'user-key' => $this->credentials->getUserKey(),
                ],
            ]
        );

        $data = $this->handleResponse($response);

        $token = new Token(
            $data['access_token'],
            $data['token_type'],
            $data['scope'],
            $data['expires_in'],
            new \DateTime()
        );

        return $token;
    }
}
