<?php

class Figure 
{
    public function __construct(
        public int|float|null $width,
        public int|float|null $height,
        public string|null $color,
    ){}

    public function draw(): string
    {
        return "<div style=' width: " . $this->width . "px; height: " . $this->height . "px; background-color: " . $this->color . ";'></div>";  
    }
}