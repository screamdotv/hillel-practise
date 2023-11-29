<?php
namespace App\Models;

class UserModel
{
    private $name;
    private $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function getName():string
    {
        return ucfirst($this->name);
    }
    
    public function getPassword():string
    {
        return $this->password;
    }
}