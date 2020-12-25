<?php require "product.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="admin.css">
    <title>Quản lý trang bán hàng</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a href="#" class="navbar-brand">Quản lý bán hàng</a>
        <button class="btn btn-secondary-dark" id="btn-toggle" style="color: white;"><i class="fas fa-bars"></i></button>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Admin</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Đăng xuất</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="layoutSlidenav">
        <div class="slide-nav-menu">
            <div class="slide-nav-menu__top">
                <div class="slide-nav__item">Account</div>
                <a class="slide-nav__link" value="nhanvien"><i class="fas fa-user icon"></i></i>Nhân viên</a>
                <a class="slide-nav__link" value="khachhang"><i class="fas fa-users icon"></i>Khách hàng</a>
                <div class="slide-nav__item">Thống kê</div>
                <a class="slide-nav__link" value="doanhthu"><i class="fas fa-chart-pie icon"></i>Doanh thu</a>
                <a class="slide-nav__link" value="sanpham"><i class="fab fa-product-hunt icon"></i>Sản phẩm</a>
                <a class="slide-nav__link" value="donhang"><i class="fas fa-shopping-basket icon"></i></i>Đơn hàng</a>
            </div>
            <div class="slide-nav-menu__footer">
                <div class="">Logged in as:</div>
                <p>Admin</p>
            </div>
        </div>
        <div class="content">
            <main id="main">
                <div class="container-fluid donhang" id="donhang">
                    <h1 class="mt-4">Đơn hàng</h1>
                    <div class="mt-5 table-responsive-lg">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">123</th>
                                    <td>Đinh Chung Nam</td>
                                    <td>Sóc Trăng</td>
                                    <td>900.000 <u>đ</u></td>
                                    <td>
                                        <button type="button" class="btn btn-success disabled">Xác nhận</button>
                                        <button type="button" class="btn btn-success"><a href="">Chưa xác nhận</a></button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success"><a href="">Xem chi tiết</a></button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <div aria-label="Page navigation example" class="my-3 d-flex justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">3</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container-fluid nhanvien" id="nhanvien" hidden>
                    <h1 class="mt-4">Nhân viên</h1>
                    <div class="mt-5 table-responsive-lg">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Mã nhân viên</th>
                                    <th scope="col">Tên nhân viên</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">123</th>
                                    <td>Đinh Chung Nam</td>
                                    <td>Sóc Trăng</td>
                                    <td>123124</td>
                                    <td>
                                        <button type="button" class="btn btn-success"><a href="">Sửa</a></button>
                                        <button type="button" class="btn btn-success"><a href="">Xóa nhân viên</a></button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <div aria-label="Page navigation example" class="my-3 d-flex justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">3</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Next</a></li>
                        </ul>
                    </div>

                    <div class="nhanvien--add w-50">
                        <form action="" method="post" name="form-nhanvien" id="form-nhanvien">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="nhanvien__name" class="input-group-text" id="label-nhanvien-name">Tên nhân viên:</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Nhập tên nhân viên" aria-label="Nhập tên nhân viên" aria-describedby="label-nhanvien-name" id="nhanvien__name">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="nhanvien__address" class="input-group-text" id="label-nhanvien-address">Địa chỉ nhân viên:</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Nhập địa chỉ nhân viên" aria-label="Nhập địa chỉ nhân viên" aria-describedby="label-nhanvien-address" id="nhanvien__address">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="nhanvien__phone" class="input-group-text" id="label-nhanvien-phone">Số điện thoại nhân viên:</label>
                                </div>
                                <input type="tel" class="form-control" placeholder="Nhập Số điện thoại nhân viên" aria-label="Nhập Số điện thoại nhân viên" aria-describedby="label-nhanvien-phone" id="nhanvien__phone">
                            </div>

                        </form>
                        <button form="form-nhanvien" type="submit" class="btn btn-success mt-3 float-right">Thêm nhân viên</button>
                    </div>
                </div>
                <div class="container-fluid khachhang" id="khachhang" hidden>
                    <h1 class="mt-4">Khách hàng</h1>
                    <div class="mt-5 table-responsive-lg">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Tên đăng nhập</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">123</th>
                                    <td>Đinh Chung Nam</td>
                                    <td>Sóc Trăng</td>
                                    <td>123124</td>
                                    <td>
                                        <button type="button" class="btn btn-success"><a href="">Xóa tài khoản</a></button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <div aria-label="Page navigation example" class="my-3 d-flex justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">3</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container-fluid sanpham" id="sanpham" hidden>
                    <h1 class="mt-4">Sản phẩm</h1>
                    <div class="mt-5 table-responsive-lg">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Mã hàng</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Tên hàng</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Số lượng còn</th>
                                    <th scope="col">Đã bán</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($resultHangHoa)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['mshh'];  ?></th>
                                        <td><?php echo $row['tenhh'];  ?></td>
                                        <td align="center"><img src="data:image/jpeg;base64,<?php echo base64_encode($row["hinh"]); ?> " alt="#" style="width: 10rem;"></td>
                                        <td><?php echo $row['gia'];  ?> <u>đ</u></td>
                                        <td><?php echo $row['soluonghang'];  ?></td>
                                        <td><?php echo $row['motahh'];  ?></td>
                                        <td>1</td>
                                        <td>
                                            <button type="button" class="btn btn-success xoa-sanpham">Xóa hàng</button>
                                            <button type="button" class="btn btn-success sua-sanpham">Sửa hàng</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                        </table>
                    </div>
                    <div aria-label="Page navigation example" class="my-3 d-flex justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">3</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Next</a></li>
                        </ul>
                    </div>

                    <div class="sanpham--add w-50">
                        <form action="product.php" method="post" name="form-sanpham" id="form-sanpham">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="sanpham__name" class="input-group-text" id="basic-addon1">Tên sản phẩm:</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" aria-label="Nhập tên sản phẩm" aria-describedby="basic-addon1" id="sanpham__name" name="sanpham__name">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="sanpham__price" class="input-group-text">Giá:</label>
                                </div>
                                <input type="text" placeholder="Nhập giá sản phẩm" class="form-control" aria-label="Amount" id="sanpham__price" name="sanpham__price">
                                <div class="input-group-append">
                                    <label for="sanpham__price" class="input-group-text">VNĐ</label>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label for="sanpham__description" class="input-group-text">Mô tả sản phẩm</label>
                                </div>
                                <textarea class="form-control" aria-label="With textarea" id="sanpham__description" name="sanpham__description"></textarea>
                            </div>
                        </form>
                        <button form="form-sanpham" type="submit" class="btn btn-success mt-3 float-right">Thêm sản phẩm</button>
                    </div>
                </div>
                <div class="container-fluid doanhthu" id="doanhthu" hidden>
                    <h1 class="mt-4">Doanh thu</h1>
                    <div class="mt-5 table-responsive-lg">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <select name="" id="" class="custom-select">
                                            <option value="date">Ngày</option>
                                            <option value="month">Tháng</option>
                                            <option value="year">Năm</option>
                                        </select>
                                    </th>
                                    <th scope="col">Số đơn hàng</th>
                                    <th scope="col">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">123</th>
                                    <td>abcabc</td>
                                    <td>90000000 <u>đ</u></td>
                                </tr>
                        </table>
                    </div>
                    <div aria-label="Page navigation example" class="my-3 d-flex justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">3</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->
    <script src="admin.js"></script>
</body>

</html>