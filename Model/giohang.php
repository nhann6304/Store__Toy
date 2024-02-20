<?php
class giohang
{
    // Thêm thông tin vào trong giỏ hàng
    function addCart($mahh, $soluong)
    {
        // Còn thiếu hình tên đơn giá thành tiền
        $sanpham = new hanghoa();
        $sp = $sanpham->getHangHoaid($mahh);
        $tenhh = $sp['tenhh'];
        $quocgia = $sp['tenquocgia'];
        $dongia = $sp['dongia'] - $sp['giamgia'];
        $hinh = $sanpham->getHangHoaimg($mahh);
        $img = $hinh['hinh'];
        $total = $soluong * $dongia;
        $flag = false;
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $mahh) {
                $flag = true;
                $soluong += $item['soluong'];
                $this->updateHH($key, $soluong);
            }
        }
        if ($flag == false) {
            $item = array(
                'mahh' => $mahh, //thuộc tính và giá trị thuộc tính đặt tên gì cũng được
                'tenhh' => $tenhh,
                'soluong' => $soluong,
                'dongia' => $dongia,
                'thanhtien' => $total,
                'hinh' => $img,
                'quocgia' => $quocgia
            );
            // Đem đối tượng add vào giỏ hàng

            $_SESSION['cart'][] = $item;
        }

    }
    function getSubTotal()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $key => $item) {
            $subtotal += $item['thanhtien'];
        }
        $subtotal = number_format($subtotal);
        return $subtotal;
    }
    function updateHH($index, $soluong)
    {
        if ($soluong <= 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['soluong'] = $soluong;
            $tienmoi = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
            $tienmoi = $_SESSION['cart'][$index]['thanhtien'] = $tienmoi;
        }
    }
}
?>