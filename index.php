<?php
// include_once "Model/connect.php";
// include_once "Model/hanghoa.php";
session_start();
include_once "./Model/class.phpmailer.php";
spl_autoload_register('myModelLoader');

function myModelLoader($className)
{
    $path = 'Model/';
    include_once $path . $className . '.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
    /* Add styling for tabs and tab content */
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link  reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- link font-family chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- end link  -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">

</head>

<body>



    <div class="app">
        <!-- start header -->
        <?php include_once "View/header.php" ?>
        <!-- end headder -->

        <!-- start container -->

        <!-- end container -->

        <footer class="footer">

            <!-- <h1 style="font-size: 150px; margin-top: 500px;">Mùi vị của tiền</h1> -->
        </footer>
        <div class="container">
            <div class="row">
                <!-- hien thi noi dung đây -->
                <?php
                $ctrl = "banner";
                if (isset($_GET['action'])) {
                    $ctrl = $_GET['action'];
                }
                include_once "Controller/$ctrl.php";
                ?>
            </div>
        </div>
        <!-- modal -->

        <?php
        include_once "View/modal.php";
        ?>

    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>