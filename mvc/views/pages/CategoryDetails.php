<link rel="stylesheet" href="/B1706613/public/css/details.css">
<div class="details-category max-width">
<?php 
    while($row = mysqli_fetch_array($data["item"])) { ?>
    <div class="details">
        <div class="details__img">
            <img src="<?php echo "data:image/jpeg;base64," . base64_encode($row["hinh"]); ?>" alt="">
        </div>
        <div class="details__info">
            <div class="info__name" ><?php echo $row["tenhh"];?></div>
            <div class="info__seperate"></div>
            <div class="info__price">
                <span ><?php echo number_format($row["gia"], 0, '', ',');?></span> đ
            </div>

            <div class="info__soluong">
                <div class="info__amount">
                    <button id="btn-minus" class="btn-munis amount-btn">-</button>
                    <span id="amount" class="amount">1</span>
                    <button id="btn-plus" class="btn-plus amount-btn">+</button>
                </div>
                <button class="info__buy btn">MUA HÀNG</button>
            </div>
        </div>
    </div>
    <div class="info__seperate details"></div>
    <div class="details-mota">
        <button class="mota btn">MÔ TẢ</button>
        <p class="details_mota--letter"><?php echo $row["motahh"];?></p>
    </div>
</div>
<?php }?>