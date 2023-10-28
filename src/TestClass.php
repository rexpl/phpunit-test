<?php

declare(strict_types=1);

namespace RexPl\PhpUnitTest;

class TestClass
{
    /**
     * Returns a random number between 1 and 10000.
     * 
     * @return int
     */
    public static function randomNumber(): int
    {
        return rand(1, 10_000);
    }
}