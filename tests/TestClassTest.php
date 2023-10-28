<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use RexPl\PhpUnitTest\TestClass;

class TestClassTest extends TestCase
{
    public function test_is_random_number_dummy(): void
    {
        $this->assertNotEquals(TestClass::randomNumber(), TestClass::randomNumber());
    }
}