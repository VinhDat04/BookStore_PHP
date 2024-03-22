<!-- quảng cáo -->
<?php
include "quangcao.php";
?>
<!-- end quảng cáo -->

<?php
// Initialize the variables
$tensach = ''; // Initialize with an empty string
$giamgia = 0; // Initialize with a default value
$dongia = 0.0; // Initialize with a default value
$tentheloai = ''; // Initialize with an empty string
$tacgia = ''; // Initialize with an empty string
$nhaxuatban = ''; // Initialize with an empty string
$mota = ''; // 
// $max = "";
// $min = "";
// $max = $_POST['max'];
// $min = $_POST['min'];
// $min = isset($_POST['min']) ? $_POST['min'] : 0;
// $max = isset($_POST['max']) ? $_POST['max'] : PHP_INT_MAX;

?>
<?php
$hh = new hanghoa();
$result = $hh->getMaxMin();
while ($set = $result->fetch()) {
    ?>
    <div class="dropdown" style="position: fixed; top: 150px; right: 0; z-index: 1; ">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="width:200px; background-color: #498374 ">
            Bộ Lọc
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId" style="width:300px; background-color: #498374; ">
            <div class="card ml-1 mr-1">
                <div class="card-body">
                    <form action="index.php?action=sanpham&act=loctheogia" method="post">
                        <p class="card-title"><b>*Lọc theo giá</b></p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" style="width:120px">
                                    <label for="">Min</label>
                                    <input min="<?php echo $set['min'] ?>" max="<?php echo $set['max'] ?>"
                                        style="font-size: 15px; " value="<?php echo $set['min'] ?>" type="number" name="min"
                                        id="" class="form-control" placeholder="" aria-describedby="helpId" step="1000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="width:120px">
                                    <label for="">Max</label>
                                    <input min="<?php echo $set['min'] ?>" max="<?php echo $set['max'] ?>"
                                        style="font-size: 15px; " value="<?php echo $set['max'] ?>" type="number" name="max"
                                        id="" class="form-control" placeholder="" aria-describedby="helpId" step="1000">
                                </div>
                            </div>
                        </div>
                        <button class="btn" type="submit" name="submit">
                            <span class="badge badge-primary" style="">Lọc</span>
                        </button>
                    </form>
                    <form action="index.php?action=sanpham&act=sapxep" method="post">
                        <p class="card-title"><b>*Sắp xếp theo</b></p>
                        <div class="form-group">
                            <select class="form-control" name="sapxep" id="">
                                <option value="giatd">Giá tăng dần</option>
                                <option value="giagd">Giá giảm dần</option>
                                <option value="luotxemtd">Lượt xem tăng dần</option>
                                <option value="luotxemgd">Lượt xem giảm dần</option>
                            </select>
                        </div>
                        <button class="btn" type="submit" name="submit">
                            <span class="badge badge-primary" style="">Chọn</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->
<?php
$ac = 1;
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'sanpham') {
        if (isset($_GET['act']) && $_GET['act'] == 'sanphamsale') {
            $ac = 2;
        } else if (isset($_GET['act']) && $_GET['act'] == 'sanphamview') {
            $ac = 3;
        } else if (isset($_GET['act']) && $_GET['act'] == 'tatcasanpham') {
            $ac = 4;
        } else if (isset($_GET['act']) && $_GET['act'] == 'tieuthuyet') {
            $ac = 5;
        } else if (isset($_GET['act']) && $_GET['act'] == 'giaokhoa') {
            $ac = 6;
        } else if (isset($_GET['act']) && $_GET['act'] == 'thieunhi') {
            $ac = 7;
        } else if (isset($_GET['act']) && $_GET['act'] == 'lichsu') {
            $ac = 8;
        } else if (isset($_GET['act']) && $_GET['act'] == 'kinhdoanh') {
            $ac = 9;
        } else if (isset($_GET['act']) && $_GET['act'] == 'doisong') {
            $ac = 10;
        } else if (isset($_GET['act']) && $_GET['act'] == 'timkiem') {
            $ac = 11;
        } else if (isset($_GET['act']) && $_GET['act'] == 'loctheogia') {
            $ac = 12;
        } else if (isset($_GET['act']) && $_GET['act'] == 'sapxep') {
            $ac = 13;
        }

    }
}
?>
<?php
//xác định có bao nhiêu sản phẩm, select count(*)
$hh = new hanghoa();
if ($ac == 1) {
    $count = $hh->getHangHoaAllMoiVe()->rowCount(); //14
} else
    if ($ac == 2) {
        $count = $hh->getHangHoaAllSale()->rowCount(); //14
    } else
        if ($ac == 3) {
            $count = $hh->getHangHoaAllView()->rowCount(); //14
        } else
            if ($ac == 4) {
                $count = $hh->getHangHoaAll()->rowCount(); //14
            } else
                if ($ac == 5) {
                    $count = $hh->getHangHoaTieuThuyet()->rowCount(); //14
                } else
                    if ($ac == 6) {
                        $count = $hh->getHangHoaGiaoKhoa()->rowCount(); //14
                    } else
                        if ($ac == 7) {
                            $count = $hh->getHangHoaThieuNhi()->rowCount(); //14
                        } else
                            if ($ac == 8) {
                                $count = $hh->getHangHoaLichSu()->rowCount(); //14
                            } else
                                if ($ac == 9) {
                                    $count = $hh->getHangHoaKinhDoanh()->rowCount(); //14
                                } else
                                    if ($ac == 10) {
                                        $count = $hh->getHangHoaDoiSong()->rowCount(); //14
                                    }



