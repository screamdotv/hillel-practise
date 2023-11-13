<?php
require_once 'form_elements/Input.php';
require_once 'form_elements/InputIntarface.php';

class RadioInput extends Input implements InputInterface{
    private $value;

    public function __construct($type, $id, $name, $value)
    {
        parent::__construct($type, $id, $name);
        $this->value = $value;
    }

    public function getType()
    {
        return $this->type;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function render():void
    {
        echo "<label for='" . $this->getName() . "'>" . $this->getName() . ":</label><br>";
        echo "<input type=" . $this->getType() . " id=" . $this->getId() . " name=" . $this->getName() . " value=" . $this->getValue() ."><br>";
    }
}