<?php
include "../view/connDB.php";
if (isset($_POST['bill'])){
    $bill = json_decode(($_POST['bill']));
    $tenkh = $bill->name;
    $diachikh= $bill->address;
    $sdtkh= $bill->phone;
    $emailkh= $bill->email;
    $tongtien= $bill->total;
    $sanpham= $bill->product;

    mysqli_query($conn,"INSERT INTO `khachhang` (`mskh`, `hotenkh`, `diachi`, `sodienthoai`) VALUES (NULL, '$tenkh', '$diachikh', '$sdtkh')");

    $last_idKH = mysqli_insert_id($conn);

    mysqli_query($conn, "INSERT INTO `dathang` (`sodondh`, `mskh`, `ngaydh`,`tongtien`) VALUES (NULL, '$last_idKH', NOW(),'$tongtien')");

    $last_idDH = mysqli_insert_id($conn);
    foreach($sanpham as $item){
        mysqli_query($conn,"INSERT INTO `chitietdathang` (`sodondh`, `mshh`, `soluong`) VALUES ('$last_idDH', '$item->id', ' $item->counts')");
    }
}


if (isset($_POST['sanpham-submit'])){
    $newSpName = $_POST['sanpham__name'];
    $newSpPrice = $_POST['sanpham__price'];
    $newSpDesc = $_POST['sanpham__description'];
    $newSpNhom = $_POST['sanpham__manhom'];
    $newSpDiscount = $_POST['sanpham__price-discount'];

    //xu ly image
    $newSpImage = $_FILES['sanpham__img'];
    $dataImg = file_get_contents($newSpImage['tmp_name']);
    $base64Img = base64_encode($dataImg);



    mysqli_query($conn,"INSERT INTO `hanghoa` (`mshh`, `tenhh`, `gia`, `manhom`, `hinh`,`motahh`, `giamgia`) VALUES (NULL, '$newSpName', '$newSpPrice', ' $newSpNhom', '$base64Img', '$newSpDesc', '$newSpDiscount')");
    header('location: admin.php');
    exit();
}

?>