<?php
class dangnhap
{


    function logKhachHang($user, $pass)
    {
        $db = new connect();
        $select = "select a.makh, a.tenkh, a.username from khachhang a where username='$user' and matkhau='$pass' and phanquyen=0";
        $result = $db->getInstance($select);
        return $result;
    }

    // function insertSach($tensach, $giamgia, $hinh, $matheloai, $soluotxem, $ngaylap, $mota, $tacgia, $nhaxuatban)
    // {
    //     $db = new connect();
    //     $query = "insert into khachhang (masach, tensach, giamgia, hinh, matheloai, soluotxem, ngaylap, mota, tacgia, nhaxuatban) 
    //     values(NULL, '$tensach','$giamgia', '$hinh', '$matheloai', '$soluotxem', '$ngaylap', '$mota','$tacgia','$nhaxuatban', )";
    //     $result = $db->exec($query);
    //     return $result;
    // }


    function insertSach($tensach, $giamgia, $hinh, $matheloai, $soluotxem, $ngaylap, $mota, $tacgia, $nhaxuatban, $dongia, $soluongton)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=bookstore", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {
            $pdo->beginTransaction(); // Start the transaction

            // Insert data into "hanghoa" table
            $queryHangHoa = $pdo->prepare("INSERT INTO hanghoa (masach, tensach, giamgia, hinh, matheloai, soluotxem, ngaylap, mota, tacgia, nhaxuatban) 
            VALUES(NULL, :tensach, :giamgia, :hinh, :matheloai, :soluotxem, :ngaylap, :mota, :tacgia, :nhaxuatban)");
            $queryHangHoa->bindParam(':tensach', $tensach);
            $queryHangHoa->bindParam(':giamgia', $giamgia);
            $queryHangHoa->bindParam(':hinh', $hinh);
            $queryHangHoa->bindParam(':matheloai', $matheloai);
            $queryHangHoa->bindParam(':soluotxem', $soluotxem);
            $queryHangHoa->bindParam(':ngaylap', $ngaylap);
            $queryHangHoa->bindParam(':mota', $mota);
            $queryHangHoa->bindParam(':tacgia', $tacgia);
            $queryHangHoa->bindParam(':nhaxuatban', $nhaxuatban);
            $queryHangHoa->execute();

            // Get the ID of the inserted record
            $masach = $pdo->lastInsertId();

            // Insert data into "cthanghoa" table
            $queryCtHangHoa = $pdo->prepare("INSERT INTO cthanghoa (idsach, dongia, soluongton) 
            VALUES(NULL, :dongia, :soluongton)");
            $queryCtHangHoa->bindParam(':dongia', $dongia);
            $queryCtHangHoa->bindParam(':soluongton', $soluongton);
            $queryCtHangHoa->execute();

            // Commit the transaction if everything is successful
            $pdo->commit();
            return true;
        } catch (PDOException $e) {
            // Rollback the transaction on error
            $pdo->rollBack();
            // Print or log the error message
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    function getHangHoaAll()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh 
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach 
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllPage($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , 
        a.giamgia, a.mota, a.matheloai, a.nhaxuatban, a.tacgia, b.soluongton, a.ngaylap
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach 
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.mota,
        a.giamgia, c.tenloai, a.tacgia, a.nhaxuatban, b.soluongton, a.hinh, a.ngaylap, b.soluongton
                FROM hanghoa a, cthanghoa b , theloai c
                WHERE a.masach = b.idsach and a.masach=$id and a.matheloai = c.matheloai";
        $result = $db->getInstance($select);
        // $this->updateViewCount($id);
        return $result;
    }

    function updateSach($masach, $tensach, $giamgia, $hinh, $matheloai, $soluotxem, $ngaylap, $mota, $tacgia, $nhaxuatban, $dongia, $soluongton)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=bookstore", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {
            $pdo->beginTransaction(); // Start the transaction

            // Update data in "hanghoa" table
            $queryHangHoa = $pdo->prepare("UPDATE hanghoa SET 
        tensach = :tensach, 
        giamgia = :giamgia, 
        hinh = :hinh, 
        matheloai = :matheloai, 
        soluotxem = :soluotxem, 
        ngaylap = :ngaylap, 
        mota = :mota, 
        tacgia = :tacgia, 
        nhaxuatban = :nhaxuatban 
        WHERE masach = :masach");

            // Bind parameters
            $queryHangHoa->bindParam(':masach', $masach);
            $queryHangHoa->bindParam(':tensach', $tensach);
            $queryHangHoa->bindParam(':giamgia', $giamgia);
            $queryHangHoa->bindParam(':hinh', $hinh);
            $queryHangHoa->bindParam(':matheloai', $matheloai);
            $queryHangHoa->bindParam(':soluotxem', $soluotxem);
            $queryHangHoa->bindParam(':ngaylap', $ngaylap);
            $queryHangHoa->bindParam(':mota', $mota);
            $queryHangHoa->bindParam(':tacgia', $tacgia);
            $queryHangHoa->bindParam(':nhaxuatban', $nhaxuatban);
            $queryHangHoa->execute();

            // Update data in "cthanghoa" table
            $queryCtHangHoa = $pdo->prepare("UPDATE cthanghoa SET 
        dongia = :dongia, 
        soluongton = :soluongton 
        WHERE idsach = :masach");

            // Bind parameters
            $queryCtHangHoa->bindParam(':masach', $masach);
            $queryCtHangHoa->bindParam(':dongia', $dongia);
            $queryCtHangHoa->bindParam(':soluongton', $soluongton);
            $queryCtHangHoa->execute();

            // Commit the transaction if everything is successful
            $pdo->commit();
            return true;
        } catch (PDOException $e) {
            // Rollback the transaction on error
            $pdo->rollBack();
            // Print or log the error message
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Inside dangnhap class
    public function deleteSach($masach)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=bookstore", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {
            $pdo->beginTransaction(); // Start the transaction

            // Delete data from "cthanghoa" table
            $queryCtHangHoa = $pdo->prepare("DELETE FROM cthanghoa WHERE idsach = :masach");
            $queryCtHangHoa->bindParam(':masach', $masach);
            $queryCtHangHoa->execute();

            // Delete data from "hanghoa" table
            $queryHangHoa = $pdo->prepare("DELETE FROM hanghoa WHERE masach = :masach");
            $queryHangHoa->bindParam(':masach', $masach);
            $queryHangHoa->execute();

            // Commit the transaction if everything is successful
            $pdo->commit();
            return true;
        } catch (PDOException $e) {
            // Rollback the transaction on error
            $pdo->rollBack();
            // Print or log the error message
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function insertNews($title, $image, $content)
{
    $pdo = new PDO("mysql:host=localhost;dbname=bookstore", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        $pdo->beginTransaction(); // Start the transaction

        // Insert data into "tintuc" table
        $queryTinTuc = $pdo->prepare("INSERT INTO tintuc (title, image, content) 
        VALUES(:title, :image, :content)");
        $queryTinTuc->bindParam(':title', $title);
        $queryTinTuc->bindParam(':image', $image);
        $queryTinTuc->bindParam(':content', $content);
        $queryTinTuc->execute();

        $pdo->commit();
        return true;
    } catch (PDOException $e) {
        // Rollback the transaction on error
        $pdo->rollBack();
        // Print or log the error message
        echo "Error: " . $e->getMessage();
        return false;
    }
}









}
?>