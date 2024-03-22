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
  <style>
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
    }

    .form-group {
      background-color: rgba(255, 255, 255, 0.5);
    }
  </style>
</head>

<body>
  <div
    style="background-image: url(./Content/img/h3.png); width: 100%; height: 750px; background-size: cover; background-repeat: no-repeat;">
    <div style="padding-top: 100px;"></div>
    <div>
      <h1 class="text-center mb-5" style="color: #fff; text-shadow: 1px 1px 2px whitesmoke; "><span
          style="background-color: rgba(0, 0, 0, 0.8)">Đăng Nhập Tài Khoản</span></h1>
      <div class="col-md-6 offset-md-3"
        style="width: 1000px; height: 330px; background-color: rgba(0, 0, 0, 0.5); border-radius: 5px;">
        <form action="index.php?action=dangnhap&act=dangnhap_action" method="post">
          <div class="p-4 ">
            <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
              <label for="">Tên Đăng Nhập:</label>
              <input type="text" name="txtusername" id="" class="form-control" placeholder="Tên đăng nhập"
                aria-describedby="helpId" autofocus="" required="">
              <small id="helpId" class="text-danger"></small>
            </div>
            <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
              <label for="">Mật Khẩu:</label>
              <input type="password" name="txtpassword" id="" class="form-control" placeholder="Mật khẩu"
                aria-describedby="helpId" autofocus="" required="">
              <small id="helpId" class="text-danger"></small>
            </div>
          </div>
          <button type="submit" class="btn btn-block offset-4" name="submit"
            style="margin-top: -10px ;margin-bottom: 10px  ; background-color: #498374; color: white; font-weight: bold; width:200px;">Đăng
            Nhập</button>
          <div style="color:#fff; text-align: center;">
            <span style="background-color: rgba(0, 0, 0, 0.8)">Chưa có tài khoản! <a href="dangky.php?action=dangky"
                style="color: #498374; text-decoration: none; ">Đăng Ký</a> ngay!</span>
          </div>
          <div class="">
            <div class="col-md-4">
              <a href="index.php?action=forget" style="text-decoration: none; color: #498374 ; ">Quên mật khẩu?</a>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
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