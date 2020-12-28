<?php
    require "./header.php";
    require_once "./connDB.php";

    $query = "SELECT * FROM hanghoa LIMIT 16";

    $getItem = mysqli_query($conn, $query);
?>
<title>Trang chủ</title>
<div class="container banner--slide" style="margin-top: 4rem;">
    <div id="slideBanner" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slideBanner" data-slide-to="0" class="active"></li>
            <li data-target="#slideBanner" data-slide-to="1"></li>
            <li data-target="#slideBanner" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img class="banner__img" src="../img/banner-1.png" style="width: 100%; height: 100%;" alt="banner1">
            </div>
            <div class="carousel-item">
                <img class="banner__img" src="../img/banner2.png" style="width: 100%; height: 100%;" alt="banner2">
            </div>
            <div class="carousel-item">
                <img class="banner__img" src="../img/banner3.png" style="width: 100%; height: 100%;" alt="banner3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slideBanner" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideBanner" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="container " style="margin-top: 5rem;">
    <div class="d-flex justify-content-center pb-4 border-bottom border-dark" style="font-family: 'Indie Flower', cursive; font-size: 2rem;">Sản phẩm mới nhất</div>
</div>

<section class="container" style="margin-top: 5rem;">
    <div class="mr-auto ml-auto row">
        <?php
            while ($row = mysqli_fetch_array($getItem)){
        ?>
        <div class="col-lg-3 col-md-6 container-item">
            <div href="#" class="item">
                <a href="#"><img src="data:image/jpeg;base64,<?php echo $row["hinh"]; ?> " alt="" class="item--img"></a>
                <div class="item__info my-2">
                    <div class="item--name"><a href="details.php?id=<?php echo ($row["mshh"]);?> "><?php echo ($row["tenhh"]); ?></a></div>
                    <div class="item--price">
                        <span class="price price-discount"><?php echo ($row["gia"])-(($row["gia"])*($row["giamgia"]))/100; ?> <u>đ</u></span>
                        <strike class="price price-nodiscount"><?php echo ($row["gia"]); ?> <u>đ</u></strike>
                    </div>
                </div>
                <div class="item--control">
                    <button class="btn btn-info buy-now">Mua ngay</button>
                    <button class="btn btn-outline-primary add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                </div>
                <div class="item--discount"><?php echo ($row["giamgia"]); ?>%</div>
            </div>
        </div>
        <?php
            }
            mysqli_close($conn);
        ?>
    </div>
    <div class="get-all-item">
        <a href="all.php?page=1"><button class="btn btn-outline-primary get-all-item-btn">Xem tất cả sản phẩm</button></a>
    </div>
</section>
<?php require "./footer.php";?>