<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<style>
    option {
        text-decoration: none;
        color: blueviolet;
    }

    .filter {
        position: relative;
        display: block;

    }

    .inerdiv {
        display: none;
        position: absolute;
        z-index: 1;
        width: 90%;
    }

    .inerdiv option {
        text-decoration: none;
        display: block;
    }

    .filter:hover .inerdiv {
        display: block;

    }

    .filter:hover {
        margin-bottom: 130px;
        transition: 0.5s;
    }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>divyeshkarngiya51@gmial.com</li>
                                <li>Free Shipping for all Order of Rs.100</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <!-- <li><a href="#">Spanis</a></li> -->
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <?php
                                if (isset($_SESSION['user'])) {
                                ?>
                                    <div class="login" style="display: flex; gap:10px">
                                        <a href="index"><i class="fa fa-user"></i><?php echo $_SESSION['user']; ?></a>
                                        <a href="login" onclick="confirm('Are you sure you want to log out?');">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <a href="login"><i class="fa fa-user"></i> Login</a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index">Home</a></li>
                            <li><a href="./shop-grid">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details">Shop Details</a></li>
                                    <li><a href="./checkout">Check Out</a></li>
                                    <li><a href="./blog-details">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="cart"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>Rs.150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li class="filter">
                                <a href="#" class="vag">Vegetables</a>
                                <ul class="inerdiv">
                                    <li><a href="./Basic-vegetables">Basic vegetables</a></li>
                                    <li><a href="./Premium-vagitables">Premium vagitables</a></li>
                                </ul>
                            </li>
                            <li class="filter">
                                <a href="#">Fruit</a>
                                <ul class="inerdiv">
                                    <li><a href="./Basic-Fruits">Basic Fruits</a></li>
                                    <li><a href="./Premium-Fruits">Premium Fruits</a></li>
                                </ul>
                            </li>
                            <li class="filter">
                                <a href="#">Dairy Prodcts</a>
                                <ul class="inerdiv">
                                    <li><a href="./Milk-Buttermilk-curd">Milk Buttermilk curd</a></li>
                                    <li><a href="./Paneer-Butter-Chese">Paneer Butter Chese</a></li>
                                    <li><a href="./Chocolates">Chocolates</a></li>
                                </ul>
                            </li>

                            <li class="filter">
                                <a href="#">Snackes & packaged food</a>
                                <ul class="inerdiv">
                                    <li><a href="./Biscuits-cookies">Biscuits & cookies</a></li>
                                    <li><a href="./Drinks-juice">Drinks & juice</a></li>
                                    <li><a href="./Chips-namkins">Chips & namkins</a></li>
                                </ul>
                            </li>

                            <li class="filter">
                                <a href="#">Home</a>
                                <ul class="inerdiv">
                                    <li><a href="./Detergent-cleaners">Detergent & cleaners</a></li>
                                    <li><a href="./Bathroom-Laundries">Bathroom & Laundries</a></li>
                                    <li><a href="./Dishwash">Dishwash</a></li>
                                    <li><a href="./Home-cleaning-tools">Home cleaning & tools</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+91 9265182201</h5>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="shop-grid" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->