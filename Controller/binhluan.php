<?php
if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    $masp = $_POST['txtmasach'];
    $noidung = $_POST['comment'];
    // inset vào database
    $bl = new binhluan();
    $bl->insertComment($makh, $masp, $noidung);
}
echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=sanphamchitiet&id=' . $masp . '"/>';
?>