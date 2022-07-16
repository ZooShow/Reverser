<?php

declare(strict_types=1);

namespace Reverser;

class Reverser
{
    public function reverse(array $arr): array
    {
        $length = count($arr);

        $tmp = [];
        for ($i = 0; $i < $length; ++$i) {
            $tmp[key($arr)] = current($arr);
            next($arr);
        }

        return $tmp;
    }
}