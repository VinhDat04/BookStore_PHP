<!--Sản phẩm mới nhất -->
<!-- <link rel="stylesheet" href="./Content/CSS/tour.css"> -->

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

<div class="container">
    <div class="row">
        <div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
            <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sản Phẩm Mới
                Nhất</button>
        </div>

    </div>


    <!-- 8 Sản Phẩm -->

    <form action="" method="post">
        <div class="row">


            <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaNew();
            while ($set = $result->fetch()) {
                ?>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                    <div class="col-lg-3 col-md-4 text-left mt-3">

                        <div class="card sp">
                            <img class="card-img-top hinh " src="./Content/img/<?php echo $set['hinh'] ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-center title">
                                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>"
                                        style="text-decoration:none ;color: #3b3a3a;">
                                        <?php echo $set['tensach'] ?>
                                    </a>
                                </h5>
                                <p class="card-text text-danger gia" style=" font-weight: bold; ">
                                    <?php echo number_format($set['dongia']) ?> <sup>đ</sup>
                                </p>
                                <input type="hidden" name="masach" value="<?php echo $set['masach']; ?>" />
                                <input type="hidden" name="soluong" value="1" />
                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                                    <button type="button" class="btn offset-md-3 cart">Xem chi tiết</button>
                                </a><br>
                                <small>Số lượt xem: <b>
                                        <?php echo $set["soluotxem"] ?>
                                    </b> <i class="fa fa-eye" aria-hidden="true"></i> </small>
                            </div>
                        </div>
                    </div>
                </a>

            <?php } ?>

        </div>

        <a href="./index.php?action=sanpham"><button type="button" class="btn nutbam mt-3"
                style="margin-left: 500px;  ">Xem Tất Cả</button></a>

        <!-- 8 Sản Phẩm -->

        <div class="row">
            <div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Sản Phẩm Khuyến
                    Mãi</button>
            </div>

        </div>


        <div class="row">

            <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaSale();
            while ($set = $result->fetch()) {
                ?>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                    <div class="col-lg-3 col-md-4 text-left mt-3">
                        <div class="card sp">
                            <img class="card-img-top hinh" src="./Content/img/<?php echo $set['hinh'] ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-center title">
                                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>"
                                        style="text-decoration:none ; color: #3b3a3a;">
                                        <?php echo $set['tensach'] ?>
                                    </a>
                                </h5>
                                <p class="card-text text-danger gia" style=" font-weight: bold; ">
                                    <?php echo number_format($set['giamgia']) ?> <sup>đ</sup>
                                    <strike style="color:#5e5e5e ; font-size: 80% ">
                                        <?php echo $set['dongia']; ?>
                                    </strike><sup style="color:#5e5e5e ; font-size: 50% "><u>đ</u></sup>
                                </p>
                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                                    <button type="button" class="btn offset-md-3 cart">Xem chi tiết</button>
                                </a>
                                <br>
                                <small>Số lượt xem: <b>
                                        <?php echo $set["soluotxem"] ?>
                                    </b> <i class="fa fa-eye" aria-hidden="true"></i> </small>
                            </div>
                        </div>
                    </div>
                </a>

            <?php } ?>

        </div>

        <a href="./index.php?action=sanpham&act=sanphamsale"><button type="button" class="btn nutbam mt-3"
                style="margin-left: 500px;  ">Xem Tất Cả</button></a>

        <!-- 8 Sản Phẩm -->

        <div class="row">
            <div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Nhiều Lượt Xem
                    Nhất</button>
            </div>
        </div>


        <div class="row">

            <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaView();
            while ($set = $result->fetch()) {
                ?>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                    <div class="col-lg-3 col-md-4 text-left mt-3">
                        <div class="card sp">
                            <img class="card-img-top hinh" src="./Content/img/<?php echo $set['hinh'] ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-center title">
                                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>"
                                        style="text-decoration:none ; color: #3b3a3a;">
                                        <?php echo $set['tensach'] ?>
                                    </a>
                                </h5>
                                <p class="card-text text-danger gia" style=" font-weight: bold; ">
                                    <?php echo number_format($set['dongia']) ?> <sup>đ</sup>
                                </p>
                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masach']; ?>">
                                    <button type="button" class="btn offset-md-3 cart">Xem chi tiết</button>
                                </a><br>
                                <small>Số lượt xem: <b>
                                        <?php echo $set["soluotxem"] ?>
                                    </b> <i class="fa fa-eye" aria-hidden="true"></i> </small>
                            </div>
                        </div>
                    </div>
                </a>

            <?php } ?>

        </div>

        <a href="index.php?action=sanpham&act=sanphamsale&act=sanphamview"><button type="button" class="btn nutbam mt-3"
                style="margin-left: 500px;  ">Xem Tất Cả</button>
        </a>

        <!-- Tin Tức -->
        <div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
            <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tin Tức Nổi
                Bậc</button>
        </div>

        <?php
        $tt = new tintuc();
        $result = $tt->getTinTuc();
        while ($set = $result->fetch()) { ?>
            <div class="card mt-3 " style="box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.3), 0 2px 4px 0 rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-3 d-flex  justify-content-center align-items-center">
                            <!-- Sử dụng lớp d-flex để làm cho phần tử con căn giữa theo cả chiều ngang và chiều dọc -->
                            <img src="./Content/img/<?php echo $set['image'] ?>" alt="" style="width:60%;">
                        </div>
                        <div class="col-md-9">
                            <!-- <h4>
                        <?php echo $set['title']; ?>
                    </h4> -->
                            <p>
                                <?php
                                // Giới hạn nội dung chỉ hiển thị 1000 ký tự
                                $content = $set['content'];
                                if (strlen($content) > 1000) {
                                    $content = substr($content, 0, 700);
                                    $content = substr($content, 0, strrpos($content, ' ')) . '...xem thêm';
                                } ?>
                                <a href="chitietnews.php?action=sanpham&act=chitietnew&id=<?php echo $set['id'] ?>"
                                    style="color:#5e5e5e; text-align: justify">
                                    <i style="text-align: justify; ">
                                        <?php echo $content; ?>
                                    </i>
                                </a>
                                <?php
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        <?php } ?>
    </form>
</div>
<a href="./index.php?action=sanpham&act=tintuc"><button type="button" class="btn nutbam mt-3"
        style="margin-left: 500px;  ">Xem Tất Cả Tin</button></a>

<script>
    // Đảm bảo rằng tất cả các tùy chọn trong dropdown menu không chia sẻ id giống nhau
    document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
        menu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    });

    // Xử lý việc đóng dropdown khi chọn một tùy chọn trong select box
    document.querySelectorAll('.form-control').forEach(function (select) {
        select.addEventListener('change', function (e) {
            e.stopPropagation(); // Chặn sự kiện từ lan truyền đến dropdown menu để nó không bị đóng
        });
    });
</script>