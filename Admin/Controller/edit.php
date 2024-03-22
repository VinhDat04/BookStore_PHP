<?php
$act = "edit";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'edit':
        include_once "./View/edithanghoa.php";
        break;

    case 'update_action':
        $masach = $_POST['txtmasach'];
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
        $kq = $kh->updateSach($masach, $tensach, $giamgia, $hinh, $matheloai, $soluotxem, $ngaylap, $mota, $tacgia, $nhaxuatban, $dongia, $soluongton);

        if ($kq != false) {
            echo '<script> alert("Cập Nhật Thành Công!");</script>';
            // include_once "./View/home.php";
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=show"/>';
        } else {
            echo '<script>alert("Cập Nhật Thất Bại!");</script>';
            // include_once "./View/registration.php";
            // echo '<meta http-equiv="refresh" content="0;url=./index.php?action=edit"/>';
        }
        break;

    case 'delete_action':
        $masach = $_GET['id'];
        $kh = new dangnhap();
        $kq = $kh->deleteSach($masach);

        if ($kq != false) {
            echo '<script> alert("Xóa Thành Công!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=show"/>';
        } else {
            echo '<script>alert("Xóa Thất Bại!");</script>';
            // Handle the case when deletion fails, you can redirect or display an error message
        }
        break;

    case 'editnews':
        include_once "./View/editnews.php";
        break;

    case 'update_news':
        $id = $_POST['id'];
        $title = $_POST['title'];
        $image = $_POST['image'];
        $content = $_POST['content'];

        $kh = new tintuc();
        $kq = $kh->updateNews($id, $title, $image, $content);

        if ($kq != false) {
            echo '<script> alert("Cập Nhật Thành Công!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=new"/>';
        } else {
            echo '<script>alert("Cập Nhật Thất Bại!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=editnews&id=' . $id . '"/>';
        }
        break;




}
?>