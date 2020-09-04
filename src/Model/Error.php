<?php

namespace JGI\BjornLunden\Model;

class Error
{
    /**
     * @var \DateTimeImmutable
     */
    private $timestamp;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $error;

    /**
     * @var string
     */
    private $path;

    /**
     * @param \DateTimeImmutable $timestamp
     * @param int $status
     * @param string $message
     * @param string $error
     * @param string $path
     */
    public function __construct(\DateTimeImmutable $timestamp, int $status, string $message, string $error, string $path)
    {
        $this->timestamp = $timestamp;
        $this->status = $status;
        $this->message = $message;
        $this->error = $error;
        $this->path = $path;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getTimestamp(): \DateTimeImmutable
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
