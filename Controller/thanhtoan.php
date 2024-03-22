<?php
if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    //lấy số hóa đơn vừa chèn vào
    $hd = new hoadon();
    $sohd = $hd->insertHoaDon($makh);
    $_SESSION['masohd'] = $sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $hd->insertCTHoaDon($sohd, $item['masach'], $item['qty'], $item['total']);
        $total += $item['total'];
    }
    $hd->updateHoaDon($sohd, $makh, $total);
}
include_once "./View/order.php";
unset($_SESSION['cart']);
?>