//b2 xác định limit
$limit = 8;
//b3 tính ra là có bao nhiêu trang
$trang = new page();
$page = $trang->findPage($count, $limit); //2trang
//b4: tính ra start
$start = $trang->findStart($limit); //8
//b5 tạo biến chứa trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

?>

<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-8 text-left">
            <?php
            if ($ac == 1) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sản Phẩm Mới Nhất</button>
            </div>';
            }
            if ($ac == 2) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sản Phẩm Giảm Giá</button>
            </div>';
            }
            if ($ac == 3) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sản Phẩm Nhiều Lượt Xem</button>
            </div>';
            }
            if ($ac == 4) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Sản Phẩm</button>
            </div>';
            }
            if ($ac == 5) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Sách Tiểu Thuyết</button>
            </div>';
            }
            if ($ac == 6) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Sách Giáo Khoa</button>
            </div>';
            }
            if ($ac == 7) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Sách Thiếu Nhi</button>
            </div>';
            }
            if ($ac == 8) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Sách Lịch Sử</button>
            </div>';
            }
            if ($ac == 9) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Sách Kinh Doanh</button>
            </div>';
            }
            if ($ac == 10) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Đời Sống</button>
            </div>';
            }
            if ($ac == 11) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sản Phẩm Tìm Kiếm</button>
            </div>';
            }
            if ($ac == 12) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Lọc Theo Giá</button>
            </div>';
            }
            if ($ac == 13) {
                if ($_POST['sapxep'] == 'giatd') {
                    echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sắp Xếp Giá Tăng Dần</button>
                </div>';
                } else if ($_POST['sapxep'] == 'giagd') {
                    echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sắp Xếp Giá Giảm Dần</button>
                </div>';
                } else if ($_POST['sapxep'] == 'luotxemtd') {
                    echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sắp Xếp Lượt Xem Tăng Dần</button>
                </div>';
                } else if ($_POST['sapxep'] == 'luotxemgd') {
                    echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sắp Xếp Lượt Xem Giảm Dần</button>
                </div>';
                }
            }
            ?>
        </div>

    </div>
    <!--Grid row-->
    <div class="row">

        <?php
        $hh = new hanghoa();
        if ($ac == 1) {
            // $result = $hh->getHangHoaAll(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllPageMoive($start, $limit); //sp được phân trang
        }
        if ($ac == 2) {
            // $result = $hh->getHangHoaAllSale(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllPageSale($start, $limit); //sp được phân trang
        }
        if ($ac == 3) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllPageView($start, $limit); //sp được phân trang
        }
        if ($ac == 4) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllPage($start, $limit); //sp được phân trang
        }
        if ($ac == 5) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllTieuThuyet($start, $limit); //sp được phân trang
        }
        if ($ac == 6) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllGiaoKhoa($start, $limit); //sp được phân trang
        }
        if ($ac == 7) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllThieuNhi($start, $limit); //sp được phân trang
        }
        if ($ac == 8) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllLichSu($start, $limit); //sp được phân trang
        }
        if ($ac == 9) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllKinhDoanh($start, $limit); //sp được phân trang
        }
        if ($ac == 10) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            $result = $hh->getHangHoaAllDoiSong($start, $limit); //sp được phân trang
        }
        if ($ac == 11) {
            if (isset($_POST['txtsearch'])) {
                $tk = $_POST['txtsearch'];
                $result = $hh->timkiemSanPham($tk);
            }
        }
        if ($ac == 12) {
            // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
            if (isset($_POST['min']) && isset($_POST['max'])) {
                $min = $_POST['min'];
                $max = $_POST['max'];
                $result = $hh->locTheoGia($min, $max);
            }
        }
        if ($ac == 13) {
            if (isset($_POST['sapxep'])) {
                if ($_POST['sapxep'] == 'giatd') {
                    $result = $hh->getGiaTangDan();
                } else if ($_POST['sapxep'] == 'giagd') {
                    $result = $hh->getGiaGiamDan();
                } else if ($_POST['sapxep'] == 'luotxemtd') {
                    $result = $hh->getLuotXemTangDan();
                } else if ($_POST['sapxep'] == 'luotxemgd') {
                    $result = $hh->getLuotXemGiamDan();
                }
            }
        }
        //đổ từng sp lên view
        while ($set = $result->fetch()) {
            ?>
            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                <div class="col-lg-3 col-md-4 text-left mt-3">
                    <div class="card sp">
                        <img class="card-img-top hinh" src="./Content/img/<?php echo $set['hinh'] ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center title">
                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>"
                                    style="text-decoration:none ;color: #3b3a3a;">
                                    <?php echo $set['tensach'] ?>
                                </a>
                            </h5>
                            <?php
                            if ($ac == 1) {
                                echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                            }
                            if ($ac == 2) {
                                echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                    '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                            }
                            if ($ac == 3) {
                                echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                            }
                            if ($ac == 4) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 5) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 6) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 7) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 8) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 9) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 10) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 11) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 12) {
                                if ($set['giamgia'] == 0) {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                                } else {
                                    echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                            ' . number_format($set['giamgia']) . ' <sup>đ</sup>
                            <strike style="color:#5e5e5e ; font-size: 80% ">
                                ' . $set['dongia'] .
                                        '
                            </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                        </p>';
                                }
                            }
                            if ($ac == 13) {
                                echo '<p class="card-text text-danger gia" style=" font-weight: bold; ">
                                ' . number_format($set['dongia']) . ' <sup>đ</sup>
                            </p>';
                            }
                            ?>
                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                                <button type="button" class="btn offset-md-3 cart">Xem chi tiết</button>
                            </a></button><br>
                            <small>Số lượt xem: <b>
                                    <?php echo $set["soluotxem"] ?>
                                </b> <i class="fa fa-eye" aria-hidden="true"></i> </small>
                        </div>
                    </div>
                </div>
            </a>

        <?php } ?>

    </div>

    <!--Grid row-->

