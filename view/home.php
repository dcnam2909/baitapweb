<?php require_once "./connDB.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/resetcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Trispace&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <title>V Bird</title>
</head>

<body>
    <header>
        <div class="header__top border__container">
            <div class="top max-width">
                <span class="top__left">Welcome to VBird store</span>
                <div class="top__right">
                    <a href="#" class="right__fb">
                        <i class="fab fa-facebook-f right__icon"></i>
                    </a>
                    <a href="#" class="right__insta">
                        <i class="fab fa-instagram right__icon"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="header__main border__container">
            <div class="header__navbar max-width">
                <a href="../view/home.php" class="header__name">VBIRD</a>
                <ul class="header__nav">
                    <li class="header__nav-item "><a class="item__link" href="/B1706613/">TRANG CHỦ</a></li>
                    <li class="header__nav-item "><a class="item__link" href="">GIỚI THIỆU</a></li>
                    <li class="header__nav-item sanpham"><a class="item__link" href="">SẢN PHẨM</a>
                        <ul class="sanpham-category">
                        <?php 
                            $danhmuchanghoa = mysqli_query($conn, "select tennhom from nhomhanghoa");
                            while ($row = mysqli_fetch_array($danhmuchanghoa)){
                                echo '<li class="sanpham-category__item"><a href="">'.$row["tennhom"].'</a></li>';
                            }
                        ?>
                        </ul>
                    </li>
                    <li class="header__nav-item "><a class="item__link" href="">LIÊN HỆ</a></li>
                </ul>
                <div class="header__user">
                    <div class="user__auth">
                        <i class="fas fa-user auth__icon"></i>
                    </div>
                    <div class="user__search">
                        <i class="fas fa-search search__icon "></i>
                        <div class="search__box">
                            <input type="text" class="search__input--hover">
                            <button type="submit" class="search__input--submit">
                                <i class="fas fa-search search__icon--input"></i>
                            </button>
                        </div>
                    </div>
                    <div class="user__cart">
                        <i class="fas fa-shopping-cart cart__icon"></i>
                        <div class="cart-item">
                            <div class="cart-item__in-cart" id="item-in-cart">


                            </div>
                            <div class="cart-item__buy">
                                <div class="buy-name">Tạm tính: <span class="total" id="total">0</span> đ</div>
                                <div class="buy">
                                    <button class="buy__btn btn" name="buy__btn" type="button">THANH TOÁN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="banner">
            <!-- Banner JS -->
            <div class="banner__img" id="banner__img">
                <button class="banner__btn" id="left--btn" onclick="leftMove()"><i class="fas fa-chevron-left banner__icon left"></i></button>
                <img src="../img/banner-1.png" alt="" class="banner-img">
                <img src="../img/banner2.png" alt="" class="banner-img" hidden>
                <img src="../img/banner3.png" alt="" class="banner-img" hidden>
                <button class="banner__btn" id="right--btn" onclick="rightMove()"><i class="fas fa-chevron-right banner__icon right"></i></button>
            </div>
        </div>
    <div class="container__top">
        <div class="intro" style="font-family: 'Indie Flower', cursive;">Sản phẩm mới nhất</div>
        <div class="seperate">
            <div class="seperate__left"></div>
            <div class="seperate__logo"><img src="" alt=""></div>
            <div class="seperate__right"></div>
        </div>
    </div>
    <div class="container__main">
        <?php
        $query = "SELECT * FROM `hanghoa` LIMIT 12";
        $result = mysqli_query($conn , $query);
        while ($row = mysqli_fetch_array($result)){?>
        <div class="item">
            <div class="item__img-buy">
                <img src="<?php echo "data:image/jpeg;base64," . base64_encode($row["hinh"]); ?>" class="item__img">
                <button class="item__buy btn" type="button" name="buy-now__btn">MUA NGAY</button>
                <button class="item__buy item--add-to-cart btn" type="button"><i class="fas fa-shopping-cart"></i></button>
            </div>
            <div class="item__info">
                <a href="../view/detail.php?id=<?php echo $row["mshh"];?>" class="item__info--name" > <?php echo $row["tenhh"]; ?></a>
                <div><span class="item__info--price">
                <?php echo number_format($row["gia"], 0, '', ','); ?>
                    </span> đ</div>
            </div>
        </div>
        <?php }
        mysqli_close($conn); ?>
    </div>
    <a href="../view/all.php?page=1" class="btn__more"><button type="button" class="btn--more btn">Xem Thêm Sản Phẩm</button></a>
    </section>
    <footer style="margin-top:6rem;">
    <div class="splitter"></div>
        <div class="bar">
            <div class="bar-wrap">
                <div class="clear"></div>
                <div class="copyright">&copy;  2020 All Rights Reserved</div>
                <div class="copyright">DINH CHUNG NAM</div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>