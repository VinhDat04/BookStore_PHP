<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Custom styles -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    #sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 20px;
      color: white;
    }

    #sidebar a {
      padding: 16px;
      font-size: 18px;
      color: white;
      display: block;
      transition: 0.3s;
    }

    #sidebar a:hover {
      background-color: #5a5e63;
      color: white;
      text-decoration: none;
    }

    #content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
<?php
$masach = "";
$tensach = "";
$mota = "";
$dongia = "";
$giamgia = "";
$tacgia = "";
$nhaxuatban = "";
$tentheloai = "";
$hinh = "";
$slton = "";
$soluotxem = "";
$ngaylap = "";
$soluongton = "";

// điều phối qua view/sanphamchitiet cùng với id
if (isset($_GET['id'])) {
  $id = $_GET['id']; //ví dụ mã hh = 22 thì view đòi hỏi các thông tin của id = 22
  $hh = new dangnhap();
  $sp = $hh->getHangHoaId($id);

  // Assign values if the record is found
  $masach = $sp['masach'] ?? "";
  $tensach = $sp['tensach'] ?? "";
  $mota = $sp['mota'] ?? "";
  $dongia = $sp['dongia'] ?? "";
  $giamgia = $sp['giamgia'] ?? "";
  $tacgia = $sp['tacgia'] ?? "";
  $nhaxuatban = $sp['nhaxuatban'] ?? "";
  $tentheloai = $sp['tenloai'] ?? "";
  $hinh = $sp['hinh'] ?? "";
  $slton = $sp['soluongton'] ?? "";
  $soluotxem = $sp['soluotxem'] ?? "";
  $ngaylap = $sp['ngaylap'] ?? "";
  $soluongton = $sp['soluongton'] ?? "";


}
?>

<body>


  <div id="content">

    <div class="card mt-3">
      <div class="card-header info">
        EDIT
      </div>
      <div class="card-body">
        <form action="index.php?action=edit&act=update_action" method="post">
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="">Id sách</label>
                <input type="text" name="txtmasach" class="form-control" value="<?php echo $masach ?>">
              </div>
              <div class="form-group">
                <label for="">Tên sách</label>
                <input type="text" name="txttensach" class="form-control" value="<?php echo $tensach ?>">
              </div>
              <div class="form-group">
                <label for="">Giảm giá:</label>
                <input type="text" name="txtgiamgia" class="form-control" value="<?php echo $giamgia ?>">
              </div>
              <div class="form-group">
                <img id="imagePreview" src="../Content/img/<?php echo $hinh ?>" alt="" style="width:50px">
                <br>
                <label for="">Hình:</label>
                <input type="file" name="txthinh" class="form-control" onchange="previewImage(this)">
              </div>

              <div class="form-group">
                <label for="">Thể loại</label>
                <select class="form-control" name="txtmatheloai" id="">
                  <option value="TT" <?php if ($tentheloai == "Tiểu Thuyết")
                    echo "selected"; ?>>Tiểu Thuyết</option>
                  <option value="GK" <?php if ($tentheloai == "Sách Giáo Khoa")
                    echo "selected"; ?>>Sách Giáo Khoa
                  </option>
                  <option value="TN" <?php if ($tentheloai == "Thiếu Nhi")
                    echo "selected"; ?>>Thiếu Nhi
                  </option>
                  <option value="LS" <?php if ($tentheloai == "Đời Sống")
                    echo "selected"; ?>>Lịch Sử
                  </option>
                  <option value="KD" <?php if ($tentheloai == "Lịch Sử")
                    echo "selected"; ?>>Kinh Doanh
                  </option>
                  <option value="DS" <?php if ($tentheloai == "Đời Sống")
                    echo "selected"; ?>>Đời Sống
                  </option>

                </select>

              </div>
              <div class="form-group">
                <label for="">Số lượt xem:</label>
                <input type="text" name="txtsoluotxem" class="form-control" value="<?php echo $soluotxem ?>">
              </div>
            </div> <!-- Close the first column here -->

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Ngày lập:</label>
                <input type="date" name="txtngaylap" class="form-control" value="<?php echo $ngaylap ?>">
              </div>

              <div class="form-group">
                <label for="">Tác giả:</label>
                <input type="text" name="txttacgia" class="form-control" value="<?php echo $tacgia ?>">
              </div>
              <div class="form-group">
                <label for="">Nhà xuất bản:</label>
                <input type="text" name="txtnhaxuatban" class="form-control" value="<?php echo $nhaxuatban ?>">
              </div>
              <div class="form-group">
                <label for="">Đơn giá:</label>
                <input type="text" name="txtdongia" class="form-control" value="<?php echo $dongia ?>">
              </div>
              <div class="form-group">
                <label for="">Số lượng:</label>
                <input type="text" name="txtsoluongton" class="form-control" value="<?php echo $soluongton ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Mô tả</label>
            <textarea class="form-control" name="txtmota" id="" rows="3"><?php echo $mota ?></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="index.php?action=show" class="btn btn-danger">Danh sách</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>
<script>
  // Function to update the image preview
  function previewImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        document.getElementById('imagePreview').src = e.target.result;
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
