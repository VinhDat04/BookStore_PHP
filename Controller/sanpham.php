<?php
//controller điều  phối đến view tên là sản phẩm
$act = "sanpham";
if (isset($_GET['act'])) {
    $act = $_GET['act']; //sanphamkuyenmai
}
switch ($act) {
    case 'sanpham':
        include_once "./View/sanpham.php";
        break;

    case 'sanphamsale':
        include_once "./View/sanpham.php";
        break;

    case 'sanphamview':
        include_once "./View/sanpham.php";
        break;

    case 'tatcasanpham':
        include_once "./View/sanpham.php";
        break;

    case 'tieuthuyet':
        include_once "./View/sanpham.php";
        break;

    case 'giaokhoa':
        include_once "./View/sanpham.php";
        break;

    case 'thieunhi':
        include_once "./View/sanpham.php";
        break;

    case 'lichsu':
        include_once "./View/sanpham.php";
        break;

    case 'kinhdoanh':
        include_once "./View/sanpham.php";
        break;

    case 'doisong':
        include_once "./View/sanpham.php";
        break;

    case 'sanphamchitiet':
        include_once "./View/sanphamchitiet.php";
        break;

    case 'timkiem':
        include_once "./View/sanpham.php";
        break;

    case 'tintuc':
        include_once "./View/tintuc.php";
        break;

    case 'chitietnew':
        include_once "./View/chitiettintuc.php";
        break;

    case 'loctheogia':
        include_once "./View/sanpham.php";
        break;

    case 'sapxep':
        include_once "./View/sanpham.php";
        break;

    default:
        // Nếu không khớp với bất kỳ case nào, chúng ta sẽ kiểm tra các mục trong cơ sở dữ liệu
        $dm = new dmsp();
        $result = $dm->getDMSP();
        while ($set = $result->fetch()) {
            // Tạo một case dựa trên giá trị duongdan từ cơ sở dữ liệu
            // Chú ý rằng đây chỉ là một ví dụ, bạn có thể cần điều chỉnh để phù hợp với cấu trúc cơ sở dữ liệu của bạn
            if ($act == $set['duongdan']) {
                include_once "./View/sanpham.php";
                break; // Bắt buộc dừng vòng lặp sau khi tìm thấy kết quả khớp
            }
        }
        break;


}
?>