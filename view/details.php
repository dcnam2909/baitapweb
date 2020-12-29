<?php 
    require "./header.php";
    require_once "./connDB.php";
    $id = $_GET["id"];
    if (isset($id)){
        $query = "SELECT * FROM hanghoa WHERE mshh='".$id."'";
        $getHH = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($getHH);
?>
<title><?php echo $row["tenhh"];?></title>
<section>
<div class="container mt-5 details">
    <div href="#" class="row item">
        <a href="#" class="col-lg-6 col-sm-12 details__img-link"><img src="data:image/jpeg;base64,<?php echo $row["hinh"]; ?> " alt="" class="item--img details__img">
        <div class="item--discount details__discount"><?php echo $row["giamgia"];?>%</div></a>
        <div class="col-lg-6 col-sm-12 row">
            <div class="item__info my-2 details__info">
                <div class="item--name details__name"><a href=""><?php echo $row["tenhh"];?></a></div>
                <div class="item--price details__price">
                    <span class="price price-discount details__price-discount"><?php echo ($row["gia"])-(($row["gia"])*($row["giamgia"]))/100; ?> <u>đ</u></span>
                    <strike class="price price-nodiscount details__price-nodiscount"><?php echo $row["gia"];?> <u>đ</u></strike>
                </div>
            </div>
            <div class="item--control details__control">
                <button class="btn btn-info buy-now details__buy-now">Mua ngay</button>
                <button class="btn btn-outline-primary add-to-cart details__add-to-cart"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
    </div>
    <div class="container border-top">
        <button class="btn btn-danger disabled details__mota">Mô tả</button>
        <div>
            <p><?php echo ($row["motahh"]); ?></p>

        </div>
    </div>
</div>

</section>
<?php } else die();?>
<?php require"./footer.php";?>
