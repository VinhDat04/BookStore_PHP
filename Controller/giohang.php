<?php
// session_unset();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = 'giohang';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':
        if (isset($_POST['masach']) && isset($_POST['soluong'])) {
            $masach = $_POST['masach'];
            $soluong = $_POST['soluong'];

            // Gọi phương thức addCart từ class giohang để thêm sản phẩm vào giỏ hàng
            $gh = new giohang();
            $gh->addCart($masach, $soluong);

            // Hiển thị thông báo cho người dùng và chuyển hướng về trang giỏ hàng
            // echo "return redirect('/index.php?action=sanpham&act=sanphamchitiet')->with('success', 'Them thanh cong!');";
            echo '<script>alert("Đã thêm sản phẩm vào giỏ hàng!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;

    case 'giohang_xoa':
        if (isset($_GET['masach'])) {
            $masach_to_delete = $_GET['masach'];

            // Loop through the cart to find the item with the matching masach and remove it
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['masach'] == $masach_to_delete) {
                    unset($_SESSION['cart'][$key]);
                    break; // Break the loop after removing the item
                }
            }

            // Redirect back to the cart page after the deletion
            echo '<script>alert("Đã xóa sản phẩm khỏi giỏ hàng!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;

    case 'giohang_tang':
        if (isset($_GET['masach'])) {
            $masach_tang = $_GET['masach'];

            // Loop through the cart to find the item with the matching masach and update its quantity
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['masach'] == $masach_tang) {
                    $_SESSION['cart'][$key]['qty']++; // Increase the quantity by 1

                    // Recalculate the total price based on the updated quantity and unit cost
                    $_SESSION['cart'][$key]['total'] = $_SESSION['cart'][$key]['qty'] * $_SESSION['cart'][$key]['cost'];

                    // If the updated quantity is less than 1, remove the item from the cart
                    if ($_SESSION['cart'][$key]['qty'] < 1) {
                        unset($_SESSION['cart'][$key]);
                    }
                    break; // Break the loop after updating the item
                }
            }
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;


    case 'giohang_giam':
        if (isset($_GET['masach'])) {
            $masach_tang = $_GET['masach'];
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['masach'] == $masach_tang) {
                    $_SESSION['cart'][$key]['qty']--; // Increase the quantity by 1
                    $_SESSION['cart'][$key]['total'] = $_SESSION['cart'][$key]['qty'] * $_SESSION['cart'][$key]['cost'];
                    if ($_SESSION['cart'][$key]['qty'] < 1) {
                        unset($_SESSION['cart'][$key]);
                    }
                    break;
                }
            }
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;

    case 'giohang_DeleteAll':
        unset($_SESSION['cart']);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        break;

    case 'lsmuahang':
        include_once "./View/sanpham.php";
        break;

}
?>