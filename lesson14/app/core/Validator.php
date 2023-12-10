<?php
namespace App\Core;

// use App\Core\Required;
// use App\Core\MinLength;
// use App\Core\Email;
require_once (__DIR__ . '/Attribute.php');
use App\Models\UserModel;
use ReflectionClass;

class Validator {

    
    public function requiredValues($object, $propertyNames)
    {
        $errors = [];
        $reflectionClass = new ReflectionClass($object);

        foreach ($propertyNames as $propertyName) {
            $property = $reflectionClass->getProperty($propertyName);
            $property->setAccessible(true);
            $propertyValue = $property->getValue($object);
            
            // Получаем атрибуты для свойства
            $attributesRequired = $property->getAttributes(Required::class);

            foreach ($attributesRequired as $attribute) {
                // Создаем экземпляр атрибута Required
                $requiredAttribute = $attribute->newInstance();

                // Вызываем метод required атрибута для проверки значения
                $result = $requiredAttribute->required($propertyValue);

                if (!$result) {
                    array_push($errors,"Заполните поле '$propertyName'<br>");
                }
            }

            $attributesLength = $property->getAttributes(MinLength::class);

            foreach ($attributesLength as $attribute) {
                // Создаем экземпляр атрибута Required
                $lengthAttribute = $attribute->newInstance();

                // Вызываем метод required атрибута для проверки значения
                $result = $lengthAttribute->length($propertyValue);

                if (!$result) {
                    if($propertyName == 'password') {
                        array_push($errors, "Введите более 6-и символов '$propertyName'<br>");
                    } else {
                        array_push($errors, "Введите более 2-х символов '$propertyName'<br>");
                    }
                }
            }

            $attributesEmail = $property->getAttributes(Email::class);

            foreach ($attributesEmail as $attribute) {
                // Создаем экземпляр атрибута Required
                $emailAttribute = $attribute->newInstance();

                // Вызываем метод required атрибута для проверки значения
                $result = $emailAttribute->email($propertyValue);

                if (!$result) {
                    array_push($errors, "Введите корректный адрес email");
                }
            }
        }

        return $errors;
    }
}
