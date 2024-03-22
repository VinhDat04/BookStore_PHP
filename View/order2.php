<div class="table-responsive">
  <?php
  if (!isset($_SESSION['makh'])):
    echo '<script> alert("Bạn Phải Đăng Nhập!");</script>';
    echo '<meta http-equiv="refresh" content="0;url=dangnhap.php?action=dangnhap"/>';
    ?>
  <?php else: ?>
    <h3 style="text-align: center; ">Cảm Ơn Bạn Đã Mua Hàng</h3>
    <form action="" method="post">
      <table class="table table-bordered" border="0">
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

          <tr>
            <td colspan="4">
              <h2 style="color: red;">HÓA ĐƠN</h2>
            </td>
          </tr>
          <tr>
            <td colspan="2">Số Hóa đơn:
              <?php echo $mashd; ?>
            </td>
            <td colspan="2"> Ngày lập:
              <?php echo $ngay; ?>
            </td>
          </tr>
          <tr>
            <td colspan="2">Họ và tên:
              <?php echo $tenkh; ?>
            </td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="2">Địa chỉ:
              <?php echo $dc; ?>
            </td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="2">Số điện thoại:
              <?php echo $sodt; ?>
            </td>
            <td colspan="2"></td>
          </tr>
        </table>
        <!-- Thông tin sản phầm -->
        <table class="table table-bordered">
          <thead>

            <tr class="table-success">
              <th>Số TT</th>
              <th>Thông Tin Sản Phẩm</th>
              <th>Tùy Chọn Của Bạn</th>
              <th>Giá</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $j = 0;
            $sp = $hd->getHangHoaHD($mashd);
            while ($set = $sp->fetch()):
              $j++;
              ?>
              <tr>
                <td>
                  <?php echo $j; ?>
                </td>
                <td>
                  <?php echo $set['tensach']; ?>
                </td>
                <td>Đơn Giá:
                  <?php echo number_format($set['dongia']); ?> - Số Lượng:
                  <?php echo $set['soluongmua']; ?><br />
                </td>
              </tr>
            <?php endwhile; ?>
            <tr>
              <td colspan="3">
                <b>Tổng Tiền</b>
              </td>
              <td style="float: right;">
                <b>
                  <?php $gh = new giohang();
                  echo $gh->sub_total();
                  ?><sup><u>đ</u></sup>
                </b>
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>
    </form>
    <a href="index.php">
      <button type="button" class="btn offset-md-5 cart">Quay Về Trang Chủ</button>
    </a>
  <?php endif; ?>
</div>
</div>