</section>


<!-- end sản phẩm mới nhất -->


<div class=" page">
    <ul class="pagination">
        <?php
        if ($ac == 1) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&page=<?php echo $i; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>

                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 2) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=sanphamsale&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=sanphamsale&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=sanphamsale&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 3) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=sanphamview&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=sanphamview&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=sanphamview&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 4) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=tatcasanpham&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=tatcasanpham&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=tatcasanpham&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 5) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=tieuthuyet&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=tieuthuyet&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=tieuthuyet&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 6) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=giaokhoa&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=giaokhoa&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=giaokhoa&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 7) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=thieunhi&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=thieunhi&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=thieunhi&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 8) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=lichsu&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=lichsu&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=lichsu&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 9) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=kinhdoanh&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=kinhdoanh&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn m-1" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=kinhdoanh&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn m-1 btn-outline-success">></button></a>
                </li>';
            }
        }
        if ($ac == 10) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=doisong&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn  btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=doisong&page=<?php echo "$i"; ?>">
                        <button type="button" class="btn" <?php if ($i == $current_page) {
                            echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                        } else {
                            echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                        } ?>>
                            <?php echo $i; ?>
                        </button>
                    </a>
                </li>
                <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=doisong&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn  btn-outline-success">></button></a>
                </li>';
            }
        }
        ?>
    </ul>
</div>