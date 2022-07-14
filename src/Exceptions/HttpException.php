<?php

namespace Lucassilverio\Framework\Exceptions;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class HttpException extends \Exception
{
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        \http_response_code($code);
        parent::__construct($message, $code, $previous);
    }
}