<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Reverser\Reverser;

class ReverserTest extends TestCase
{
    private Reverser $reverser;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->reverser = new Reverser();
        parent::__construct($name, $data, $dataName);
    }

    public function testValidArrayWithDefaultIndexes(): void
    {
        self::assertEquals(
            [
                3 => 4,
                2 => 3,
                1 => 2,
                0 => 1,
            ],
            $this->reverser->reverse([1, 2, 3, 4])
        );
    }

    public function testValidArrayWithoutDefaultIndexes(): void
    {
        self::assertEquals(
            [
                'asd' => 5,
                4 => 4,
                'c' => 3,
                'b' => 2,
                'a' => 1,
            ],
            $this->reverser->reverse(
                [
                    'a' => 1,
                    'b' => 2,
                    'c' => 3,
                    4 => 4,
                    'asd' => 5,
                ]
            )
        );
    }
}