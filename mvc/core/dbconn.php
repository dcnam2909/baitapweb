<?php
class dbconn{
    public $conn;
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "quanlybanhang";

    function __construct(){
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
    }
}
?>