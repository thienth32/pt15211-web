<?php
// tạo lớp mới (tạo ra đối tượng mới)
// đối tượng => chính là class
// thực/cá thể
class SinhVien {
    // thuộc tính <= biến đưa vào trong class 
    // thuộc tính trong php có thể tạo ra bất cứ
    // khi nào, sau khi đã tạo ra thực thể mới
}

// tạo ra 1 thực thể mới
$hung = new SinhVien();
// gán gtri cho các thuộc tính
$hung->name = "Nguyễn Quốc Hưng";
$hung->age = 30;
$hung->address = "Tp. Vinh, Nghệ An";
// lấy giá trị thuộc tính của các thực thể
// sử dụng $hung->name

$long = new SinhVien();
// gán gtri cho các thuộc tính
$long->name = "Nguyễn Thanh Hưng";
$long->age = 40;
$long->address = "Mê Linh, Vĩnh Phúc";

$minh = new SinhVien();
// gán gtri cho các thuộc tính
$minh->name = "Đặng Quang Minh";
$minh->age = 30;
$minh->address = "Sơn La";

// bt: tạo ra 1 mảng gồm 3 thực thể sinh viên
$arr = [$hung, $long, $minh];
// hiển thị danh sách sinh viên ra list (ul, li)


?>