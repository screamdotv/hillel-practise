<?php

class Figure 
{
    public function __construct(
        public int|float|null $width,
        public int|float|null $height,
        public string|null $color,
        public int|null $radius = null
    ){}

    public function draw($width, $height, $color, $radius): string
    {
        return "<div style=' width: " . $width . "px; height: " . $height . "px; background-color: " . $color . "; border-radius: " . $radius . "%; '></div>";  
    }
}