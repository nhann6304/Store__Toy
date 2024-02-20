<?php
//Xem người dùng có tạo ra giỏ hàng hay chưa ??
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case "giohang_action":
        // truyền qua id 
        $id = 0;
        $soluong = 0;
        if (isset($_POST['mahh'])) {
            $id = $_POST['mahh'];
            $soluong = $_POST['soluong'];
            $gh = new giohang();
            $gh->addCart($id, $soluong);
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
        }
        break;
    case 'giohang_xoa':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
        }
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
        break;
    case 'update_cart':
        if (isset($_POST['newqty'])) {
            $newqty = $_POST['newqty'];

            // duyệt qua giỏ hàng, nếu số lượng được thay đổi thì tiến hành update số lượng mới 
            foreach ($newqty as $key => $value) {
                if ($_SESSION['cart'][$key]['soluong'] !== $value) {
                    $gh = new giohang();
                    $gh->updateHH($key, $value);
                }
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
            }


        }
        break;
    default:
        # code...
        break;
}


?>