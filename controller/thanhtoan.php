<?php
if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    $hd = new hoadon();
    $sohd = $hd->insertHoadon($makh);
    $_SESSION['sohoadon'] = $sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $hd->insertCTHoadon($sohd, $item['mahh'], $item['soluong'], $item['quocgia'], $item['thanhtien']);
        // $hd->updateSoLuongTon($item['mahh'], $item['soluong']);
        $total += $item['thanhtien'];
        // hàm cập nhật số lượng tồn khi mua hàng

    }
    $hd->updateHoaDonTongTien($sohd, $makh, $total);
}
include_once "./View/order.php";
?>