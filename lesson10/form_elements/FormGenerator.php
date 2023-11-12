<?php

class FormGenerator 
{
    private TextInput|null $textInput;
    private EmailInput|null $emailInput;
    private PasswordInput|null $passwordInput;
    private NumberInput|null $numberInput;
    private CheckboxInput|null $checkboxInput;
    private RadioInput|null $radioInput;
    private Textarea|null $textarea;
    
    public function __construct(
        TextInput $textInput = null, 
        EmailInput $emailInput = null, 
        PasswordInput $passwordInput = null,
        NumberInput $numberInput = null,
        CheckboxInput $checkboxInput = null,
        RadioInput $radioInput = null,
        Textarea $textarea = null,)
    {
        $this->textInput = $textInput;
        $this->emailInput = $emailInput;
        $this->passwordInput = $passwordInput;
        $this->numberInput = $numberInput;
        $this->checkboxInput = $checkboxInput;
        $this->radioInput = $radioInput;
        $this->textarea = $textarea;
    }
    

    public function generateForm()
    {
      $formValue = [
        $this->textInput, 
        $this->emailInput, 
        $this->passwordInput, 
        $this->numberInput,
        $this->checkboxInput, 
        $this->radioInput, 
        $this->textarea
    ];
        echo "<form action='' method='post'>";
        foreach ($formValue as $value){
            if ($value != null){
                echo $value->render();
            }
        };
        echo "<br><input type='submit' value='Отправить'>";
        echo "</form>";
    }
}