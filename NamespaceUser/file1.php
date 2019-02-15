<?php
/**
 * В файле file1.php создайте пространство имен и в нем класс User со свойствами 
 * name, surname, age и методом getAge. 
 * В файле file2.php создайте класс Student, 
 * который будет наследоваться от класса User. 
 * Создайте объект класса Student и выведите возраст.
 */
namespace spaceUser;

class User
{
    private $name;
    private $surname;
    private $age;
    
    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}
