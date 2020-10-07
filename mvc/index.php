<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './config/helpers.php';
require_once './vendor/autoload.php';
require_once './config/db.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;

switch ($url) {
    case '/':
        # gọi đến hàm index của HomeController
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'danh-muc':
        $ctr = new CategoryController();
        $ctr->index();
        break;
    case 'remove-cate':
        $ctr = new CategoryController();
        $ctr->remove();
    case 'san-pham':
        # gọi đến hàm index của ProductController => Danh sách sản phẩm
        # view products/index.blade.php
        # hiển thị danh sách sản phẩm
        $ctr = new ProductController();
        $ctr->index();
        break;
    case 'chi-tiet':
        # gọi đến hàm detail của ProductController
        $ctr = new ProductController();
        $ctr->detail();
        break;
    
    default:
        # code...
        break;
}

?>