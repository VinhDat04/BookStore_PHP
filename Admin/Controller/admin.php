<?php
$act = "admin";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'admin':
        include_once "./View/admin.php";
        break;

    
}
?>