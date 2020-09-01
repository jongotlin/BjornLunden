<?php

namespace JGI\BjornLunden\Model;

class Token
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $tokenType;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var int
     */
    private $expiresIn;

    /**
     * @var \DateTimeImmutable
     */
    private $expiresAt;

    /**
     * @param string $accessToken
     * @param string $tokenType
     * @param string $scope
     * @param int $expiresIn
     * @param \DateTimeInterface $createdAt
     */
    public function __construct(string $accessToken, string $tokenType, string $scope, int $expiresIn, \DateTimeInterface $createdAt)
    {
        $this->accessToken = $accessToken;
        $this->tokenType = $tokenType;
        $this->scope = $scope;
        $this->expiresIn = $expiresIn;

        $expiresAt = (new \DateTime())->setTimestamp($createdAt->getTimestamp());
        $expiresAt->modify(sprintf('+%s seconds', $expiresIn));

        $this->expiresAt = \DateTimeImmutable::createFromMutable($expiresAt);
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getExpiresAt(): \DateTimeImmutable
    {
        return $this->expiresAt;
    }
}
