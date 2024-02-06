<?php
$act = "dangnhap";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}


switch ($act) {
    case "dangxuat":
        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        echo '<script> alert("Đã đăng xuất")</script>';

        echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';

        break;
    case "dangnhap_action":
        if (isset($_POST['txtemail']) && isset($_POST['txtpassword'])) {
            $email = $_POST['txtemail'];
            $pass = $_POST['txtpassword'];
            $saltF = "N63442!@#";
            $saltL = "N4nhan438#@!";
            $passnew = md5($saltF . $pass . $saltL);
            $kh = new user();
            $logkh = $kh->logKhachHang($email, $passnew);
            if ($logkh) {
                //Nếu đăng nhập thành công tạo section lưu trữ thông tin khách hàng
                $_SESSION['makh'] = $logkh['makh'];
                $_SESSION['tenkh'] = $logkh['tenkh'];
                echo '<script> alert("Đăng nhập thành công")</script>';
                // include_once "./View/registration.php";
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
            } else {
                // echo '<script> alert("Đăng nhập không thành công")</script>';
                // include_once "./View/registration.php";
                // echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangky&dangnhap"/>';
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';

            }
        }
        break;
}

?>