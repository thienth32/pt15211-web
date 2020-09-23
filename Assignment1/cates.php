<?php
require_once './Category.php';

// quản lý:
// hiển thị danh sách, thêm, sửa, xóa dữ liệu 
// cho 2 bảng categories & products trong db

$cate = Category::where(['id', '>', 4])->first();
echo "<pre>";
var_dump($cate);die;


?>