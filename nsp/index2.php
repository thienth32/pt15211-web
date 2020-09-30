<?php
// php không cho phép tạo 2 hàm trùng tên
// không cho phép 2 class trùng tên
// => sử dụng namespace
namespace ChauA;
class Animal{}

namespace ChauA;
class ConVit{}



namespace ChauPhi;
use ChauA\Animal as ChauAAnimal;
use ChauA\ConVit;

class Animal{}

$x = new Animal();
$y = new ChauAAnimal();
$z = new ConVit();
var_dump($x, $y, $z);


?>