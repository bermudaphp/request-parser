<?php

namespace Bermuda\HTTP\Parser;

final class ParseId implements ParserInterface
{
    public function __construct(
      public readonly string $delimiter = ','
    ) {
    }

    /**
     * @params string $ids
     * @return int[]
     * @throws ParserException
     */
    public function parse(string $ids): array
    {
        foreach (explode($this->delimiter, $ids) as $id) {
            if (!is_numeric($id)) throw new ParserException('Id is not numeric');
            $arr[] = $id + 0;
        }

        return $arr ?? [];
    }
}
