<?php
class user
{
    function checkUser($user, $email, $phone, $pass)
    {
        $db = new connect();
        $select = "SELECT a.tenkh, a.email, a.sodienthoai,a.matkhau FROM khachhang a  WHERE a.tenkh='$user' OR a.email ='$email'OR a.sodienthoai ='$phone'OR a.matkhau ='$pass'";
        $result = $db->__getList($select);
        return $result;

    }

    function inserKhachHang($tenkh, $email, $phone, $matkhau)
    {
        $db = new connect();
        $query = "INSERT INTO khachhang (makh, tenkh, email,sodienthoai, matkhau) 
        VALUES (NULL, '$tenkh', '$email','$phone', '$matkhau');";
        $result = $db->exec($query);
        return $result;
    }

    function logKhachHang($email, $pass)
    {
        $db = new connect();
        $select = "SELECT a.makh, a.tenkh FROM khachhang a WHERE a.email='$email' and a.matkhau='$pass';";
        $result = $db->__getInstance($select);
        return $result;
    }
}


?>