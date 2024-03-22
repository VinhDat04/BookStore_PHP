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

</head>

<body>

    <div id="sidebar">
        <h6 class="text-center">Admin Page</h6>
        <div class="row">
            <div class="col-md-4">
                <img src="../Content/img/people.png" alt="" style="">
            </div>
            <div class="col-md-8">
                <p>Admin | <a href="index.php?action=dangxuat" class="logout">Logout</a></p>
            </div>
        </div>
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="index.php?action=show"><i class="fas fa-table"> Quản lý sách</i></a>
        <a href="index.php?action=new"><i class="fas fa-newspaper"> Quản lý tin tức</i></a>
        <a href="index.php?action=new"><i class="fas fa-box-open"> Quản lý đơn hàng</i></a>
        <a href="index.php?action=new"><i class="fa fa-user-plus"> Quản lý nhân viên</i></a>
        <a href=" index.php?action=new"><i class="fas fa-user-check"> Quản lý người dùng</i></a>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
        <!-- <a href="index.php?action=chart"><i class="fas fa-chart-bar"></i> Charts</a> -->
    </div>

    <div id="content">
        <h2>Main Content</h2>
        <p>This is the main content of your dashboard. You can add various sections, charts, and tables here.</p>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>