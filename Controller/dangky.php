<?php
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;

    // case 'dangky_action':
    //     $tenkh = '';
    //     $dc = '';
    //     $sodt = '';
    //     $user = '';
    //     $pass = '';
    //     $email = '';
    //     if (isset($_POST['submit'])) {
    //         $tenkh = $_POST['txttenkh'];
    //         $dc = $_POST['txtdiachi'];
    //         $sodt = $_POST['txtsodt'];
    //         $user = $_POST['txtusername'];
    //         $pass = $_POST['txtpass'];
    //         $email = $_POST['txtemail'];
    //         // $_POST['phanquyen'] = 1;
    //         //mã hóa
    //         $saltF = "G4335#";
    //         $saltL = "F5567!";
    //         $passnew = md5($saltF . $pass . $saltL);
    //         //controller yêu cầu model phải insert vào dâtbase
    //         $kh = new user();
    //         $kq = $kh->insertKhachhang($tenkh, $user, $passnew, $email, $dc, $sodt);
    //         if ($kq != false) {
    //             echo '<script> alert("Đăng Ký Thành Công!");</script>';
    //             // include_once "./View/home.php";
    //             echo '<meta http-equiv="refresh" content="0;url=./dangnhap.php?action=dangnhap"/>';
    //         } else {
    //             echo '<script>alert("Đăng Ký Thất Bại!);</script>';
    //             include_once "./View/registration.php";
    //         }
    //     }
    //     break;
    case 'dangky_action':
        $tenkh = $_POST['txttenkh'];
        $dc = $_POST['txtdiachi'];
        $sodt = $_POST['txtsodt'];
        $user = $_POST['txtusername'];
        $pass = $_POST['txtpass'];
        $email = $_POST['txtemail'];
        
        $kh = new user();
        
        // Kiểm tra trùng lặp dữ liệu
        $duplicate = $kh->checkKhachHang($user, $email);
        
        if ($duplicate) {
            // Nếu username hoặc email đã tồn tại, đăng ký thất bại
            echo '<script>alert("Đăng Ký Thất Bại! Username hoặc Email đã tồn tại.");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./dangky.php?action=dangky"/>';
        } else {
            // Nếu không có trùng lặp, tiến hành đăng ký
            $saltF = "G4335#";
            $saltL = "F5567!";
            $passnew = md5($saltF . $pass . $saltL);
    
            $kq = $kh->insertKhachhang($tenkh, $user, $passnew, $email, $dc, $sodt);
            
            if ($kq != false) {
                echo '<script> alert("Đăng Ký Thành Công!");</script>';
                // include_once "./View/home.php";
                echo '<meta http-equiv="refresh" content="0;url=./dangnhap.php?action=dangnhap"/>';
            } else {
                echo '<script>alert("Đăng Ký Thất Bại!");</script>';
                // include_once "./View/registration.php";
                echo '<meta http-equiv="refresh" content="0;url=./dangky.php?action=dangky"/>';
            }
        }
        break;
    
}

?>