<?php
require_once 'Figure.php';

class Circle extends Figure
{   
    public function __construct(
        public int|float|null $radius,
        public string|null $color
    ){}

    public function area(): int|float
    {
        return pi() * $this->radius ** 2;
    }

    public function perimeter(): int|float
    {
        return 2 * pi() * $this->radius;
    }

    public function draw(): string
    {
        return "<div style=' width: " . $this->radius*2 . "px; height: " . $this->radius*2 . "px; background-color: " . $this->color . "; border-radius: 50%; '></div>";  
    }
}