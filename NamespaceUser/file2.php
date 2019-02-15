<?php
/**
 * В файле file1.php создайте пространство имен и в нем класс User со свойствами 
 * name, surname, age и методом getAge. 
 * В файле file2.php создайте класс Student, 
 * который будет наследоваться от класса User. 
 * Создайте объект класса Student и выведите возраст.
 */

namespace spaceInterface {
    //для закрепления материала создадим еще интерфейс
    interface Stipend
    {
        public function setStipend($stipend);
        public function getStipend();
    }

    require_once 'file1.php';
}

//для усложнения задачи, используем разные пространства имен
namespace spaceStudent {
    class Student extends \spaceUser\User implements \spaceInterface\Stipend
    {
        private $stipend;

        public function setStipend($stipend)
        {
            $this->stipend = $stipend;
        }

        public function getStipend()
        {
            return $this->stipend;
        }
    }
}

namespace workSpace {
    $student1 = new \spaceStudent\Student('Jhon', 'Smith', 27);
    echo 'Age: ' . $student1->getAge();
}
