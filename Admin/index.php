<?php
spl_autoload_register('myModelClassLoader'); //
function myModelClassLoader($className)
{
    $path = 'Model/';
    include_once $path . $className . '.php';
}
include_once("./Model/dangnhap.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Updated Bootstrap 4 Link -->

    <link rel="stylesheet" type="text/css" href="../Content/CSS/Tour.css" />
    <link rel="stylesheet" href="Content/css/admin.css">
    <title>Admin SanPham</title>

</head>

<body>
    <!-- Thanh header tao menu -->
    <?php
    if (isset($_SESSION['index'])) {
        include "./View/headder.php";
    }
    ?>
    <!-- end hinh dong -->
    <!-- phan thân -->
    <div class="container">
        <div class="">
            <?php
            //load controller
            $ctrl = "dangnhap";
            if (isset($_GET['action'])) {
                $ctrl = $_GET['action'];
            }
            include './Controller/' . $ctrl . '.php';
            ?>
        </div>
        <!-- end menu right -->
    </div>
    <!-- footer -->
    <?php
    // include "View/footer.php"
    ?>
    <!-- end footer -->

</body>

</html>