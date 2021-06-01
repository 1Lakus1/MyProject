<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="https://kit.fontawesome.com/0470f40f2a.js" crossorigin="anonymous"></script>
    <title>Shop</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <a href="#" class="header__link">
                    <div class="logo">
                        <img src="src/images/logo.svg" alt="" class="logo__img">
                        <h1 class="logo__title">BICYCLE SHOP</h1>
                    </div>
                </a>
                <nav class="nav">
                    <a href="#" class="nav__link">Road</a>
                    <a href="#" class="nav__link">Mountain</a>
                    <a href="#" class="nav__link">Hybrid</a>
                    <a href="#" class="nav__link">Electrics</a>
                </nav>
                <a class = "login" href = "#">LogIn</a>
            </div>
        </div>
    </header>
    <?php require $layout_path;?>
    <footer class="footer">
        <div class="container">
            <div class="footer_wrapper">
                <div class="footer__title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="footer__contacts">
                    <div class="footer__left">
                        <div class="contacts__item">
                            <i class="fa fa-phone"></i> +380631234567
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope-square"></i> bicycles.bicycles@gmail.com
                        </div>
                    </div>
                    <div class="footer__right">
                        <div class="contacts__item">
                            <i class="fa fa-telegram"></i> @Bicycles20centre
                        </div>
                        <div class="contacts__item">
                            <i class="fa fa-instagram"></i> _Bicycles_
                        </div>
                        <div class="contacts__item">
                            <i class="fa fa-whatsapp"></i> +380631234567
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/slider.js"></script>
</html>
