<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<?php
// điều phối qua view/sanphamchitiet cùng với id
if (isset($_GET['id'])) {
    $id = $_GET['id']; //ví dụ mã hh = 22 thì view đòi hỏi các thoogn tin của id = 22
    $hh = new hanghoa();
    $sp = $hh->getHangHoaId($id);
    $tensach = $sp['tensach'];
    $mota = $sp['mota'];
    $dongia = $sp['dongia'];
    $giamgia = $sp['giamgia'];
    $tacgia = $sp['tacgia'];
    $nhaxuatban = $sp['nhaxuatban'];
    $tentheloai = $sp['tenloai'];
    $hinh = $sp['hinh'];
    $slton = $sp['soluongton'];
}
?>
<?php
if (empty($id)) {
    echo '';
} else { ?>
    <section>
        <div class="row">
            <div class="col-lg-12 text-left">
                <div style="border-bottom: 1px solid #498374    ; width: 1200px; padding-top: 0px; ">
                    <button type="button" class="btn DM_button" style="color:#fff; font-weight:bold ">Chi Tiết Sản
                        Phẩm</button>
                </div>
            </div>

        </div>
        <article class="col-12">
            <!-- <div class="card"> -->
            <div class="container-fliud">
                <div class="wrapper row">
                    <form action="index.php?action=giohang&act=giohang_action" method="post">
                        <div class="row">
                            <div class="col-md-4">

                                <div>
                                    <img src="./Content/img/<?php echo $hinh; ?>" alt="" width="auto" height="420px">
                                    <!--  -->
                                </div>
                            </div>
                            <div class="col-md-8 mt-3">
                                <input type="hidden" name="masach" value="<?php echo $id; ?>" />
                                <h2 style="text-shadow: 1px 1px 2px #444; ">
                                    <i>
                                        <?php echo $tensach; ?>
                                    </i>
                                </h2>
                                <h4>Giá:
                                    <?php if ($giamgia == 0) { ?>
                                        <span style="font-size:130%; color:red;">
                                            <?php echo number_format($dongia); ?>đ
                                        </span>
                                    <?php } else { ?>
                                        <span style="font-size:130%; color:red;">
                                            <?php echo number_format($giamgia); ?>đ<strike style="font-size:80%; color:#444;">
                                                <?php echo number_format($dongia); ?>đ
                                            </strike>
                                        </span>
                                    <?php } ?>
                                </h4>

                                <p><b>Thể Loại:</b> <i>
                                        <?php echo $tentheloai ?>
                                    </i></p>
                                <p><b>Tác Giả:</b> <i>
                                        <?php echo $tacgia ?>
                                    </i></p>
                                <p><b>Nhà Xuất Bản:</b> <i>
                                        <?php echo $nhaxuatban ?>
                                    </i></p>
                                <p><i>
                                        <?php echo $mota; ?>
                                    </i></p>
                                <p><b>SL Tồn:</b>
                                    <?php echo $slton; ?>
                                </p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for=""><b>Số Lượng</b></label>
                                            <input min="1" value="1" type="number" name="soluong" id="soluong"
                                                class="form-control btn-lg" placeholder="" aria-describedby="helpId"
                                                min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-lg "
                                            style="margin-top:32px; margin-left: -25px  ;width: 50px; background-color: #498374 ; color: #fff; "
                                            onclick="Tang()">+</button>
                                        <button type="button" class="btn btn-lg"
                                            style="margin-top:32px; width: 50px;background-color: #498374 ; color: #fff; "
                                            onclick="Giam()">-</button>
                                    </div>
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-lg btn-warning"
                                            style="margin-top:32px;color: #444; margin-left: -80px " id="myButton">
                                            Thêm Vào Giỏ
                                        </button>
                                        <!-- <a href="index.php?action=thanhtoan"><button type="button"
                                                class="btn btn-lg btn-success " style="margin-top:32px ;color: #fff;">Mua
                                                Ngay</button>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->
        </article>
    </section>
    <?php
    if (isset($_SESSION['makh'])):
        ?>
        <p class="float-left"><b>BÌnh luận </b></p>
        <hr>
        </div>
        <form action="index.php?action=binhluan" method="post">
            <div class="row">

                <input type="hidden" name="txtmasach" value="<?php echo $id; ?>" />
                <img src="Content/img/people.png" width="50px" height="50px" ; />
                <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
                    placeholder="Thêm bình luận">  </textarea>
                <input type="submit" class="btn" id="submitButton"
                    style="float: right; background-color: #498374; color: #fff  ; " value="Bình Luận" />

            </div>

        </form>
        <div class="row">
            <p class="float-left"><b>Các bình luận</b></p>
            <hr>
            <?php
            $bl = new binhluan();
            $noidung = $bl->selectBinhLuan($id);
            while ($set = $noidung->fetch()):
                ?>
                <div class="col-12 mb-3">
                    <div class="row">

                        <p>
                            <img src="Content/img/avatar1.png" alt="" width="30px" height="30px">
                            <?php echo '<b>' . $set['username'] . ': </b>'; ?>
                            <br>
                            <span class="ml-5">
                                <?php echo $set['content'] ?>
                            </span>
                        </p>

                    </div>
                </div>
            <?php endwhile ?>
        </div>
        <div class="row">
            <br />
        </div>
    <?php endif; ?>
    </div>
    </section>

    <script>
        function Tang() {
            var soLuong = document.getElementById('soluong');
            soLuong.value = parseInt(soLuong.value) + 1;
        }
        function Giam() {
            var soLuong = document.getElementById('soluong');
            if (parseInt(soLuong.value) > 1) {
                soLuong.value = parseInt(soLuong.value) - 1;
            }
        }


    </script>
<?php } ?>