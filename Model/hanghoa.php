<?php
class hanghoa
{
    //thuộc tính
    //phương thức lấy ra 8 sản phẩm mới nhất
    function getHangHoaNew()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh 
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.giamgia=0
                ORDER BY a.masach DESC 
                LIMIT 8";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaSale()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh ,a.giamgia
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.giamgia!=0 
                ORDER BY a.masach desc 
                LIMIT 8";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaView()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh 
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.soluotxem > 4
                ORDER BY a.soluotxem  desc 
                LIMIT 8";
        $result = $db->getList($select);
        return $result;
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

    function getHangHoaAllMoiVe()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh 
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.giamgia=0
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllSale()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh ,a.giamgia
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.giamgia!=0 
                ORDER BY a.masach desc ";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllView()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh 
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.soluotxem > 1
                ORDER BY a.soluotxem  desc ";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllPageMoive($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach  and a.giamgia=0
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllPage($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach 
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllPageSale($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.giamgia!=0
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllPageView($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.soluotxem > 1
                ORDER BY a.soluotxem DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaTieuThuyet()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='TT'
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllTieuThuyet($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='TT'
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaGiaoKhoa()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='GK'
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllGiaoKhoa($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='GK'
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaThieuNhi()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='TN'
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllThieuNhi($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='TN'
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaLichSu()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='LS'
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllLichSu($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='LS'
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaKinhDoanh()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='KD'
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllKinhDoanh($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='KD'
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaDoiSong()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='DS'
                ORDER BY a.masach DESC";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllDoiSong($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.giamgia, a.matheloai
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.matheloai='DS'
                ORDER BY a.masach DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.mota,
        a.giamgia, c.tenloai, a.tacgia, a.nhaxuatban, b.soluongton, a.hinh
                FROM hanghoa a, cthanghoa b , theloai c
                WHERE a.masach = b.idsach and a.masach=$id and a.matheloai = c.matheloai";
        $result = $db->getInstance($select);
        // $this->updateViewCount($id);
        return $result;
    }

    // function getHangHoaHinhIdCZ($id, $size, $mau)
    // {
    //     $db = new connect();
    //     $select = "SELECT a.hinh FROM cthanghoa a, sizegiay b, mausac c
    //     WHERE a.idmau = c.idmau AND a.idsize = b.idsize AND a.idhanghoa = '$id' AND b.size = '$size' AND c.mausac = '$mau'";
    //     $result = $db->getInstance($select);
    //     return $result;
    // }

    function timkiemSanPham($tensach)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.matheloai , a.giamgia
        FROM hanghoa a, cthanghoa b WHERE a.masach = b.idsach and a.tensach like '%$tensach%' 
        order by a.masach";
        $result = $db->getList($select);
        return $result;
    }

    // function timkiemSanPham($tensach)
    // {
    //     // b1: kết nối CSDL
    //     $db = new connect();

    //     // b2: chia nhỏ các từ khóa tìm kiếm
    //     $keywords = explode(' ', $tensach);

    //     // b3: xây dựng điều kiện tìm kiếm
    //     $conditions = [];
    //     foreach ($keywords as $keyword) {
    //         $conditions[] = "a.tensach LIKE '%$keyword%'";
    //     }

    //     // b4: tạo truy vấn
    //     $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh , a.matheloai , a.giamgia
    // FROM hanghoa a, cthanghoa b WHERE a.masach = b.idsach AND " . implode(' AND ', $conditions) . " 
    // ORDER BY a.masach";

    //     // b5: thực hiện truy vấn
    //     $result = $db->getList($select);

    //     return $result;
    // }


    function getMaxMin()
    {
        // Bước 1: Kết nối CSDL
        $db = new connect(); // Chú ý: connect() cần phải là một class hoặc function để thực hiện kết nối CSDL

        // Bước 2: Truy vấn để lấy giá trị lớn nhất và nhỏ nhất
        $select = "SELECT MAX(dongia) AS max, MIN(dongia) AS min FROM cthanghoa";
        $result = $db->getList($select); // Giả sử getList() là phương thức trong class connect để thực hiện truy vấn và trả về kết quả
        return $result;
    }

    function locTheoGia($min, $max)
    {
        // Bước 1: Kết nối CSDL
        $db = new connect(); // Chú ý: connect() cần phải là một class hoặc function để thực hiện kết nối CSDL

        // Bước 2: Truy vấn để lấy giá trị lớn nhất và nhỏ nhất
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh, a.giamgia
        FROM hanghoa a, cthanghoa b 
        WHERE a.masach = b.idsach and b.dongia>=$min and b.dongia<=$max
        ORDER BY b.dongia Asc";
        $result = $db->getList($select); // Giả sử getList() là phương thức trong class connect để thực hiện truy vấn và trả về kết quả
        return $result;
    }

    function getGiaTangDan()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.giamgia!=0  
                ORDER BY b.dongia asc";
        $result = $db->getList($select);
        return $result;
    }

    function getGiaGiamDan()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh
                FROM hanghoa a, cthanghoa b 
                WHERE a.masach = b.idsach and a.giamgia!=0  
                ORDER BY b.dongia desc";
        $result = $db->getList($select);
        return $result;
    }

    function getLuotXemTangDan()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh
        FROM hanghoa a, cthanghoa b 
        WHERE a.masach = b.idsach
        ORDER BY a.soluotxem ASC;";
        $result = $db->getList($select);
        return $result;
    }

    function getLuotXemGiamDan()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT a.masach, a.tensach, a.soluotxem, b.dongia, a.hinh
        FROM hanghoa a, cthanghoa b 
        WHERE a.masach = b.idsach
        ORDER BY a.soluotxem DESC;";
        $result = $db->getList($select);
        return $result;
    }

    function tangView($id)
    {
        $db = new connect;
        $query = "UPDATE hanghoa SET soluotxem = soluotxem + 1 WHERE masach = :id";
        $stmt = $db->execP($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }








}
?>