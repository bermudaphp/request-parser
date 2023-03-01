<?php

namespace Bermuda\HTTP\Parser;

class ParserException extends Exception\BadRequestException
{
    public function __construct(string $reasonPhrase = null)
    {
        parent::__construct($reasonPhrase);
        $this->code = 422;
    }
}
