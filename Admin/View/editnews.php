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
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <!-- Custom styles -->
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
    <div id="content">
        <form action="index.php?action=edit&act=update_news" method="post">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Thêm Tin Tức </h2>
                    <div class="form-group">
                        <label for="">Tiêu đề bài viết</label>
                        <input type="text" name="title" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $title ?>">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Hình:</label>
                                <input type="file" name="image" class="form-control" onchange="previewImage(this)">
                            </div>
                            <div class="col-md-6">
                                <img id="imagePreview" src="../Content/img/<?php echo $image ?>" alt=""
                                    style="width:100px">
                            </div>
                        </div>
                    </div>

                    <textarea name="content" style="height: 500px;"><?php echo $content ?></textarea>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('textarea'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                    <button type="submit" class="btn btn-warning mt-2" value="Submit">Cập Nhật</button>

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
<script>
    // Function to update the image preview
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById('imagePreview').src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>