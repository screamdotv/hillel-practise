<?php

abstract class Input
{
    protected $type;
    protected $id;
    protected $name;

    public function __construct($type, $id, $name)
    {
        $this->type = $type;  
        $this->id = $id;  
        $this->name = $name;  
    }
    abstract public function getType();
    abstract public function getId();
    abstract public function getName();
    
    abstract public function render();
}