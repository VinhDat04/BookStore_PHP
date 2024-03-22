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

<body>

  <div id="sidebar">
    <h2>Dashboard</h2>
    <a href="#"><i class="fas fa-home"></i> Home</a>
    <a href="index.php?action=chart"><i class="fas fa-chart-bar"></i> Charts</a>
    <a href="index.php?action=show"><i class="fas fa-table"> Tables</i></a>
    <a href="index.php?action=new"><i class="fas fa-newspaper"> Tin Tức</i></a>
    <a href="#"><i class="fas fa-cog"></i> Settings</a>
  </div>

  <div id="content">

    <div class="card mt-3">
      <div class="card-header info">
        QUẢN LÝ SÁCH
      </div>
      <div class="card-body">
        <form action="index.php?action=add&act=add_action" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tên sách</label>
                <input type="text" name="txttensach" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Giảm giá:</label>
                <input type="text" name="txtgiamgia" class="form-control">
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
                  <option value="TT">Tiểu Thuyết</option>
                  <option value="GK">Sách Giáo Khoa</option>
                  <option value="TN">Thiếu Nhi</option>
                  <option value="LS">Lịch Sử</option>
                  <option value="KD">Kinh Doanh</option>
                  <option value="DS">Đời Sống</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Số lượt xem:</label>
                <input type="text" name="txtsoluotxem" class="form-control">
              </div>
            </div> <!-- Close the first column here -->

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Ngày lập:</label>
                <input type="date" name="txtngaylap" class="form-control">
              </div>

              <div class="form-group">
                <label for="">Tác giả:</label>
                <input type="text" name="txttacgia" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Nhà xuất bản:</label>
                <input type="text" name="txtnhaxuatban" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Đơn giá:</label>
                <input type="text" name="txtdongia" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Số lượng:</label>
                <input type="text" name="txtsoluongton" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Mô tả</label>
            <textarea class="form-control" name="txtmota" id="" rows="3"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Lưu</button>
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
