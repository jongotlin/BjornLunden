<?php

namespace JGI\BjornLunden\Exception;

use Http\Client\Exception\TransferException;
use JGI\BjornLunden\Model\Error;

class BjornLundenHttpException extends TransferException
{
    /**
     * @var Error
     */
    private $error;

    /**
     * @param Error $error
     */
    public function __construct(Error $error)
    {
        $this->error = $error;

        parent::__construct($error->getMessage(), $error->getStatus());
    }

    /**
     * @return Error
     */
    public function getError(): Error
    {
        return $this->error;
    }
}
