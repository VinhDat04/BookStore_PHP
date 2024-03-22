<!-- quảng cáo -->
<?php
include "quangcao.php";
?>
<!-- end quảng cáo -->

<?php
// Initialize the variables
$title = "";
$content = "";
$image = "";
$id = "";

?>
<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->
<?php
$ac = 1;
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'sanpham') {
        if (isset($_GET['act']) && $_GET['act'] == 'tintuc') {
            $ac = 2;
        }
    }
}
?>
<?php
//xác định có bao nhiêu sản phẩm, select count(*)
$hh = new tintuc();
if ($ac == 2) {
    $count = $hh->getTinTuc()->rowCount(); //14
}

//b2 xác định limit
$limit = 4;
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
            if ($ac == 2) {
                echo '<div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Tất Cả Tin Tức</button>
            </div>';
            }
            ?>
        </div>

    </div>
    <!--Grid row-->
    <div class="row">

        <?php
        $hh = new tintuc();
        if ($ac == 2) {
            // $result = $hh->getHangHoaAll(); //lấy được bẳng 14 sp
            $result = $hh->getTinTucPage($start, $limit); //sp được phân trang
        }
        //đổ từng sp lên view
        while ($set = $result->fetch()) {
            ?>
            <div class="card mt-3 " style="box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.3), 0 2px 4px 0 rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                <div class="row mt-3">
                <div class="col-md-3 d-flex justify-content-center align-items-center">
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
                        <a href="chitietnews.php?action=sanpham&act=chitietnew&id=<?php echo $set['id']?>" style="color:#5e5e5e; text-align: justify">
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

    </div>

    <!--Grid row-->

</section>


<!-- end sản phẩm mới nhất -->


<div class=" page">
    <ul class="pagination">
        <?php
        if ($ac == 2) {
            if ($current_page > 1 && $page > 1) {
                echo '<li>
                <a href="index.php?action=sanpham&act=tintuc&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn btn-lg btn-outline-success"><</button></a>
                </li>';
            }
            for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                    <a href="index.php?action=sanpham&act=tintuc&page=<?php echo $i; ?>">
                        <button type="button" class="btn btn-lg" <?php if ($i == $current_page) {
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
                <a href="index.php?action=sanpham&act=tintuc&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn btn-lg btn-outline-success">></button></a>
                </li>';
            }
        }
        ?>
    </ul>
</div>