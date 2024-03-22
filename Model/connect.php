<?php
class connect
{
    //thuoc tính
    var $db = null;
    //hàm tạo
    function __construct()
    {
        //database
        $dns = 'mysql:host=localhost;dbname=BookStore';
        $user = 'root';
        $pass = '';
        //tạo sự liên kết bằng pdo
        try {
            $this->db = new PDO($dns, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // echo "Kết nối thành công";
        } catch (\Throwable $th) {
            //throw $th;
            echo "Kết nối thất bại";
            echo $th;
        }
    }
    // phương thức lấy về nhiều dữ liệu là nhiều row, là 1 table
    function getList($select)
    {
        //truy vấn thì trả về 1 table nhiều roee, thì cần biên chứa
        $result = $this->db->query($select);
        return $result; //trả về 1 table
    }
    //Phương thức trả về 1 row
    function getInstance($select)
    {
        //truy vấn trả về là 1 table nhiều row, thì cần 1 biên chứa
        $result = $this->db->query($select);
        //trả về 1 dòng thì fetch luôn để lấy kết qủa
        $result = $result->fetch();
        return $result;
    }
    //truy vấn bằng insert, update, delete => exec
    function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }
    //prepare
    function execP($query)
    {
        $statement = $this->db->prepare($query);
        return $statement;
    }

}
?>