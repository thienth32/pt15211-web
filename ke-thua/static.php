<?php
class Animal{
    static function test(){
        $model = new static();
        var_dump($model);
    }

    function total($a, $b){
        return $a+$b;
    }
}

class Duck extends Animal{}
class Cat extends Animal{}

Duck::test();
Cat::test();


?>