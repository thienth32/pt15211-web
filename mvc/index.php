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
        // echo password_hash("123456", PASSWORD_DEFAULT);
        // var_dump(password_verify("12345", '$2y$10$B4p6Zis3eMZtmJsManNnP.YujhP0NoUn2xYtfsDY4eQQCXUBZVu9K'));
        // die;
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
        break;
    case 'add-cate':
        $ctr = new CategoryController();
        $ctr->addForm();
        break;
    case 'save-add-cate':
        $ctr = new CategoryController();
        $ctr->saveAddCate();
        break;
    case 'edit-cate':
        $ctr = new CategoryController();
        $ctr->editForm();
        break;
    case 'save-edit-cate':
        $ctr = new CategoryController();
        $ctr->saveEditCate();
        break;
    case 'san-pham':
        # hiển thị danh sách sản phẩm
        $ctr = new ProductController();
        $ctr->index();
        break;
    case 'chi-tiet':
        # gọi đến hàm detail của ProductController
        $ctr = new ProductController();
        $ctr->detail();
        break;
    case 'api/search-product':
        $ctr = new ProductController();
        $ctr->searchProduct();
        break;
    default:
        # code...
        break;
}

?>