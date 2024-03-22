<?php
$act = "add";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'add':
        include_once "./View/addloaisanpham.php";
        break;

    case 'add_action':
        $tensach = $_POST['txttensach'];
        $giamgia = $_POST['txtgiamgia'];
        $hinh = $_POST['txthinh'];
        $matheloai = $_POST['txtmatheloai'];
        $soluotxem = $_POST['txtsoluotxem'];
        $ngaylap = $_POST['txtngaylap'];
        $mota = $_POST['txtmota'];
        $tacgia = $_POST['txttacgia'];
        $nhaxuatban = $_POST['txtnhaxuatban'];
        $dongia = $_POST['txtdongia'];
        $soluongton = $_POST['txtsoluongton'];

        $kh = new dangnhap();

        $kq = $kh->insertSach($tensach, $giamgia, $hinh, $matheloai, $soluotxem, $ngaylap, $mota, $tacgia, $nhaxuatban, $dongia, $soluongton);

        if ($kq != false) {
            echo '<script> alert("Thêm Thành Công!");</script>';
            // include_once "./View/home.php";
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=add"/>';
        } else {
            echo '<script>alert("Thêm Thất Bại!");</script>';
            // include_once "./View/registration.php";
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=add"/>';
        }
        break;
}
?>