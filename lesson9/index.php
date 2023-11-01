<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use ClassForSerializer\Person;

$encoders = new JsonEncoder();
$normalizers = new ObjectNormalizer();

$serializer = new Serializer([$normalizers], [$encoders]);

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
