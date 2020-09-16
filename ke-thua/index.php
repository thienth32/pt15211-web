<?php


class Animal{

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function getInfo(){
        return "Em tên là: " . $this->name 
            . " - Em có màu: " . $this->color;
    }
}
// Khi 1 lớp B kế thừa lớp A, thì các thực thể thuộc lớp B 
// được phép sử dụng các thuộc tính & phương thức
// được tạo ra tại phạm vi của lớp A


// Lớp Duck kế thừa từ lớp Animal
class Duck extends Animal {
    
    function keu(){
        return "Cạp cạp...";
    }
}

class Dog extends Animal{

}

class PhuQuoc extends Dog{

}

$sau = new Duck("Vịt cỏ Vân Đình", "Xám");
$rex = new PhuQuoc('Rex - chú chó thám tử', 'đen - vàng');
echo $sau->getInfo();
echo "<br>";
echo $sau->keu();
echo "<br>";

echo $rex->getInfo();




?>