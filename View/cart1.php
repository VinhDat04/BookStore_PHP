<?php
$ac = 1;
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'giohang') {
    if (isset($_GET['act']) && $_GET['act'] == 'lsmuahang') {
      $ac = 15;
    }
  }
}
?>
<?php
//xác định có bao nhiêu sản phẩm, select count(*)
$hh = new hoadon();
if ($ac == 1) {
  if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
  }
  $count = $hh->getLichSuMuaHang($makh)->rowCount(); //14
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

<div class="container mt-5">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="giohang" data-toggle="tab" href="#home" role="tab" aria-controls="home"
        aria-selected="true">Giỏ Hàng Của Bạn</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="lichsuMH" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
        aria-selected="false">Lịch Sử Mua Hàng</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="giohang">
      <div class="table-responsive">
        <!-- kiểm tra có sản phẩm nào trong cửa hàng không -->
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
          ?>

          <form action="" method="post">
            <div class="row">
              <div class="col-lg-12 text-left; mb-3">
                <div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                  <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Giỏ Hàng Của
                    Bạn</button>
                </div>
              </div>

            </div>
            <table class="table table-bordered">
              <thead>
                <tr class="table-success">
                  <th>Số TT</th>
                  <th>Tên Sách</th>
                  <th>Đơn Giá</th>
                  <th colspan="">Số Lượng</th>
                  <th>Thành Tiền</th>
                  <th>Tùy Chọn</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $j = 0;
                foreach ($_SESSION['cart'] as $key => $item) {
                  $j++;
                  $giamgia = isset($item['sale']) ? $item['sale'] : 0;
                  ?>
                  <tr>
                    <td>
                      <?php echo $j ?>
                    </td>
                    <td><img width="50px" height="50px" src="./Content/img/<?php echo $item['hinh']; ?>">
                      <?php echo $item['name']; ?>
                    </td>
                    <td>
                      <?php
                      if ($giamgia == 0) {
                        echo number_format($item['cost']) . '<sup><u>đ</u></sup>';
                      } else {
                        echo number_format($item['cost']) . '<sup><u>đ</u></sup>'; // Hiển thị số tiền giảm giá nếu có
                      }
                      ?>
                    </td>
                    <td>
                      <div class="form-inline">
                        <a href="index.php?action=giohang&act=giohang_giam&masach=<?php echo $item['masach']; ?>">
                          <button type="button" class="btn btn-outline-warning;"
                            style="width:40px; border:1px solid #498374" name="giam">-</button>
                        </a>
                        <input type="number" name="newqty[]" value="<?php echo $item['qty']; ?>" id="soluong"
                          class="form-control" placeholder="" aria-describedby="helpId"
                          style="width:65px; text-align: center; " disabled>
                        <a href="index.php?action=giohang&act=giohang_tang&masach=<?php echo $item['masach']; ?>">
                          <button type="button" class="btn btn-outline-warning;"
                            style="width:40px; border:1px solid #498374" name="tang">+</button>
                        </a>
                      </div><br />

                    </td>
                    <td>
                      <p style="float: right;"> Thành Tiền
                        <?php echo number_format($item['total']); ?><sup><u>đ</u></sup>
                      </p>
                    </td>
                    <td colspan="">
                      <a href="index.php?action=giohang&act=giohang_xoa&masach=<?php echo $item['masach']; ?>">
                        <button type="button" class="btn btn-danger">Xóa</button>
                      </a>


                    </td>

                  </tr>
                <?php } ?>
                <tr>
                  <td colspan="4">
                    <b>Tổng Tiền</b>
                  </td>
                  <td>
                    <b>
                      <?php
                      $gh = new giohang();
                      echo $gh->sub_total();
                      ?>
                      <sup><u>đ</u></sup>
                    </b>
                  </td>
                  <td><a href="index.php?action=thanhtoan"><button type="button" class="btn btn-outline-success ">Thanh
                        toán</button></a></td>
                </tr>
              </tbody>
            </table>
            <a href="index.php?action=giohang&act=giohang_DeleteAll">
              <button type="button" class="btn btn-secondary">Xóa tất cả</button>
            </a>
          </form>
        <?php } else {
          echo '<div style="height:200px; padding-top:30px">
              <H4 style="color:red ; text-align:center" >Không Có Sản Phẩm Trong Giỏ Hàng Của Bạn!</H4>
              <a href="./index.php?action=home"><button type="button" class="btn nutbam mt-3"
        style="margin-left: 500px;  ">Mua Ngay</button></a>
          </div>';
          // echo '<script> alert("Không Có Sản Phẩm Nào Trong Giỏ Hàng Của Bạn");</script>';
          // echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
          ?>

        <?php } ?>
      </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="lichsuMH">
      <?php if (!isset($_SESSION['masohd'])) { ?>
        <div style="height:200px; padding-top:30px">
          <H4 style="color:red ; text-align:center">Bạn Chưa Thực Hiện Thanh Toán Nào!</H4>
          <a href="./index.php?action=home"><button type="button" class="btn nutbam mt-3"
              style="margin-left: 500px;  ">Mua Ngay</button></a>
        </div>
      <?php } else { ?>
        <table class="table">
          <thead>
            <tr>
              <th>Stt</th>
              <th>Tên sách</th>
              <th>Số lượng</th>
              <th>Đơn giá</th>
              <th>Tùy chọn</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (isset($_SESSION['makh'])) {
              $makh = $_SESSION['makh'];
              $hd = new hoadon();
              // $limit = 8;
              // //b3 tính ra là có bao nhiêu trang
              // $trang = new page();
              // $page = $trang->findPage($count, $limit); //2trang
              // $start = $trang->findStart($limit); //8
              // $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
              $ls = $hd->getLichSuMuaHangPage($makh, $start, $limit);
              // $ls = $hd->getLichSuMuaHang($makh);
              $i = 0;
              foreach ($ls as $row) {
                $i++;
                ?>
                <tr>
                  <td scope="row">
                    <?php echo $i ?>
                  </td>
                  <td>
                    <?php echo $row['tensach'] ?>
                  </td>
                  <td>
                    <?php echo $row['tongso_luongmua'] ?>
                  </td>
                  <td>
                    <?php echo $row['thanhtien'] ?>
                  </td>
                  <td>
                    <a href=""><button type="button" class="btn btn-primary">Hủy Đơn</button></a>
                  </td>
                </tr>
                <?php
              }
            }
            if ($ac == 15) {
              echo '<ul class="pagination">';
              if ($current_page > 1 && $page > 1) {
                echo '<li>
              <a href="index.php?action=giohang&act=lsmuahang&page=' . ($current_page - 1) . '"><button type="button"
                      class="btn btn-lg btn-outline-success"><</button></a>
              </li>';
              }
              for ($i = 1; $i <= $page; $i++) {
                ?>
                <li>
                  <a href="index.php?action=giohang&act=lsmuahang&page=<?php echo "$i"; ?>">
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
              <a href="index.php?action=giohang&act=lsmuahang&page=' . ($current_page + 1) . '"><button type="button"
                      class="btn btn-lg btn-outline-success">></button></a>
              </li>';
              }
              echo '</ul>';
            }
            ?>
          </tbody>
        </table>
      <?php } ?>

    </div>


  </div>
</div>

</div>