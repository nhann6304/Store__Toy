<?php

class hanghoa
{
    function getLoai()
    {
        //b1: ket noi duwoc voi du lieu
        $db = new connect();
        //b2: can lay cai gi thi truy van cai do
        $select = "SELECT a.tenloai, a.maloai , a.iploai FROM loai a;";
        $result = $db->__getList($select);
        return $result; //lay duoc du lieu ve
    }
    function getHanghoa($id)
    {

        $db = new connect();
        $select = "SELECT DISTINCT a.mahh, a.tenhh, b.dongia, b.dongia, b.soluongton,b.giamgia,b.hinh,b.percent, c.tenquocgia, d.maloai, d.maloai,d.iploai  FROM hanghoa a, cthanghoa b, quocgia c, loai d WHERE  d.maloai = $id and a.maloai = $id  and a.mahh = b.idhanghoa and b.idquocgia = c.idquocgia";
        $result = $db->__getList($select);
        return $result; //lay duoc du lieu ve
    }

    function getidloai()
    {
        $db = new connect();
        $select = "SELECT a.maloai FROM loai a  WHERE 1";
        $result = $db->__getList($select);
        return $result; //lay duoc du lieu ve

    }

    function getHangHoaid($id)
    {
        $db = new connect();
        $select = "SELECT a.tenhh,a.mota,b.dongia,b.giamgia,b.hinh ,c.iploai,d.tenquocgia  FROM hanghoa a, cthanghoa b, loai c, quocgia d WHERE a.mahh=b.idhanghoa and  a.maloai=c.maloai and a.mahh=$id";
        $result = $db->__getInstance($select);
        return $result;
    }

    function getHangHoaAll()
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.mahh, a.tenhh, b.dongia, b.dongia, b.soluongton,b.giamgia,b.hinh,b.percent, c.tenquocgia, d.maloai, d.maloai,d.iploai FROM hanghoa a, cthanghoa b, quocgia c, loai d WHERE a.mahh = b.idhanghoa and b.idquocgia = c.idquocgia and a.maloai = d.maloai;";
        $result = $db->__getList($select);
        return $result;
    }

    function getHangHoaNew()
    {
        $db = new connect();
        $select = " SELECT DISTINCT a.mahh,a.ngaydang, a.tenhh, b.dongia, b.dongia, b.soluongton, b.giamgia, b.hinh, b.percent, c.tenquocgia, d.maloai, d.maloai, d.iploai FROM hanghoa a, cthanghoa b, quocgia c, loai d WHERE a.mahh = b.idhanghoa AND b.idquocgia = c.idquocgia AND a.maloai = d.maloai ORDER BY a.ngaydang DESC";
        $result = $db->__getList($select);
        return $result;
    }

    function getHangHoaSale()
    {
        $db = new connect();
        $select = " SELECT DISTINCT a.mahh,a.ngaydang, a.tenhh, b.dongia, b.dongia, b.soluongton, b.giamgia, b.hinh, b.percent, c.tenquocgia, d.maloai, d.maloai, d.iploai FROM hanghoa a, cthanghoa b, quocgia c, loai d WHERE a.mahh = b.idhanghoa AND b.idquocgia = c.idquocgia AND a.maloai = d.maloai and b.giamgia>0 ORDER BY a.mahh DESC  ";
        $result = $db->__getList($select);
        return $result;
    }

    function getHangHoaimg($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.hinh FROM cthanghoa a  WHERE  a.idhanghoa = $id;";
        $result = $db->__getInstance($select);
        return $result;
    }

}

?>