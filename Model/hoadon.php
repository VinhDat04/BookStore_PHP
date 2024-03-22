<?php
class hoadon
{
    function insertHoaDon($makh)
    {
        $db = new connect;
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "insert into hoadon(masohd,makh,ngaydat, tongtien) values (Null,$makh,'$ngay',0)";
        $db->exec($query);
        $select = "select masohd from hoadon order by masohd desc limit 1";
        $sohd = $db->getInstance($select);
        return $sohd[0];

    }
    function insertCTHoaDon($masohd, $masach, $soluongmua, $thanhtien)
    {
        $db = new connect;
        $query = "insert into cthoadon(masohd,masach,soluongmua,thanhtien, tinhtrang) values($masohd,$masach,$soluongmua,$thanhtien,0)";
        $db->exec($query);
    }
    function updateHoaDon($masohd, $makh, $tongtien)
    {
        $db = new connect;
        $query = "update hoadon set tongtien=$tongtien where masohd=$masohd and makh=$makh";
        $db->exec($query);
    }


    function getKhachHangHD($masohd)
    {
        $db = new connect();
        $select = "select a.masohd,b.tenkh,b.diachi,b.sodienthoai,a.ngaydat from hoadon a, khachhang b
        WHERE a.makh=b.makh and masohd=$masohd";
        $result = $db->getInstance($select);
        return $result;
    }
    // phương thức lấy ra hàng trên hóa đơn
    function getHangHoaHD($masohd)
    {
        $db = new connect();
        $select = "select DISTINCT a.masohd,c.tensach,b.dongia,a.soluongmua
        from cthoadon a, cthanghoa b, hanghoa c WHERE a.masach=b.idsach and c.masach=b.idsach and a.masohd=$masohd";
        $result = $db->getList($select);
        return $result;

    }

    // function getLichSuMuaHang($makh)
    // {
    //     $db = new connect();
    //     $select = "select a.masach, a.masohd,c.tensach,b.dongia,a.soluongmua from cthoadon a, cthanghoa b, hanghoa c, khachhang d, hoadon e WHERE a.masach=b.idsach and c.masach=b.idsach and e.masohd=a.masohd and e.makh=$makh";
    //     $result = $db->getList($select);
    //     return $result;

    // }
    function getLichSuMuaHang($makh)
    {
        $db = new connect();
        $select = "SELECT a.masohd, e.ngaydat, a.masach, c.tensach, SUM(b.dongia * a.soluongmua) AS thanhtien, SUM(a.soluongmua) as tongso_luongmua
                   FROM cthoadon a
                   JOIN cthanghoa b ON a.masach=b.idsach
                   JOIN hanghoa c ON c.masach=b.idsach
                   JOIN hoadon e ON e.masohd=a.masohd
                   WHERE e.makh=$makh
                   GROUP BY a.masohd, e.ngaydat, a.masach, c.tensach";
        $result = $db->getList($select);
        return $result;
    }

    function getLichSuMuaHangPage($makh,$start, $limit)
    {
        $db = new connect();
        $select = "SELECT a.masohd, e.ngaydat, a.masach, c.tensach, SUM(b.dongia * a.soluongmua) AS thanhtien, SUM(a.soluongmua) as tongso_luongmua
                   FROM cthoadon a
                   JOIN cthanghoa b ON a.masach=b.idsach
                   JOIN hanghoa c ON c.masach=b.idsach
                   JOIN hoadon e ON e.masohd=a.masohd
                   WHERE e.makh=$makh
                   GROUP BY a.masohd, e.ngaydat, a.masach, c.tensach ORDER BY a.masohd DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
}