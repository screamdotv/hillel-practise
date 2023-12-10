<?php
namespace App\Core;
use Attribute;

#[Attribute]
class Required
{   
    public function required($value){
        if(empty(trim($value))) {
            return false;
        } else {
            return $value;
        }
    }
};

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

#[Attribute]
class Email
{
    public function email($value){
        if(empty(trim($value)) && !(filter_var($value, FILTER_VALIDATE_EMAIL))) {
            return false;
        } else {
            return $value;
        }
    }

}