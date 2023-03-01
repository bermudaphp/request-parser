<?php

namespace Bermuda\HTTP\Parser;

use Bermuda\Clock\Clock;
use Carbon\CarbonInterface;

final class ParseDates
{
    public function __construct(
        public readonly string $delimiter = ',',
        public readonly string $dateTimeFormat = 'Y-m-d H:i:s'
    ) {
    }

    /**
     * @param string $dates
     * @param CarbonInterface[]
     * @throws ParserException
     */
    public function __invoke(string $dates): array
    {
        foreach (explode($this->delimiter, $dates) as $date) {
            if (!Clock::isDate($date)) {
                throw new ParserException('Unable to parse dates string.');
            }

            $arr[] = Clock::fromFormat($this->dateTimeFormat, $date);
        }

        return $arr ?? [];
    }
}
