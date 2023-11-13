<?php
require_once 'form_elements/Input.php';
require_once 'form_elements/InputIntarface.php';


class Textarea extends Input implements InputInterface{

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
        echo "<" . $this->getType() . " id=" . $this->getId() . " name=" . $this->getName() . " rows='4' cols='50'></" . $this->getType() . "><br>";
    }
}