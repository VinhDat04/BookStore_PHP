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
                    style="background-color: rgba(0, 0, 0, 0.8)">Đăng Ký Tài Khoản</span></h1>
            <div class="col-md-8 offset-md-2"
                style="width: 1000px; height: 450px; background-color: rgba(0, 0, 0, 0.5); border-radius: 5px;">
                <form action="index.php?action=dangky&act=dangky_action" method="post" class="row">
                    <div class="p-4 col-md-6">
                        <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
                            <label for="">Họ & Tên:</label>
                            <input type="text" name="txttenkh" id="" class="form-control" placeholder="Họ và tên"
                                aria-describedby="helpId" autofocus="" required="">
                            <small id="helpId" class="text-danger"></small>
                        </div>
                        <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
                            <label for="">Địa Chỉ:</label>
                            <input type="text" name="txtdiachi" id="" class="form-control" placeholder="Địa chỉ"
                                aria-describedby="helpId" autofocus="" required="">
                            <small id="helpId" class="text-danger"></small>
                        </div>
                        <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
                            <label for="">Email:</label>
                            <input type="text" name="txtemail" id="" class="form-control" placeholder="Email"
                                aria-describedby="helpId" autofocus="" required="">
                            <small id="helpId" class="text-danger"></small>
                        </div>
                        <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
                            <label for="">Số Điện Thoại:</label>
                            <input type="text" name="txtsodt" id="" class="form-control" placeholder="Số điện thoại"
                                aria-describedby="helpId" autofocus="" required="">
                            <small id="helpId" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="p-4 col-md-6">
                        <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
                            <label for="">Tên Đăng Nhập:</label>
                            <input type="text" name="txtusername" id="" class="form-control" placeholder="Tên đăng nhập"
                                aria-describedby="helpId" autofocus="" required="">
                            <small id="helpId" class="text-danger"></small>
                        </div>
                        <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
                            <label for="">Mật Khẩu:</label>
                            <input type="password" name="txtpass" id="" class="form-control" placeholder="Mật khẩu"
                                aria-describedby="helpId" autofocus="" required="">
                            <small id="helpId" class="text-danger"></small>
                        </div>
                        <div class="form-group" style="background-color: rgba(0, 0, 0, 0); color: white;">
                            <label for="">Nhập Lại Mật Khẩu:</label>
                            <input type="password" name="txtrepass" id="" class="form-control"
                                placeholder="Nhập lại mật khẩu" aria-describedby="helpId" autofocus="" required="">
                            <small id="helpId" class="text-danger"></small>
                        </div>
                        <button type="submit" class="btn btn-block" name="submit"
                            style="margin-top: 48px; background-color: #498374; color: white; font-weight: bold;">Đăng
                            ký</button>

                    </div>
                </form>
                <div style="color:#fff; text-align: center;">
                    <span style="background-color: rgba(0, 0, 0, 0.8)">Đã có tài khoản! <a
                            href="dangnhap.php?action=dangnhap"
                            style="color: #498374; text-decoration: none; font-weight: bold; ">Đăng Nhập</a>
                        ngay!</span>
                </div>
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