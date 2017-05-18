<?php

namespace App\Exceptions;
use Throwable;

/**
 * Class NotFoundException
 * @package App\Exceptions
 *
 * We don't need methods here because we are only creating from generic exception a new specific one.
 */
class NotFoundException extends \Exception
{
    public function __construct($message = "", $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}