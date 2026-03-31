<?php

namespace App\RealWorld;

interface ExchangeRateService
{
    public function getRate(string $from, string $to): float;
}