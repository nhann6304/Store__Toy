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
        $select = "SELECT b.sohoadon, b.ngaydat,a.tenkh  FROM khachhang a  INNER JOIN hoadon b on a.makh=b.makh WHERE masohd=$masohd";
        $result = $db->__getInstance($select);
        return $result;

    }
}

?>