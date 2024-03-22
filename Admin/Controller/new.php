<?php
$act = "new";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'new':
        include_once "./View/tintuc.php";
        break;

    case 'addnew':
        include_once "./View/addnews.php";
        break;

    case 'addnew_action':
        $title = $_POST['title'];
        $image = $_POST['image'];
        $content = $_POST['content'];
        $kh = new dangnhap();

        $kq = $kh->insertNews($title, $image, $content);

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