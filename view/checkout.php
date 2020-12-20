<?php require "./header.php";?>
<title> Thanh toán</title>
<div class="container mt-5">
    <a href="../view/home.php" class="all-move-to-home">TRANG CHỦ</a>
    <span>/ THANH TOÁN</span>
</div>
<div class="container my-5" >
    <div class="row justify-content-between ">
        <div class=" my-5 col-lg-8 col-md-12 col-sm-12 ">
            <div class="checkout-item mb-3 shadow">
                <div class="checkout-item__img">
                    <img src="../img/product-7.jpg" alt="">
                </div>
                <div class="checkout-item__content">
                    <div class="checkout-item__info">
                        <a href="#" class="checkout-item__name-link"><div class="checkout-item__name">ten</div></a>
                        <div class="checkout-item__price">
                            <span class="checkout-item__price--discount">990000 <u>đ</u></span>
                            <strike class="checkout-item__price--nodiscount">1000000 <u>đ</u></strike>
                        </div>
                    </div>
                    <div class="checkout-item__control">
                        <div class="control-group">
                            <button class="btn btn-outline-primary checkout-item__control--minus">&minus;</button>
                            <input type="tel" name="checkout-item__control--count" id="" class="checkout-item__control--count">
                            <button class="btn btn-outline-primary checkout-item__control--plus">&plus;</button>
                        </div>
                        <button class="btn btn-primary checkout-item__control--delete">&times;</button>
                    </div>
                </div>
            </div>
            <!-- here -->
            
        </div>

        <div class="col-lg-4 border checkout-panel">
            <h2>Tính tiền</h2>
            <div class="checkout">
                <div class="checkout__price">Tổng: <span>1000000 <u>đ</u></span></div>
                <div class="checkout__discount">Giảm giá: <span>10 <u>%</u></div>
                <div class="checkout__total-discount">Thanh toán: <span>990000 <u>đ</u></div>
            </div>
            <div class="checkout__client-info my-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Họ tên (*): </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Địa chỉ (*): </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Số điện thoại (*): </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Email (*): </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <button class="btn btn-info float-right checkout--btn">MUA NGAY</button>
        </div>
    </div>
</div>

<?php require "./footer.php";?>




