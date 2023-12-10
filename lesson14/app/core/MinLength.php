<?php
namespace App\Core;
use Attribute;

#[Attribute]
class MinLength
{
    private int $char;

    public function __construct(int $char = 2) {
        $this->char = $char;
    }

    public function length($value){
        if(strlen(trim($value)) < ($this->char)){
            return false;
        } else {
            return $value;
        }
    }

}
