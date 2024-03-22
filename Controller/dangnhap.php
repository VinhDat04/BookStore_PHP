<?php
$act = "dangnhap";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;
    case 'dangnhap_action':
        $user = '';
        $pass = '';
        if (isset($_POST['submit'])) {
            $user = $_POST["txtusername"];
            $pass = $_POST["txtpassword"];
            $saltF = "G4335#";
            $saltL = "F5567!";
            $passnew = md5($saltF . $pass . $saltL);
            $kh = new user();
            $logkh = $kh->logKhachHang($user, $passnew);
            if ($logkh) {
                $_SESSION['makh'] = $logkh['makh'];
                $_SESSION['tenkh'] = $logkh['tenkh'];
                echo '<script> alert("Đăng Nhập Thành Công!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
            } else {
                echo '<script> alert("Đăng Nhập Thất Bại!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=dangnhap.php?action=dangnhap"/>';
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