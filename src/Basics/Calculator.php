<?php 

namespace App\Basics;

class Calculator
{
    private array $historyData = [];

    public function sum(int $a, int $b): int
    {
        $result = $a + $b;
        $this->historyData[] = ['operation' => 'sum', 'operands' => [$a, $b], 'result' => $result];
        return $result;
    }

    public function sub(int $a, int $b): int
    {
        $result = $a - $b;
        $this->historyData[] = ['operation' => 'sub', 'operands' => [$a, $b], 'result' => $result];
        return $result;
    }

    public function mul(int $a, int $b): int
    {
        $result = $a * $b;
        $this->historyData[] = ['operation' => 'mul', 'operands' => [$a, $b], 'result' => $result];
        return $result;
    }

    public function div(int $a, int $b): ?float
    {
        if ($b === 0) {
            return null;
        }

        $result = $a / $b;
        $this->historyData[] = ['operation' => 'div', 'operands' => [$a, $b], 'result' => $result];
        return $result;
    }

    public function history(): array
    {
        return $this->historyData;
    }
}