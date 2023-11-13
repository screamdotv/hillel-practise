<?php

class FormGenerator 
{
    private array $inputs;
    
    public function __construct(InputInterface ...$inputs)
    {
        $this->inputs = $inputs;
    }
    

    public function generateForm()
    {
        echo "<form action='' method='post'>";
        foreach ($this->inputs as $value){
            if ($value != null){
                echo $value->render();
            }
        };
        echo "<br><input type='submit' value='Отправить'>";
        echo "</form>";
    }
}