<?php
class tintuc
{

    function getTinTuc()
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT id, title, image, content
                FROM tintuc 
                ORDER BY id DESC
                LIMIT 8";
        $result = $db->getList($select);
        return $result;
    }

    function getTinTucPage($start, $limit)
    {
        // b1: kết nối CSDL
        $db = new connect();
        // b2: cần lấy gì thì truy vấn gì
        $select = "SELECT id, title, image, content
                FROM tintuc 
                ORDER BY id
                DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    // function updateNews($id, $title, $image, $content)
    // {
    //     $pdo = new PDO("mysql:host=localhost;dbname=bookstore", "root", "");
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     try {
    //         $pdo->beginTransaction(); // Start the transaction

    //         // Update data in "tintuc" table
    //         $queryTinTuc = $pdo->prepare("UPDATE tintuc SET 
    //         title = :title, 
    //         image = :image, 
    //         content = :content 
    //         WHERE id = :id");

    //         // Bind parameters
    //         $queryTinTuc->bindParam(':id', $id);
    //         $queryTinTuc->bindParam(':title', $title);
    //         $queryTinTuc->bindParam(':image', $image);
    //         $queryTinTuc->bindParam(':content', $content);
    //         $queryTinTuc->execute();

    //         $pdo->commit();
    //         return true;
    //     } catch (PDOException $e) {
    //         // Rollback the transaction on error
    //         $pdo->rollBack();
    //         // Print or log the error message
    //         echo "Error: " . $e->getMessage();
    //         return false;
    //     }
    // }
    function updateNews($id, $title, $image, $content)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=bookstore", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {
            $pdo->beginTransaction(); // Start the transaction

            // Update data in "tintuc" table
            $queryTinTuc = $pdo->prepare("UPDATE tintuc SET 
            title = :title, 
            image = :image, 
            content = :content 
            WHERE id = :id");

            // Bind parameters
            $queryTinTuc->bindParam(':id', $id);
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

}
?>