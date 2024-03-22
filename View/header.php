<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./Content/CSS/header.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./Content/CSS/tour.css">
    <style>
        .menu9:hover {
            color: #498374;
        }
    </style>
</head>

<body>
    <div class="header background container-fluid">
        <div class="container">
            <!-- Menu -->
            <div class="">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="./index.php">
                        <img class="logo" src="./Content/img/logo_book.png" alt="">
                    </a>
                    <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                        <input type="text" name="txtsearch" class="form-control mt-3"
                            style="width: 400px; height: 45px; border: 2px solid #498374; font-size:15px; border-radius:5px"
                            placeholder="Nhập từ khóa tìm kiếm..." aria-describedby="helpId">
                        <button
                            style="height:60px; width:60px; background-color:#498374; border-radius: 50%; margin-left:-50px; color:white; font-size:20px"
                            type="submit" class="btn mt-3 btn-lg zoom"><i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <?php
                    if (!isset($_SESSION['makh'])) {
                        ?>
                        <a href="dangky.php?action=dangky"
                            style="text-decoration: none; margin-left: 20px; color:#498374; font-weight:bold; margin-right: 5px; "
                            class="zoom"><i class="fa fa-user" aria-hidden="true"></i> Đăng
                            Ký</a> |
                        <a href="dangnhap.php?action=dangnhap"
                            style="text-decoration: none; margin-left: 5px; color:#498374; font-weight:bold; margin-right: 5px; "
                            class="zoom"><i class="fa fa-lock" aria-hidden="true"></i> Đăng Nhập</a> |
                    <?php } ?>
                    <?php
                    if (isset($_SESSION['makh'])) {
                        echo '<p style="text-decoration: none; margin-left: 5px; color:#498374; padding-top:28px; margin-right: 5px; ">Xin Chào ' . '<b>' . $_SESSION['tenkh'] . '</b>' . ' | </p>';
                        ?>
                        <a href="index.php?action=dangnhap&act=dangxuat"
                            style="text-decoration: none; margin-left: 5px; color:#498374; font-weight:bold; margin-right: 5px; padding-top:12px "
                            class="zoom"><i class="fas fa-sign-out-alt"></i>
                            Đăng Xuất</a>
                    <?php } ?>
                    <a href="index.php?action=giohang" style="text-decoration:none">
                        <span><i style="font-size: 30px; color:#498374; margin-left:10px; padding-top:10px"
                                class="fa fa-cart-arrow-down" aria-hidden="true"></i> <sup style="color:red">
                                (<?php 
                                $count = 0;
                                if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key => $item) {
                                        $count += $item['qty'];
                                    }
                                    echo $count;
                                }
                                ?>)
                            </sup> </span>
                    </a>
                </div>

                <div class="form-inline text-dark">
                    <div class="form-group">


                        <div class="dropdown open">
                            <button id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                type="button" class="btn text-light text-left mb-2  "
                                style="background-color: #498374; font-weight: bold ; width: 350px; height:50px"><i
                                    class="fa fa-bars" aria-hidden="true"></i> TẤT CẢ DANH MỤC
                            </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId" style="width:350px; ">
                                <!-- <?php
                                $dm = new dmsp();
                                $result = $dm->getDMSP();
                                while ($set = $result->fetch()) { ?>
                                    <a href="./index.php?action=sanpham&act=<?php echo $set['duongdan'] ?>"
                                        style="text-decoration: none; "><button type="button" class="dropdown-item DMSP">
                                            <?php echo $set['tendm'] ?>
                                        </button></a>
                                <?php } ?> -->
                                <a href="./index.php?action=sanpham&act=tieuthuyet"
                                    style="text-decoration: none; "><button type="button"
                                        class="dropdown-item DMSP">Tiểu Thuyết</button></a>
                                <a href="./index.php?action=sanpham&act=giaokhoa"
                                    style="text-decoration: none; "><button type="button"
                                        class="dropdown-item DMSP">Sách Giáo Khoa</button></a>
                                <a href="./index.php?action=sanpham&act=thieunhi"
                                    style="text-decoration: none; "><button type="button"
                                        class="dropdown-item DMSP">Thiếu Nhi</button></a>
                                <a href="./index.php?action=sanpham&act=lichsu" style="text-decoration: none; "><button
                                        type="button" class="dropdown-item DMSP">Lịch Sử</button></a>
                                <a href="./index.php?action=sanpham&act=kinhdoanh"
                                    style="text-decoration: none; "><button type="button"
                                        class="dropdown-item DMSP">Kinh Doanh</button></a>
                                <a href="./index.php?action=sanpham&act=doisong" style="text-decoration: none; "><button
                                        type="button" class="dropdown-item DMSP">Đời Sống</button></a>
                            </div>
                        </div>
                        <a href="./index.php"
                            style=" margin-left: 40px;  color:#1c1e21;font-weight:bold; margin-right:25px; "
                            class="menu"><span class="menu9">Trang Chủ</span></a>
                        <a href="./index.php?action=sanpham&act=tatcasanpham"
                            style=" margin-left: 20px;  color:#1c1e21;font-weight:bold; margin-right:25px; "
                            class="menu"><span class="menu9">Tất Cả Sách</span></a>
                        <a href="./index.php?action=sanpham"
                            style="; margin-left: 20px; color:#1c1e21; font-weight:bold; margin-right:25px; "
                            class="menu"><span class="menu9">Mới Nhất</span></a>
                        </a>
                        <a href="./index.php?action=sanpham&act=sanphamsale"
                            style="; margin-left: 20px; color:#1c1e21; font-weight:bold; margin-right:25px; "
                            class="menu"><span class="menu9">Khuyến Mãi</span></a></a>
                        <a href="index.php?action=sanpham&act=sanphamview"
                            style="; margin-left: 20px; color:#1c1e21; font-weight:bold; margin-right:25px; "
                            class="menu"><span class="menu9">Nhiều Lượt Xem</span></a></a>
                        <a href="index.php?action=sanpham&act=tintuc"
                            style="; margin-left: 20px; color:#1c1e21; font-weight:bold; margin-right:25px; "
                            class="menu"><span class="menu9">Tin
                                Tức</span></a></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="carouselId1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId1" data-slide-to="1"></li>
            <li data-target="#carouselId1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./Content/img/bg1.webp" alt="First slide" style=" width:100% ">
            </div>
            <div class="carousel-item">
                <img src="./Content/img/bg2.webp" alt="Second slide" style=" width:100% ">
            </div>
            <div class="carousel-item">
                <img src="./Content/img/bg3.webp" alt="Third slide" style=" width:100% ">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>