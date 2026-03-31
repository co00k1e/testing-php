<?php 

namespace App\RealWorld;

class CurrencyConverter
{
    public function __construct(
        private ExchangeRateService $rateService
    ) {}
    
    public function convert(float $amount, string $from, string $to): float
    {
        $rate = $this->rateService->getRate($from, $to);
        return round($amount * $rate, 2);
    } 
}