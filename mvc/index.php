<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;

switch ($url) {
    case '/':
        # gọi đến hàm index của HomeController
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'san-pham':
        # gọi đến hàm index của ProductController => Danh sách sản phẩm
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