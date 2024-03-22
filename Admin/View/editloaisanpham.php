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
      margin-left: 50px;
      padding: 20px;
    }
  </style>
</head>

<body>

  <div id="sidebar">
    <h2>Dashboard</h2>
    <a href="index.php?action=show"><i class="fas fa-home"></i> Home</a>
    <a href="#"><i class="fas fa-chart-bar"></i> Charts</a>
    <div class="dropdown">
      <a class="dropdown-toggle" href="#" role="button" id="tablesDropdown" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <i class="fas fa-table"></i> Tables
      </a>
      <div class="dropdown-menu" aria-labelledby="tablesDropdown" style="background-color: #343a40; ">
        <a class="dropdown-item" href="index.php?action=add">Add</a>
        <a class="dropdown-item" href="index.php?action=edit">Edit</a>
        <a class="dropdown-item" href="#">Delete</a>
      </div>
    </div>
    <a href="#"><i class="fas fa-cog"></i> Settings</a>
  </div>

  <div id="content">
    <form name="frmloaihang" action="" method="post">
      <div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
            <thead>
              <tr class="bg-info">
                <th scope="col"></th>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col">idMenu</th>
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row"><input type="checkbox" id="chonX" name="chonX" value=""></th>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="" class="btn btn-warning">Xoá</a>
                  <a href="" class="btn btn-info">Sửa</a>
                </td>
              </tr>

              <input type="hidden" name="xoa" value="" />
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <a href="" class="btn btn-info">Chọn tất cả</a>
          <button class="btn btn-info" onclick="">Chọn tất cả(javascript)</button>
          <a href="" class="btn btn-info">Bỏ chọn</a>
          <a href="" class="btn btn-info">Xóa danh mục đã chọn</a>
          <button class="btn btn-info" onclick="">Xóa danh mục đã chọn test</button>
          <!-- <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button> -->
          <a href="" class="btn btn-info">Thêm mới</a>
        </div>
      </div>
    </form>

  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>