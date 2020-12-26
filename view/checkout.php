<?php require "./header.php"; ?>
<title> Thanh toán</title>
<div class="container mt-5">
    <a href="../view/home.php" class="all-move-to-home">TRANG CHỦ</a>
    <span>/ THANH TOÁN</span>
</div>
<div class="container my-5">
    <div class="row justify-content-between ">
        <div class=" my-5 col-lg-8 col-md-12 col-sm-12 " id="checkout-item">

            <!-- here -->

        </div>

        <div class="col-lg-4 border checkout-panel">
            <h2>Tính tiền</h2>
            <div class="checkout">
                <div class="checkout__price"></div>
                <div class="checkout__shipping"></div>
                <div class="checkout__total-discount"></div>
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

<?php require "./footer.php"; ?>