<?php
$act = "show";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'show':
        include_once "./View/show.php";
        break;

    
}
?>