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
            margin-right: -200px;
        }
    </style>
</head>

<body>

    <div id="content">
        <form action="index.php?action=new&act=addnew_action" method="post">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Thêm Tin Tức </h2>
                    <div class="form-group">
                        <label for="">Tiêu đề bài viết</label>
                        <input type="text" name="title" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Hình:</label>
                                <input type="file" name="image" class="form-control" onchange="previewImage(this)">
                            </div>
                            <div class="col-md-6">
                                <img id="imagePreview" src="../Content/img/<?php echo $hinh ?>" alt=""
                                    style="width:100px">
                            </div>
                        </div>
                    </div>

                    <form action="submit-form.php" method="post">
                        <textarea name="content" style="height: 500px;"></textarea> <!-- Set the desired height here -->
                        <script>
                            ClassicEditor
                                .create(document.querySelector('textarea')) // Replace the textarea with a rich text editor
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                        <button type="submit" class="btn btn-warning mt-2" value="Submit">Thêm Tin</button>
                        <!-- <input type="submit" value="Submit"> -->
                    </form>
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