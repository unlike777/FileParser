<?php

namespace AXP\Parser\Formats;

use AXP\Parser\Exceptions\ParserException;
use AXP\Parser\Interfaces\FormatInterface;

class QueryString implements FormatInterface
{

    /**
     * Парсим данные
     *
     * @param $string
     *
     * @return array
     * @throws ParserException
     */
    public function parse($string)
    {
        if ( $string ) {
            parse_str(trim($string), $data);

            return $data;
        }

        return [];
    }
}