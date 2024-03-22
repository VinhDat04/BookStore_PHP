<?php
class tintuc
{

    function getTinTuc()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT title, image, content, id
                FROM tintuc 
                ORDER BY id DESC LIMIT 8";
        $result = $db->getList($select);
        return $result;
    }

    function getTinTucPage($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT title, image, id, content
                FROM tintuc 
                ORDER BY id
                DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getTinTucId($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT title, image, content, id
            FROM tintuc 
            WHERE id = " . $id; // Amend the query to retrieve the article content based on the provided ID
        $result = $db->getInstance($select);
        // $this->updateViewCount($id);
        return $result;
    }

    function getDeXuatTinTuc($id)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT title, image, content, id
                FROM tintuc Where id!=$id
                ORDER BY id DESC LIMIT 4";
        $result = $db->getList($select);
        return $result;
    }



}
?>