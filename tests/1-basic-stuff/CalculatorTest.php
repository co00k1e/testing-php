<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{

    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testSum()
    {
        $result = $this->calculator->sum(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSub()
    {
        $result = $this->calculator->sub(5, 3);
        $this->assertEquals(2, $result);
    }
}