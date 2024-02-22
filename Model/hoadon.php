<?php


class hoadon
{
    function insertHoadon($makh)
    {
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $db = new connect();
        $query = "insert into hoadon(sohoadon,makh,ngaydat,tongtien) values(Null,$makh,'$ngay',0)";
        $db->exec($query);
        $select = "select sohoadon from hoadon order by sohoadon desc limit 1";
        $mahd = $db->__getInstance($select);
        return $mahd[0];
    }

    function insertCTHoadon($masohd, $mahh, $soluongmua, $quocgia, $thanhtien)
    {
        $db = new connect();
        $query = "insert into cthoadon(sohoadon,mahh,soluongmua,quocgia,thanhtien,tinhtrang) 
    values($masohd,$mahh,$soluongmua,'$quocgia',$thanhtien,0)";
        $db->exec($query);
    }

    function updateHoaDonTongTien($masohd, $makh, $tongtien)
    {
        $db = new connect();
        $query = "update hoadon set tongtien=$tongtien  WHERE sohoadon=$masohd and makh=$makh;";
        $db->exec($query);
    }

    function selectThongTinKhachHangHoaDOn($masohd)
    {
        $db = new connect();
        $select = "SELECT b.sohoadon, b.ngaydat,a.tenkh,a.sodienthoai,a.email  FROM khachhang a  INNER JOIN hoadon b on a.makh=b.makh WHERE sohoadon=$masohd";
        $result = $db->__getInstance($select);
        return $result;
    }

    function selectThongTinHHID($masohd)
    {
        $db = new connect();
        $select = "select DISTINCT a.tenhh,b.hinh,b.dongia,b.giamgia from hanghoa a, cthanghoa b, cthoadon c WHERE a.mahh=b.idhanghoa and a.mahh=c.mahh and c.sohoadon=$masohd";
        $result = $db->__getList($select);
        return $result;
    }

    function updateSoLuongTon($mahh, $soluongmua)
    {
        $db = new connect();
        $query = "update cthanghoa set soluongton=soluongton-$soluongmua WHERE idhanghoa=$mahh;";
        $db->exec($query);
    }
}

?>