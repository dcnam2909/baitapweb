<?php
include "../view/connDB.php";

// $newProductName = $_POST['sanpham__name'];
// $newProductPrice = $_POST['sanpham__price'];
// $newProductDescription = $_POST['sanpham__description'];

$query = "SELECT * FROM `hanghoa`";
$resultHangHoa = mysqli_query($conn, $query);
