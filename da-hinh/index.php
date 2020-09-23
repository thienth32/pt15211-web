<?php
class NhanVien{
    var $ngayCong = 0;
    var $luong1Ngay = 0;
    function __construct($luong = 0)
    {
        $this->luong1Ngay = $luong;
    }
    function tinhLuong(){
        return $this->ngayCong*$this->luong1Ngay;
    }
}

class NhanVienBV extends NhanVien{
    // cộng thêm 10% lương do tính chất công việc
    const BONUS_SALARY = 10;

    function tinhLuong()
    {
        $luonggoc = parent::tinhLuong();
        return $luonggoc + ($luonggoc*(self::BONUS_SALARY/100));
    }
}

class NhanVienLaoCong extends NhanVien{
    const BONUS_SALARY = 5;
    function tinhLuong()
    {
        $luonggoc = parent::tinhLuong();
        return $luonggoc + ($luonggoc*(self::BONUS_SALARY/100)) + ($luonggoc*0.15);
    }
}
$tam = new NhanVienLaoCong(5);
$tam->ngayCong = 20;
echo $tam->tinhLuong();



?>