<?php
class user
{
    //phương thức insert vào database
    function insertKhachhang($tenkh, $username, $matkhau, $email, $diachi, $sodt)
    {
        $db = new connect();
        $query = "insert into khachhang (makh, tenkh, username,matkhau,email,diachi,sodienthoai, phanquyen) 
        values(NULL, '$tenkh','$username', '$matkhau', '$email', '$diachi', '$sodt', 1 )";
        $result = $db->exec($query);
        return $result;
    }

    //kiểm tra

    function checkKhachHang($user, $email)
    {
        $db = new connect();
        $select = "select * from khachhang where username='$user' or email='$email'";
        $result = $db->getInstance($select);
        return $result;
    }

    function logKhachHang($user,$pass){
        $db=new connect();
        $select="select a.makh, a.tenkh, a.username from khachhang a where username='$user' and matkhau='$pass' ";
        $result=$db->getInstance($select);
        return $result;
    }

    function checkEmail($email){
        $db = new connect();
        $select = "select * from khachhang where email='$email'";
        $result = $db->getList($select);
        return $result;
    }

    function updateEmailPass($emailold,$passnew){
        $db = new connect();
        $query="update khachhang set matkhau='$passnew' where email='$emailold'";
        echo $query;
        $db->exec($query);
    }
}
?>