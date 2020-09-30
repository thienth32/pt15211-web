<?php
namespace Controllers;
require_once '../models/Product.php';
require_once '../models/Category.php';
use Models\Product;
use Models\Category;
class HomeController{
    public function index(){
        // lấy ra danh sách tất cả sản phẩm
        var_dump(Product::all());
    }

    public function danhmuc(){
        // lấy ra tất cả danh mục sản phẩm
        var_dump(Category::all());
    }
}

$x = new HomeController();
$x->danhmuc();

?>