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
        $select = "SELECT DISTINCT  a.tenhh, b.dongia, b.dongia, b.soluongton,b.giamgia,b.percent, c.tenquocgia, d.maloai, d.maloai,d.iploai  FROM hanghoa a, cthanghoa b, quocgia c, loai d WHERE  d.maloai = $id and a.maloai = $id  and a.mahh = b.idhanghoa and b.idquocgia = c.idquocgia";
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
}

?>