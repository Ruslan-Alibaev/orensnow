<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS для Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Подключение JS для Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <?php wp_head(); ?>
</head>

<body>
    <!-- <nav class="menu-mob" id="menu">
        <div class="menu-mob__close-btn magic-hover magic-hover__square">
            <i class="menu-mob__close icon-x"></i>
        </div>
        <ul>
            <div class="menu-mob__title">Меню</div>
            <ul class="menu-mob__list">
                <li><a href="<?php echo get_permalink(10); ?>">Главная</a></li>
                <li><a href="<?php echo get_permalink(10); ?>">Пример</a></li>
            </ul>
            <a data-fancybox data-src="#popup__form" class="header__mob-btn magic-hover magic-hover__square">связаться</a>
        </ul>
    </nav> -->

    <nav class="side-menu" id="sideMenu">
        <div class="dropdown">
            <div onclick="myFunction()"><i class="icon-menu dropbtn"></i></div>
            <div id="myDropdown" class="dropdown-content">
                
                    <a href="#price">Цены</a>
                    <a href="#about">О нас</a>
                    <a href="#where">Где кататься?</a>
                    <a href="#reviews">Отзывы</a>
                  <a href="#contacts">Контакты</a>
                
            </div>
        </div>
    </nav>



    <main class="slideout-panel" id="panel">
        <header class="header">
            <div class="header__top">
                <div class="header__inner">
                    <div class="header__top-upper">
                        <div class="header__upper-left">
                            <div class="header__btn-menu magic-hover magic-hover__square">
                                <i class="icon-menu1"></i>
                            </div>
                            <div class="header__btn-name">Меню</div>
                        </div>

                        <div class="header__upper-center header__logo">
                            <a href="https://orenprokat.ru/">
                                <img class="header__logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Оренпрокат">
                            </a>
                        </div>

                        <div class="header__upper-center-items">
                            <a href="#price">Цены</a>
                            <a href="#about">О нас</a>
                            <a href="#where">Где кататься?</a>
                            <a href="#reviews">Отзывы</a>
                            <a href="#contacts">Контакты</a>
                        </div>

                        <div class="header__upper-right">
                            <a href="tel:+73532295909" class="contacts__tel">+7 (3532) 29 59 09</a>

                            <!-- <div class="header__btn-menu magic-hover magic-hover__square dropbtn" onclick="myFunction()">
                                <i class="icon-menu"></i>
                            </div> -->

                        </div>

                      



                    </div>
                </div>
            </div>
        </header>