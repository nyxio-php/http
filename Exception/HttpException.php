<?php

declare(strict_types=1);

namespace Nyx\Http\Exception;

use Nyx\Contract\Http\HttpStatus;

class HttpException extends \Exception
{
    public function __construct(
        HttpStatus $status,
        string $message,
        public readonly array $errors = [],
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $status->value, $previous);
    }
}
