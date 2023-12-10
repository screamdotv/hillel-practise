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