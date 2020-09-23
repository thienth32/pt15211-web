<?php

class A{
    public $name = "Vinh";
    protected $age = 20;
    private $salary = 1000;
    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }
    function getSalary(){
        return $this->salary;
    }
}
class B extends A{
    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }
    function getSalary(){
        return $this->salary;
    }
}
$nam = new A();
echo $nam->getName();
echo $nam->getAge();
echo $nam->getSalary();


// $nam = new B();
// echo $nam->getName();
// echo $nam->getAge();
// echo $nam->getSalary();


// $long = new A();
// echo $long->name;
// echo $long->age;
// echo $long->salary;

?>