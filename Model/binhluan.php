<?php
class binhluan
{
    // insert
    function insertComment($idkh, $idsach, $content)
    {
        $db = new connect();
        $query = "insert into comment(idcomment, idkh, idsach, content, luotthich) values (NULL, $idkh, $idsach, '$content',0)";
        echo $query;
        $db->exec($query);
    }
    // hiển thị tất cả bình luận
    function selectBinhLuan($idsach)
    {
        $db = new connect();
        $select = "SELECT a.username,b.content FROM khachhang a, comment b WHERE a.makh=b.idkh and b.idsach=$idsach";
        $result = $db->getList($select);
        return $result;
    }
}
?>