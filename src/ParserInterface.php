<?php

namespace Bermuda\HTTP;

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
