<?php
require_once './Product.php';
require_once './User.php';
require_once './Category.php';

$productModel = new Product();
$products = $productModel->all();

$userModel = new User();
$users = $userModel->all();

$cateModel = new Category();
$cates = $cateModel->all();

echo "<pre>";

var_dump($cates);


?>