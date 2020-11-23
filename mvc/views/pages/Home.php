<div class="banner">
        <!-- Banner JS -->
        <div class="banner__img" id="banner__img">
            <button class="banner__btn" id="left--btn" onclick="leftMove()"><i class="fas fa-chevron-left banner__icon left"></i></button>
            <img src="/B1706613/public/img/banner-1.png" alt="" class="banner-img">
            <img src="/B1706613/public/img/banner2.png" alt="" class="banner-img" hidden>
            <img src="/B1706613/public/img/banner3.png" alt="" class="banner-img" hidden>
            <button class="banner__btn" id="right--btn" onclick="rightMove()"><i class="fas fa-chevron-right banner__icon right"></i></button>
        </div>
    </div>
<div class="container__top">
    <div class="intro" style="font-family: 'Indie Flower', cursive;
    ">Sản phẩm mới nhất</div>
    <div class="seperate">
        <div class="seperate__left"></div>
        <div class="seperate__logo"><img src="" alt=""></div>
        <div class="seperate__right"></div>
    </div>
</div>
<div class="container__main">
    <?php
    while ($row = mysqli_fetch_array($data["item"])){?>
    <div class="item">
        <div class="item__img-buy">
            <img src="<?php echo "data:image/jpeg;base64," . base64_encode($row["hinh"]); ?>" class="item__img">
            <button class="item__buy btn" type="button" name="buy-now__btn">MUA NGAY</button>
        </div>
        <div class="item__info">
            <a href="/B1706613/Home/Details/<?php echo $row["mshh"];?>" class="item__info--name" > <?php echo $row["tenhh"]; ?></a>
            <div><span class="item__info--price">
            <?php echo number_format($row["gia"], 0, '', ','); ?>
                </span> đ</div>
        </div>
    </div>
    <?php } ?>
</div>
<a href="/B1706613/Home/AllCategory/1" class="btn__more"><button type="button" class="btn--more btn">Xem Thêm Sản Phẩm</button></a>

