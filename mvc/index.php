<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './app/controllers/HomeController.php';
use App\Controllers\HomeController;
switch ($url) {
    case '/':
        # gọi đến hàm index của HomeController
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'san-pham':
        # gọi đến hàm index của ProductController => Danh sách sản phẩm
        break;
    case 'chi-tiet':
        # gọi đến hàm detail của ProductController
        break;
    
    default:
        # code...
        break;
}

?>