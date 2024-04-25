<?php

namespace App;

class DTO
{
    private string $name;
    private float $price;
    private int $duration;
    private int $speed;
    private string $type;

    public function __construct(string $name, float $price, int $duration, int $speed, string $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->duration = $duration;
        $this->speed = $speed;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getType(): string
    {
        return $this->type;
    }
}