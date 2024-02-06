<?php
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

}

switch ($act) {
    case 'dangky_action':
        $name = "";
        $email = "";
        $phone = "";
        $password = "";
        if (isset($_POST['submit'])) {
            $name = $_POST['txtname'];
            $email = $_POST['txtemail'];
            $phone = $_POST['txtphone'];
            $password = $_POST['txtpassword'];
            // Mã hóa pass
            $saltF = "N63442!@#";
            $saltL = "N4nhan438#@!";
            $passnew = md5($saltF . $password . $saltL);
            $kh = new user();
            $check = $kh->checkUser($name, $email, $phone, $password)->rowCount();
            if ($check >= 1) {
                echo "trùng";

            } else {
                //insert và database 
                $iskh = $kh->inserKhachHang($name, $email, $phone, $passnew);

                if ($iskh !== false) {
                    echo '<script> alert("Đăng ký thành công")</script>';
                } else {
                    echo '<script> alert("Đăng ký không thành công")</script>';
                    // include_once "./View/registration.php";
                    echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangky&dangnhap"/>';
                }
            }

        }
        break;
}

?>