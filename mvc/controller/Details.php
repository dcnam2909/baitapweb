<?php
class Category extends dbconn{
    function CateDetails(){
        $sql = "SELECT * FROM `hanghoa` LIMIT 20";
        echo "hello cate";
    }
}
?>