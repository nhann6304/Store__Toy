<?php
class binhluan
{
    //Phương thức insert vào database
    function insertBinhLuan($idkh, $idhanghoa, $content)
    {
        $db = new connect();
        $query = "insert into comment(idcomment,idkh,idhanghoa,content,luotthich) values (NULL,$idkh,$idhanghoa,'$content',0)";
        echo $query;
        $db->exec($query);
    }
    function selectBinhLuan($idhanghoa)
    {
        $db = new connect();
        $select = "select a.tenkh, b.content from khachhang a,comment b WHERE a.makh=idkh and b.idhanghoa=$idhanghoa";
        $result = $db->__getList($select);
        return $result;
    }
}
?>