<link rel="stylesheet" href="../../public/css/allcate.css">
<link rel="stylesheet" href="../../public/css/main.css">
    <link rel="stylesheet" href="../../public/css/resetcss.css">
<div class="nav__all-item max-width">
    <a href="#">TRANG CHỦ</a>
    <span>/ TẤT CẢ SẢN PHẨM</span>
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
            <a href="#" class="item__info--name"><?php echo $row["tenhh"] ?></a>
            <div><span class="item__info--price">
            <?php echo $row["gia"] ?>
                </span> đ</div>
        </div>
    </div>
    <?php } ?>
</div>
<div class="pagination">
    <?php $pagetotal = round($data["pagenumb"]/20) + 1;?>
    
    <?php
        for ($i = 1; $i <= $pagetotal ; $i++){
            echo '<a href="'.$pagetotal.'">1</a>';
        }
    ?>

</div>


