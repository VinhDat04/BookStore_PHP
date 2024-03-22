<?php
$act = "chart";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'chart':
        include_once "./View/thongke.php";
        break;

    
}
?>