<div class="table-responsive">
  <?php
  if (!isset($_SESSION['makh'])):
    echo '<script> alert("Bạn Phải Đăng Nhập!");</script>';
    echo '<meta http-equiv="refresh" content="0;url=dangnhap.php?action=dangnhap"/>';
    ?>
  <?php else: ?>
    <form action="" method="post">
      <div class="card">
        <div class="card-header">
          <h3><i>Hóa Đơn</i></h3>
        </div>
        <div class="card-body">
          <table class="table" border="1">
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
              <thead>
                <tr>
                  <th>Stt</th>
                  <th>Mã đơn hàng</th>
                  <th>Khách hàng</th>
                  <th>Địa chỉ</th>
                  <th>Điện thoại</th>
                  <th>Tên sách</th>
                  <th>Số lượng</th>
                  <th>Đơn giá</th>
                  <th>Thời gian</th>
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
                      <?php echo $d; ?>
                    </td>
                    <td>
                      <?php echo $mashd; ?>
                    </td>
                    <td>
                      <?php echo $tenkh; ?>
                    </td>
                    <td>
                      <?php echo $dc; ?>
                    </td>
                    <td>
                      <?php echo $sodt; ?>
                    </td>
                    <td>
                      <?php echo $set['tensach']; ?>
                    </td>
                    <td>
                      <?php echo $set['soluongmua']; ?>
                    </td>
                    <td>
                      <?php echo number_format($set['dongia']); ?>
                    </td>
                    <td>
                      <?php echo $ngay; ?>
                    </td>
                  </tr>
                <?php endwhile; ?>
                <tr>
                  <th colspan="8">Tổng Tiền</th>
                  <th>
                    <?php $gh = new giohang();
                    echo $gh->sub_total();
                    ?><sup><u>đ</u></sup>
                  </th>
                </tr>
              </tbody>
            </table>
            <!-- <?php } ?> -->

          <h6 id="changing-text">Cảm ơn đã đặt hàng! Chúng tôi sẽ giao hàng cho bạn sau 3 - 5 ngày tới</h6>
        </div>
      </div>
    </form>
    <a href="index.php">
      <button type="button" class="btn offset-md-5 cart">Quay Về Trang Chủ</button>
    </a>
  <?php endif; ?>
</div>
</div>