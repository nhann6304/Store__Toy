<?php


// Kiểm tra xem có giá trị không
if (isset($idValue)) {
    // Sử dụng giá trị "id" theo nhu cầu của bạn
    echo "Giá trị của tham số 'id' là: " . $_SESSION['idhanghoa'];
} else {
    echo "Tham số 'id' không tồn tại trong URL.";
}


?>