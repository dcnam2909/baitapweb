<?php
class SanPhamModel extends dbconn{

    public function homeCategory(){
        $sql = "SELECT * FROM `hanghoa` LIMIT 12";
        return $result = mysqli_query($this->conn, $sql);
    }

    public function getItem($page){
        $num = 1;
        if ($page > 1){
            $num = $page * 10 + ($page-2)*10 +1;
        }
        $sql = "SELECT * FROM `hanghoa` WHERE `mshh` >=". $num." LIMIT 20";
        return $result = mysqli_query($this->conn, $sql);
    }

    public function pageNumb(){
        $sql = "SELECT * FROM `hanghoa`";
        $result = mysqli_query($this->conn, $sql);
        return  mysqli_num_rows($result);
    }

    public function getOneItem($idhh){
        $sql = "SELECT * FROM `hanghoa` where `mshh` = " .$idhh;
        return $result = mysqli_query($this->conn, $sql);
    }
}
?>