<?php

namespace Tests\RealWorld;

use PHPUnit\Framework\TestCase;
use App\RealWorld\ExchangeRateService;
use App\RealWorld\CurrencyConverter;

class CurrencyConverterTest extends TestCase
{
    public function testServiceConvertsAmountUsingExchangeRate(): void
    {
        $mockRateService = $this->createMock(ExchangeRateService::class);
        $mockRateService->method('getRate')
            ->with('GDP', 'EUR')
            ->willReturn(1.2);

        $currencyConverter = new CurrencyConverter($mockRateService);
        $result = $currencyConverter->convert(100, 'GDP', 'EUR');
        $this->assertEquals(120, $result);
    }
}