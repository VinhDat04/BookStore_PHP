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
</head>

<body>
    <?php
    // điều phối qua view/sanphamchitiet cùng với id
    if (isset($_GET['id'])) {
        $id = $_GET['id']; //ví dụ mã hh = 22 thì view đòi hỏi các thông tin của id = 22
        $hh = new tintuc();
        $sp = $hh->getTinTucId($id);

        // Assign values if the record is found
        $id = $sp['id'] ?? "";
        $title = $sp['title'] ?? "";
        $image = $sp['image'] ?? "";
        $content = $sp['content'] ?? "";
    }
    ?>
    <div class="container">
        <p>
            <?php echo $content; ?>
        </p>
        <div>
            <h4>Xem Thêm</h4>
            <div class="row">
                <?php
                $tt = new tintuc();
                $result = $tt->getDeXuatTinTuc($id);
                while ($set = $result->fetch()) {
                    ?>
                    <div class="col-md-3">
                        <a href="chitietnews.php?action=sanpham&act=chitietnew&id=<?php echo $set['id'] ?>"><img
                                src="./content/img/<?php echo $set['image']; ?>" alt="" style="width:100%"></a>
                        <br>
                        <a href="chitietnews.php?action=sanpham&act=chitietnew&id=<?php echo $set['id'] ?>">
                            <?php echo $set['title'] ?>
                        </a>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
        <a href="index.php" class="text-center">Quay lại trang chủ>></a>
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