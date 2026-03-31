<?php

use PHPUnit\Framework\TestCase;
use App\Basics\Calculator;

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

    public function testMul()
    {
        $result = $this->calculator->mul(4, 5);
        $this->assertSame(20, $result);
    }

    public function testDiv()
    {
        $result = $this->calculator->div(8, 2);
        $this->assertEquals(4, $result);
    }

    public function testDivReturnsFloat()
    {
        $result = $this->calculator->div(5, 2);
        $this->assertSame(2.5, $result);
    }

    public function testDivByZeroReturnsNull()
    {
        $result = $this->calculator->div(5, 0);
        $this->assertNull($result);
    }

    public function testHistoryReturnsAsExpected()
    {
        $this->calculator->sum(2, 3);
        $this->calculator->sub(5, 3);
        $this->calculator->mul(4, 5);

        $history = $this->calculator->history();

        $expectedHistory = [
            ['operation' => 'sum', 'operands' => [2, 3], 'result' => 5],
            ['operation' => 'sub', 'operands' => [5, 3], 'result' => 2],
            ['operation' => 'mul', 'operands' => [4, 5], 'result' => 20],
        ];

        $this->assertEquals($expectedHistory, $history);
    }

    public function testHistoryCount() 
    {
        $this->calculator->sum(2, 3);
        $this->calculator->sub(5, 3);
        $this->calculator->mul(4, 5);
        $history = $this->calculator->history();
        $this->assertCount(3, $history);
    }
}