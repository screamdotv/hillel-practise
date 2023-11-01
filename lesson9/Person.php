<?php
namespace ClassForSerializer;

class Person 
{
    public string $name;
    public int $age;
    public string $sex;
    
    // Геттер для свойства "name"
    public function getName(): string {
        return $this->name;
    }

    // Сеттер для свойства "name"
    public function setName(string $name): void {
        $this->name = $name;
    }

    // Геттер для свойства "age"
    public function getAge(): int {
        return $this->age;
    }

    // Сеттер для свойства "age"
    public function setAge(int $age): void {
        $this->age = $age;
    }

    // Геттер для свойства "sex"
    public function getSex(): string {
        return $this->sex;
    }

    // Сеттер для свойства "sex"
    public function setSex(string $sex): void {
        $this->sex = $sex;
    }
    
    
}