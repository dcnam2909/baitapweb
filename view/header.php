<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" type="image/png" href="../img/logotest.png"/>
</head>
<body>
    <header>
        <div class="container d-flex justify-content-between">
            <div class="p-2">Welcome to VBird store</div>
            <div class="p-2">
                <a href="#" class="link facebook">
                    <i class="fab fa-facebook-f icon facebook"></i>
                </a>
                <a href="#" class="link instagram">
                    <i class="fab fa-instagram icon instagram"></i>
                </a>
            </div>
        </div>

        <div class="bg-light">
            <nav class="navbar navbar-expand-lg navbar-light containter">
                <a href="home.php" class="navbar-brand ml-5 brand-logo"><img src="../img/logotest.png" alt="" srcset=""></a>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="all.php?page=1" >Sản phẩm</a>
                            <div class="dropdown-menu shadow">
                            <?php 
                                require_once "./connDB.php";
                                $query = "SELECT tennhom from nhomhanghoa";
                                $getDanhMucHH = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($getDanhMucHH)){
                                    echo '<a class="dropdown-item" href="#">'. $row["tennhom"].' </a>';
                                }

                            ?>

                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 2rem;">
                            <div class=" btn-cart">
                                <a href="checkout.php">
                                    <button class="m-2 btn btn-primary"><i class="fas fa-shopping-cart"></i></button>
                                </a>
                                <div class="cart shadow rounded">
                                    <div class=" cart-item d-flex justify-content-between border border-dark rounded p-2">
                                        <img class="border-light rounded" src="../img/product-7.jpg" alt="" srcset="">
                                        <div class="cart-item__info d-flex flex-column justify-content-around">
                                            <a href="#" class="cart-item__name">Bông xịnaaaaa</a>
                                            <div class="cart-item__price d-flex align-items-center">
                                                <span class="item__price pr-2">99999999</span><span style="color: black;font-weight: bolder;">&times;</span>
                                                <input class="item__count ml-2" type="number" name="item-count" id="item-count "min="1" value="1">
                                            </div>
                                        </div>
                                        <button class="btn btn-dark btn-outline-light delete-item rounded-circle">&times;</button>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </li>

                        <li class="nav-item">
                            <button class="m-2 btn btn-primary" data-toggle="modal" data-target="#myModalLogin">Đăng nhập</button>
                            <div class="modal fade" id="myModalLogin">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Đăng nhập</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="" method="post" class="form--login" name="form--login" id="form--login">
                                                <div class="form-group mb-4">
                                                    <label class="mr-3" for="username">Tên đăng nhập/Email: </label>
                                                    <input class="form-control" type="text" name="username" id="username"placeholder="Nhập tên đăng nhập/Email">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Tên đăng nhập/Email không được để trống.</div>     -->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mr-3" for="password">Mật khẩu: </label>
                                                    <input class="form-control" type="password" name="password" id="password" placeholder="Nhập mật khẩu">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Mật khẩu không được để trống.</div> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button class="m-2 btn btn-primary" data-toggle="modal" data-target="#myModalReg">Đăng kí</button>
                            <div class="modal fade" id="myModalReg">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Đăng kí</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="" method="post" class="form--reg" name="form--reg" id="form--reg">
                                                <div class="form-group mb-4">
                                                    <label for="fullname" class="mr-3">Họ và tên:</label>
                                                    <input class="form-control" type="text" name="fullname" id="fullname"placeholder="Nhập họ và tên">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Tên đăng nhập/Email không được để trống.</div>     -->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="email" class="mr-3">Email:</label>
                                                    <input class="form-control" type="text" name="email" id="email"placeholder="Nhập email">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Tên đăng nhập/Email không được để trống.</div>     -->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="enterpassword" class="mr-3">Mật khẩu:</label>
                                                    <input class="form-control" type="password" name="enterpassword" id="enterpassword"placeholder="Nhập mật khẩu">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Tên đăng nhập/Email không được để trống.</div>     -->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="enterrepassword" class="mr-3">Kiểm tra mật khẩu:</label>
                                                    <input class="form-control" type="password" name="enterrepassword" id="enterrepassword"placeholder="Nhập lại mật khẩu">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Tên đăng nhập/Email không được để trống.</div>     -->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="phonenumb" class="mr-3">Số điện thoại:</label>
                                                    <input class="form-control" type="tel" name="phonenumb" id="phonenumb"placeholder="Nhập số điện thoại">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Tên đăng nhập/Email không được để trống.</div>     -->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="address" class="mr-3">Địa chỉ:</label>
                                                    <input class="form-control" type="text" name="address" id="address"placeholder="Nhập số điện thoại">
                                                    <div class="alert-danger rounded">
                                                        <!-- <div class="p-2 mt-2"><strong class="">Waring!</strong> Tên đăng nhập/Email không được để trống.</div>     -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Đăng kí</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

