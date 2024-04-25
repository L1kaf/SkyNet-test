<?php

namespace App\tests;

use App\DTO;
use PHPUnit\Framework\TestCase;

class DTOTest extends TestCase
{
    public function testGetters()
    {
        $tariff = new DTO('Тариф A', 100.0, 30, 100, 'Актуальный');

        $this->assertEquals('Тариф A', $tariff->getName());
        $this->assertEquals(100.0, $tariff->getPrice());
        $this->assertEquals(30, $tariff->getDuration());
        $this->assertEquals(100, $tariff->getSpeed());
        $this->assertEquals('Актуальный', $tariff->getType());
    }
}