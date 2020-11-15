<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/resetcss.css">
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
                <a href="#" class="header__name">VBIRD</a>
                <ul class="header__nav">
                    <li class="header__nav-item "><a class="item__link" href="index.html">TRANG CHỦ</a></li>
                    <li class="header__nav-item "><a class="item__link" href="">GIỚI THIỆU</a></li>
                    <li class="header__nav-item sanpham"><a class="item__link" href="">SẢN PHẨM</a>
                        <ul class="sanpham-category">
                            <li class="sanpham-category__item"><a href="">Đồng hồ</a></li>
                            <li class="sanpham-category__item"><a href="">Đế lót ly</a></li>
                            <li class="sanpham-category__item"><a href="">Phụ kiện</a></li>
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
                            <div class="cart-item__in-cart">
                                <div class="cart-item__details">
                                    <a href="#"><img src="../img/product-8.jpg" alt="" class="cart-item__img"></a>
                                    <div class="cart-item__info">
                                        <a href="#" class="cart-item__info--name">Flowers daisy pink stick</a>
                                        <div class=cart-item__price-info>
                                            <span class="cart-item__info--amount">1</span> x
                                            <span class="cart-item__info--price">460,000</span> đ
                                        </div>
                                    </div>
                                    <button type="button" class="cart-item__delete">
                                        <i class="fas fa-times cart-item__delete--icon"></i>
                                    </button>
                                </div>
                                <div class="cart-item__details">
                                    <a href="#"><img src="../img/product-8.jpg" alt="" class="cart-item__img"></a>
                                    <div class="cart-item__info">
                                        <a href="" class="cart-item__info--name">Flowers daisy pink stick</a>
                                        <div class=cart-item__price-info>
                                            <span class="cart-item__info--amount">1</span> x
                                            <span class="cart-item__info--price">460,000</span> đ
                                        </div>
                                    </div>
                                    <button type="button" class="cart-item__delete">
                                        <i class="fas fa-times cart-item__delete--icon"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="cart-item__buy">
                                <div class="buy-name">Tạm tính: <span class="total">460,000</span> đ</div>
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
        <?php
        require_once "./mvc/views/pages/".$data["page"].".php";
        ?>
    </section>
    <footer>
        <h2>dia chi lien lac</h2>
    </footer>
</body>

</html>