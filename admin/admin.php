<?php 
require "../view/connDB.php";
?>

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
                            <?php
                            $queryDH = mysqli_query($conn,"SELECT * FROM dathang");
                            while($donhang= mysqli_fetch_array($queryDH)){
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $donhang["sodondh"]?></th>
                                    <td><?php 
                                    $mskh = $donhang["mskh"];
                                    $queryKH = mysqli_query($conn,"SELECT hotenkh, diachi FROM khachhang WHERE mskh = '$mskh'");
                                    $khachhang = mysqli_fetch_assoc($queryKH);
                                    echo $khachhang['hotenkh'] ?></td>
                                    <td><?php echo $khachhang['diachi'] ?></td>
                                    <td><?php echo $donhang['tongtien'] ?> <u>đ</u></td>
                                    <td>
                                    <?php 
                                    if ($donhang['trangthai']=== 'Chờ xác nhận') 
                                        echo '<button type="button" class="btn btn-success ">Xác nhận</button>
                                            <button type="button" class="btn btn-success disabled"><a href="">Chờ xác nhận</a></button>';
                                    else echo '<button type="button" class="btn btn-success disabled ">Xác nhận</button>
                                            <button type="button" class="btn btn-success "><a href="">Chờ xác nhận</a></button>';   
                                    ?>
                                        
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success"><a href="">Xem chi tiết</a></button>
                                    </td>
                                </tr>
                            <?php } mysqli_free_result($queryDH);
                                mysqli_free_result($queryKH);?>
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
                                <?php
                                $queryKH = mysqli_query($conn,"SELECT * FROM khachhang");
                                while($khachhang= mysqli_fetch_array($queryKH)){
                                    ?>
                                <tr>
                                    <th scope="row"><?php echo $khachhang['mskh']; ?></th>
                                    <td><?php echo $khachhang['hotenkh']; ?></td>
                                    <td><?php echo $khachhang['diachi']; ?></td>
                                    <td><?php echo $khachhang['sodienthoai']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success"><a href="">Xóa tài khoản</a></button>
                                    </td>
                                </tr>
                                <?php } mysqli_free_result($queryKH); ?>
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
                                    <th scope="col">Giảm giá</th>
                                    <th scope="col">Mô tả</th>
                 

                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $queryHH = mysqli_query($conn,"SELECT * FROM hanghoa");
                                while ($hanghoa= mysqli_fetch_array($queryHH)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $hanghoa['mshh'];  ?></th>
                                        <td><?php echo $hanghoa['tenhh'];  ?></td>
                                        <td align="center"><img src="data:image/jpeg;base64,<?php echo $hanghoa["hinh"]; ?> " alt="#" style="width: 10rem;"></td>
                                        <td><?php echo $hanghoa['gia'];  ?> <u>đ</u></td>
                                        <td><?php echo $hanghoa['giamgia'];  ?> <span>%</span></td>
                                       
                                        <td><?php echo $hanghoa['motahh'];  ?></td>

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
                        <form action="product.php" method="post" name="form-sanpham" id="form-sanpham" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="sanpham__name" class="input-group-text" id="basic-addon1">Tên sản phẩm:</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" aria-label="Nhập tên sản phẩm" aria-describedby="basic-addon1" id="sanpham__name" name="sanpham__name">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="sanpham__manhom">Nhóm hàng hóa</label>
                                </div>
                                <select class="custom-select" id="sanpham__manhom" name="sanpham__manhom">
                                <?php
                                $queryNHH = mysqli_query($conn, "SELECT * FROM nhomhanghoa");
                                while($manhom= mysqli_fetch_array($queryNHH)){
                                    echo '<option value="'.$manhom["manhom"].'">'.$manhom["tennhom"].'</option>';
                                } mysqli_free_result($queryNHH);?>
                                </select>
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
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="sanpham__price-discount" class="input-group-text">Giảm giá:</label>
                                </div>
                                <input type="text" placeholder="Giảm giá sản phẩm" class="form-control" aria-label="Amount" id="sanpham__price-discount" name="sanpham__price-discount">
                                <div class="input-group-append">
                                    <label for="sanpham__price-discount" class="input-group-text">VNĐ</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="sanpham__description" class="input-group-text">Mô tả sản phẩm</label>
                                </div>
                                <textarea class="form-control" aria-label="With textarea" id="sanpham__description" name="sanpham__description"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file"  id="sanpham__img" name="sanpham__img">
                            </div>
                        </form>
                        <button form="form-sanpham" name="sanpham-submit" type="submit" class="btn btn-success mt-3 float-right">Thêm sản phẩm</button>
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
    <script src="admin.js"></script>
</body>

</html>