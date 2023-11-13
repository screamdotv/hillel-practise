<?php
require_once 'form_elements/Input.php';
require_once 'form_elements/InputIntarface.php';

class PasswordInput extends Input implements InputInterface{

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

    public function render():void
    {
        echo "<label for='" . $this->getName() . "'>" . $this->getName() . ":</label><br>";
        echo "<input type=" . $this->getType() . " id=" . $this->getId() . " name=" . $this->getName() ."><br>";
    }
}