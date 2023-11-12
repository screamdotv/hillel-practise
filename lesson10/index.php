<?php
require_once 'path.php';

$text = new TextInput(type:"text", id:"text", name:"name");
$email = new EmailInput(type:"email", id:"text", name:"email");
$password = new PasswordInput(type:"password", id:"text", name:"password");
$number = new NumberInput(type:"number", id:"text", name:"number");
$checkbox = new CheckboxInput(type:"checkbox", id:"text", name:"checkbox");
$radiobox = new RadioInput(type:"radio", id:"text", name:"man", value:"man");
$textarea = new Textarea(type:"textarea", id:"textarea", name:"comment");
  
$form = new FormGenerator($text, $email, $password, $number, $checkbox, $radiobox, $textarea);

$form->generateForm();

