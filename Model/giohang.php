<?php
class giohang
{
    // phương thức thêm thông tin vào trong gio hàng
    function addCart($masach, $soluong)
    {
        // thiếu hình,thiếu tên, thiếu đơn giá.Từ id truy vấn ngược lại
        $sp = new hanghoa();
        $idsp = $sp->getHangHoaId($masach);
        // $hinh=$sp->getHangHoaHinhIdCZ($masach);
        // $masach = $idsp['masach'];
        $tensach = $idsp['tensach'];
        $dongia = $idsp['dongia'];
        $img = $idsp['hinh'];
        $total = $soluong * $dongia;
        $giamgia = $idsp['giamgia'];

        $flag = false;
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['masach'] == $masach) {
                $flag = true;
                $soluong += $_SESSION['cart'][$key]['qty'];
                $this->update($key, $soluong);
            }
        }
        if ($flag == false) {
            $item = array(
                'masach' => $masach,
                'hinh' => $img,
                'name' => $tensach,
                'cost' => $dongia,
                'qty' => $soluong,
                'total' => $total,
                'sale' => $giamgia
            );
            $_SESSION['cart'][] = $item;
        }
        // vì giở hàng là mảng lưu trữ nhiều đối tượng có thuộc tính giống nhau nên tạo tối tượng



    }
    function sub_total()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal = number_format($subtotal, 2);
        return $subtotal;
    }

    function update($index, $soluong)
    {
        if ($soluong <= 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['qty'] = $soluong;
    
            // Check if the product has a discount
            if ($_SESSION['cart'][$index]['sale'] == 0) {
                $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
            } else {
                // If no discount, use the regular cost
                $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['sale'];
            }
    
            $_SESSION['cart'][$index]['total'] = $total_new;
        }
    }
    
    

    // function update($index, $soluong)
    // {
    //     if ($soluong <= 0) {
    //         unset($_SESSION['cart'][$index]);
    //     } else {
    //         $_SESSION['cart'][$index]['qty'] = $soluong;
    //         $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
    //         $_SESSION['cart'][$index]['total'] = $total_new;
    //     }
    // }
    


}
?>