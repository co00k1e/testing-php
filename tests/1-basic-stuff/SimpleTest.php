<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Group;
class SimpleTest extends TestCase
{
    public function testBasicAssertionExample(): void
    {
        $this->assertTrue(true);
    }
    
    #[Group('excluded')] //
    public function testBasicGrouping(): void
    {
        sleep(10);
        $this->assertTrue(true);
    }
}