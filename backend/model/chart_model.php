<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/11/2017
 * Time: 3:48 PM
 */
class chart_model extends database
{
    public function getTopProdInMonth(){
        $now = strtotime(date('Y-m-d'));
        $date = date('Y-m-d', ($now - 30*24*60*60)); //tru di mot thang
        $sql = "SELECT mon_an.Ma_mon_an, mon_an.Ten_mon_an, SUM(ct_don_hang.So_luong) AS TongSL, don_dat_hang.Ngay_lap FROM mon_an, ct_don_hang, don_dat_hang
WHERE mon_an.Ma_mon_an=ct_don_hang.Ma_mon_an and don_dat_hang.MDH=ct_don_hang.MHD AND don_dat_hang.Ngay_lap > $date AND Tinh_trang=1
GROUP BY mon_an.Ma_mon_an, mon_an.Ten_mon_an ORDER BY TongSL DESC LIMIT 10";
        $this->setquery($sql);
        return $this->loadAllRows();
    }
    public  function getRevenueInMonth()
    {
        $now = strtotime(date('Y-m-d'));
        $date = date('Y-m-d', ($now - 12*30*24*60*60)); // tru di 1 măm tinh tu thoi diem hien tai
        $sql="SELECT MONTH(don_dat_hang.Ngay_lap) AS month, SUM(ct_don_hang.Thanh_tien) as doanhthu FROM ct_don_hang,don_dat_hang
WHERE ct_don_hang.MHD=don_dat_hang.MDH AND don_dat_hang.Ngay_lap > $date AND Tinh_trang=1
GROUP BY month";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getall_neworder()
    {
        $sql="SELECT * FROM don_dat_hang WHERE don_dat_hang.Tinh_trang=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function get_order_dangxl()
    {
        $sql="SELECT * FROM don_dat_hang WHERE don_dat_hang.Tinh_trang=2";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function get_newmess()
    {
        $sql="SELECT * FROM lien_he WHERE Duyet=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
//doanh thu theo thang