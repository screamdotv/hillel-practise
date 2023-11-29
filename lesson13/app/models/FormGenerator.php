<?php
namespace App\Models;

use App\Core\InputInterface;

class FormGenerator 
{
    private array $inputs;
    
    public function __construct(InputInterface ...$inputs)
    {
        $this->inputs = $inputs;
    }
    
    public function getInputs()
    {
        return $this->inputs;
    }
}