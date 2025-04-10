<?php

declare(strict_types=1);

namespace BankManagement\Exceptions;

use Throwable;
use Exception;

class InsufficientAmountException extends Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}