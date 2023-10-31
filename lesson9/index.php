<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

$encoders = new JsonEncoder();
$normalizers = new ObjectNormalizer();

$serializer = new Serializer([$normalizers], [$encoders]);

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

$person = new Person();
$person->setName("Vlad");
$person->setAge(30);
$person->setSex("male");

var_dump($person);
echo "\nSerializer:\n";
$jsonContent = $serializer->serialize($person, 'json');
var_dump($jsonContent);
echo "\n";
echo "\nDeserialize:\n";
$personDeserialize = $serializer->deserialize($jsonContent, Person::class, 'json');
var_dump($personDeserialize);
