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
    mysqli_query($conn, "INSERT INTO `dathang` (`sodondh`, `mskh`, `tongtien`, `ngaydh`, `trangthai`) VALUES (NULL, '$last_idKH', '$tongtien', NOW(), 'Chờ xác nhận')");
    $last_idDH = mysqli_insert_id($conn);
    foreach($sanpham as $item){
        mysqli_query($conn,"INSERT INTO `chitietdathang` (`sodondh`, `mshh`, `soluong`) VALUES ($last_idDH, $item->id,  $item->counts)");
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

if(isset($_POST['xacnhandonhang'])){
    $id =(int)$_POST['xacnhandonhang'];
    mysqli_query($conn, "UPDATE `dathang` SET `trangthai` = 'Xác nhận' WHERE `dathang`.`sodondh` = $id");
}

if(isset($_POST['xoahanghoa'])){
    $id =(int)$_POST['xoahanghoa'];
    mysqli_query($conn, "DELETE FROM `chitietdathang` WHERE `chitietdathang`.`mshh` = $id");
    mysqli_query($conn, "DELETE FROM `hanghoa` WHERE `hanghoa`.`mshh` = $id");
}

if(isset($_POST['sanpham-edit-submit'])){
    $editID = (int)$_POST['sanpham-edit-submit'];
    $editName = $_POST['sanpham__name--edit'];
    $editManhom = $_POST['sanpham__manhom--edit'];
    $editPrice = $_POST['sanpham__price--edit'];
    $editDiscount = $_POST['sanpham__price-discount--edit'];
    $editDesc = $_POST['sanpham__description--edit'];

    $newSpImageEdit = $_FILES['sanpham__img--edit'];
    $dataImgEdit = file_get_contents($newSpImageEdit['tmp_name']);
    $base64ImgEdit = base64_encode($dataImgEdit);

    mysqli_query($conn, "UPDATE `hanghoa` SET `tenhh` = '$editName', `gia` = '$editPrice', `manhom` = '$editManhom', `hinh` = '$base64ImgEdit', `motahh` = '$editDesc', `giamgia` = ' $editDiscount' WHERE `hanghoa`.`mshh` = $editID");

    header('location: admin.php');
}
?>