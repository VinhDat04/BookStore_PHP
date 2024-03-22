<?php
class dmsp
{
    // insert
    function getDMSP()
    {
        $db = new connect();
        $select = "SELECT  id,tendm, duongdan  FROM dmsp";
        $result = $db->getList($select);
        return $result;
    }
}
?>