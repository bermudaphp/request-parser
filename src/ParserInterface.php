<?php

namespace Bermuda\HTTP\Parser;

use Bermuda\DataObj;
use Psr\Http\Message\ServerRequestInterface;

interface ParserInterface
{
    /**
     * @param ServerRequestInterface $request
     * @return mixed
     * @throws ParserException
     */
    public function parse(ServerRequestInterface $request): mixed ;
}
