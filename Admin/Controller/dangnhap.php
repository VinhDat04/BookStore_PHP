<?php
$act = "dangnhap";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/dangnhap.php";
        break;
    case 'dangnhap_action':
        $user = '';
        $pass = '';
        if (isset($_POST['login'])) { // Change from "submit" to "login"
            $user = $_POST["txtusername"];
            $pass = $_POST["txtpassword"];
            $saltF = "G4335#";
            $saltL = "F5567!";
            $passnew = md5($saltF . $pass . $saltL);
            $kh = new dangnhap();
            $logkh = $kh->logKhachHang($user, $passnew);
            if ($logkh) {
                session_start(); // Start the PHP session
                $_SESSION['makh'] = $logkh['makh'];
                $_SESSION['tenkh'] = $logkh['tenkh'];
                $_SESSION['phanquyen'] = 0;
                echo '<script> alert("Đăng Nhập Thành Công!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=admin"/>';
            } else {
                echo '<script> alert("Đăng Nhập Thất Bại!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>'; // Add "./" before the URL
            }
        }
        break;

    case 'dangxuat':
        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
        break;
}
?>