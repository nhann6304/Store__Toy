<?php
$act = "sanpham";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case "sanpham":
        include_once "./View/hanghoa.php";
        break;
    case "productAll";
        include_once "./View/hanghoa.php";
        break;
    case "productNew";
        include_once "./View/hanghoa.php";
        break;
    case "productSale";
        include_once "./View/hanghoa.php";
        break;
    case "sanphamchitiet";
        include_once "./View/sanphamchitiet.php";
        break;
    case "timkiem":
        include_once "./View/sanpham.php";
        break;
}
// include_once "./View/sanpham.php"
?>