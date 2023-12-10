<?php
namespace App\Core;

use App\Core\Required;
use App\Core\MinLength;
use App\Core\Email;

use ReflectionClass;

class Validator {

    
    public function requiredValues($object)
    {
        $errors = [];
        $reflectionClass = new ReflectionClass($object);
        
        $attributesRequired = $reflectionClass->getAttributes(Required::class);
        var_dump($attributesRequired);
        foreach ($attributesRequired as $attribute) {
                $requiredAttribute = $attribute->newInstance();
                
                $propertyName = $attribute->getName();

                $property = $reflectionClass->getProperty($propertyName);
                $property->setAccessible(true);
                $propertyValue = $property->getValue($object);
                
                $result = $requiredAttribute->required($propertyValue);
        
                if (!$result) {
                    array_push($errors,"Заполните поле '$propertyName'<br>");
                }
            }

        $attributesLength = $reflectionClass->getAttributes(MinLength::class);

            foreach ($attributesLength as $attribute) {
                
                $lengthAttribute = $attribute->newInstance();
                
                $propertyName = $attribute->getName();

                $property = $reflectionClass->getProperty($propertyName);
                $property->setAccessible(true);
                $propertyValue = $property->getValue($object);

                $lengthAttribute = $attribute->newInstance();

                $result = $lengthAttribute->length($propertyValue);
                

                if (!$result) {
                    if($propertyName == 'password') {
                        array_push($errors, "Введите более 6-и символов '$propertyName'<br>");
                    } else {
                        array_push($errors, "Введите более 2-х символов '$propertyName'<br>");
                    }
                }
            }

        $attributesEmail = $reflectionClass->getAttributes(Email::class);

            foreach ($attributesEmail as $attribute) {

                $emailAttribute = $attribute->newInstance();
                
                $propertyName = $attribute->getName();

                $property = $reflectionClass->getProperty($propertyName);
                $property->setAccessible(true);
                $propertyValue = $property->getValue($object);
                
                $result = $emailAttribute->email($propertyValue);

                if (!$result) {
                    array_push($errors, "Введите корректный адрес email");
                }
            }
        

        return $errors;
    }
}
