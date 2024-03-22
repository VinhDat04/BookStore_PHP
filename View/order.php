<div class="table-responsive">
  <?php
  if (!isset($_SESSION['makh'])):
    echo '<script> alert("Bạn Phải Đăng Nhập!");</script>';
    echo '<meta http-equiv="refresh" content="0;url=dangnhap.php?action=dangnhap"/>';
    ?>
  <?php else: ?>
    <form action="" method="post">
      <div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; " class="mb-3">
        <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Hóa Đơn Mua Hàng</button>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h4 style="color:red">Thông Tin Khách Hàng</h4>
          <?php
          if (isset($_SESSION['masohd'])) {
            $mashd = $_SESSION['masohd'];
            $hd = new hoadon();
            $khhd = $hd->getKhachHangHD($mashd);
            $tenkh = $khhd['tenkh'];
            $dc = $khhd['diachi'];
            $sodt = $khhd['sodienthoai'];
            $ngay = $khhd['ngaydat'];

            ?>
            <div class="form-group">
              <label for="">Tên Khách Hàng:</label>
              <input type="text" name="" value="<?php echo $tenkh ?>" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Địa Chỉ:</label>
              <input type="text" value="<?php echo $dc ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Số Điện Thoại:</label>
              <input type="text" value="<?php echo $sodt ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Ngày Đặt:</label>
              <input type="text" value="<?php echo $ngay ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
            </div>
          <?php } ?>
        </div>
        <div class="col-md-6">
          <div class="card" style="border: 2px solid red;">
            <div class="card-body">
              <h4 style="color:red">Đơn Hàng Của Bạn</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th>Sản Phẩm</th>
                    <th></th>
                    <th>Thành Tiền</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $d = 0;
                  $sp = $hd->getHangHoaHD($mashd);
                  while ($set = $sp->fetch()):
                    $d++;
                    ?>
                    <tr>
                      <td scope="row">
                        <?php echo $set['tensach'] ?>
                      </td>
                      <td> X
                        <?php echo $set['soluongmua']; ?>
                      </td>
                      <td>
                        <?php
                        echo number_format($set['dongia']); ?>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                  <tr>
                    <th scope="row">Tổng Tiền</th>
                    <th></th>
                    <th>
                      <?php $gh = new giohang();
                      echo $gh->sub_total();
                      ?><sup><u>đ</u></sup>
                    </th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </form>
    <a href="index.php">
      <button type="button" class="btn offset-md-5 cart">Quay Về Trang Chủ</button>
    </a>
  <?php endif; ?>
</div>
</div>