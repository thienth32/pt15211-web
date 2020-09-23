<?php

require_once './Product.php';
// nhận id từ đường dẫn
$id = $_GET['id'];
$productModel = new Product();
$remove = $productModel->remove($id);
if(!$remove){
    echo "Bản ghi không tồn tại";
}else{
    header("location: index.php");
}





?>