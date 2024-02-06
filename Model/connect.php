<?php
class connect
{
    //thuoc tinh
    var $db = null;
    //ham tao duoc goi khi new 1 doi tuong
    function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=lego_store';
        $user = 'root';
        $pass = ''; //neu xai xamp thi pass='';
        //ket noi dua vao class PDO
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            // echo "Kết nối thành công";
        } catch (\Throwable $th) {
            //throw $th;
            echo "ket noi ko thanh cong";
            echo $th;
        }
    }
    //pthuc tra ra nhieu row
    function __getList($select)
    {
        $result = $this->db->query($select); //$this->db->query(select * form hanghoa)
        return $result; // tra ve 1 table
    }
    //pthuc truy van can tra ve 1 row
    function __getInstance($select)
    {
        $results = $this->db->query($select); //$this->db->query(select * from hanghoa);
        $result = $results->fetch(); //$result la array chi chua 1 dong 
        return $result;
    }
    //cau lenh insert, update, delete ao lam? exec
    function exec($query)
    {
        $results = $this->db->exec($query);
        return $results;
    }
    //dung prepare
    function execp($query)
    {
        $statement = $this->db->prepare($query);
        return $statement;
    }
}
?>