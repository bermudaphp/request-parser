<?php

namespace Bermuda\HTTP\Parser;

use Bermuda\Clock\Clock;
use Carbon\CarbonInterface;

final class ParseDate implements ParserInterface
{
    public function __construct(
        public readonly string $dateTimeFormat = 'Y-m-d H:i:s'
    ) {
    }

    /**
     * @param string $date
     * @throws ParserException
     * @return CarbonInterface
     */
    public function parse(string $date): CarbonInterface
    {
        if (!Clock::isDate($date)) {
            throw new ParseException('Unable to parse date string.');
        }

        return Clock::fromFormat($this->dateTimeFormat, $date);
    }
}
