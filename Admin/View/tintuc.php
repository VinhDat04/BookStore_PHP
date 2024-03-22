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
                <p>Admin | <a href="" class="logout">Logout</a></p>
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
    <?php
    $ac = 1;
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'new') {
            $ac = 1;
        }
    }
    ?>
    <?php
    //xác định có bao nhiêu sản phẩm, select count(*)
    $hh = new tintuc();
    if ($ac == 1) {
        $count = $hh->getTinTuc()->rowCount(); //14
    }

    //b2 xác định limit
    $limit = 4;
    //b3 tính ra là có bao nhiêu trang
    $trang = new page();
    $page = $trang->findPage($count, $limit); //2trang
//b4: tính ra start
    $start = $trang->findStart($limit); //8
//b5 tạo biến chứa trang hiện tại
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    ?>
    <div id="content">
        <div class="card">
            <div class="card-body">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Hình ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $hh = new tintuc();
                        if ($ac == 1) {
                            // $result = $hh->getHangHoaAll(); //lấy được bẳng 14 sp
                            $result = $hh->getTinTucPage($start, $limit); //sp được phân trang
                        }
                        while ($set = $result->fetch()) {
                            $id = $set['id']; // Assuming 'id' is the key for the id value in the $set array
                            $image = $set['image']; // Assuming 'image' is the key for the image value in the $set array
                            $title = $set['title']; // Assuming 'title' is the key for the title value in the $set array
                            ?>
                            <tr>
                                <td scope="row">
                                    <?php echo $id ?>
                                </td>
                                <td>
                                    <img src="../content/img/<?php echo $image ?>" alt="" style="width:50px; height:auto">
                                </td>
                                <td>
                                    <?php echo $title ?>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6" style="margin-right: -10px; ">
                                            <a href="index.php?action=edit&act=editnews&id=<?php echo $set['id'] ?>">
                                                <button class="btn">
                                                    <span class="badge badge-primary">Sửa</span>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="">
                                                <button class="btn">
                                                    <span class="badge badge-danger">Xóa</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="index.php?action=new&act=addnew"><button type="button" class="btn btn-primary">Thêm tin
                        tức</button></a>
            </div>
        </div>
        <ul class="pagination">
            <?php
            if ($ac == 1) {
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                <a href="index.php?action=new&page=' . ($current_page - 1) . '"><button type="button"
                        class="btn btn-lg btn-outline-success"><</button></a>
                </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
                    <li>
                        <a href="index.php?action=new&page=<?php echo $i; ?>">
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
                <a href="index.php?action=new&page=' . ($current_page + 1) . '"><button type="button"
                        class="btn btn-lg btn-outline-success">></button></a>
                </li>';
                }
            }
            ?>
        </ul>
    </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>