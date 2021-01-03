</head>
<?php 
// check the url
    $file_url = htmlspecialchars(basename($_SERVER['PHP_SELF'],'.php'), ENT_QUOTES, "utf-8"); 
    
?>

<body>
    <a id="top"></a>
    <!-- Pre-loader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader_inner"></div>
            <div class="loader_inner"></div>
        </div>
    </div>
<!--Mobile nav is called NAVIGATION-->
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <img src="../vendors/images/main-logo.png" alt="لوگو میزبان نت" class="navigation__img">

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="../" class="navigation__link">خانه</a></li>
                <li class="navigation__item" id="dropdown">
                    <a href="./"  class="navigation__link"><span style="transform:rotate(90deg);">&rsaquo;</span> خرید هاست</a>
                        <div class="navigation__link--dropdown">
                            <ul>
                                <li><a href="linux_hosting">هاست لینوکس</a></li>
                                <li><a href="wordpress_hosting">هاست وردپرس</a></li>
                                <!-- <li><a href="ecommerce_hosting">هاست فروشگاهی</a></li> -->
                            </ul>
                        </div>
                </li>
                <!-- <li class="navigation__item"><a href="/business_package" class="navigation__link">پکیج بیزینس</a></li> -->
                <li class="main-nav__item dropdown">
                    <a href="../domain" class="main-nav__link">دامنه</a>
                    <div class="main-nav__link--dropdown">
                        <ul>
                            <li><a href="../domain/ir_domain">ثبت دامنه ir</a></li>
                        </ul>
                    </div>
                </li>
                <li class="navigation__item"><a href="../blog" class="navigation__link">بلاگ</a></li>
                <li class="navigation__item"><a href="../contact" class="navigation__link">تماس با ما</a></li>
            </ul>
        </nav>
    </div>
    

    <header class="header">
        <!--TOP NAV-->
        <nav class="top-nav">
            <div class="container row">
                <img class="top-nav__logo" src="../vendors/images/main-logo-rendered.png" alt="لوگو اصلی سایت میزبان نت">
                
                
                <div class="top-nav__contact">
                    <!--<a class="link" href="" class="top-nav__phone">-->
                    <!--    <i class="fas fa-headset"></i>021-10203040-->
                    <!--</a>-->
                    <a class="link" href="mailto:info@mizbannet.com" class="top-nav__mail">
                        <i class="fas fa-at"></i>support[at]mizbannet[dot]com
                    </a>
                    <a class="link" href="/index.php" class="top-nav__website">
                        <i class="fas fa-globe"></i>www.mizbannet.com
                    </a>
                </div>
                
                <div class="top-nav__user">
                    <a class="link" href="https://client.mizbannet.com/clientarea.php" class="top-nav__login"><i class="fas fa-user"></i></a>
                    <a class="link" href="https://client.mizbannet.com/cart.php?a=view" class="top-nav__cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </nav>
        <nav class="main-nav">
            <div class="container row">
    
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a href="../" class="main-nav__link">خانه</a></li>
                    <li class="main-nav__item dropdown">
                        <a href="./" class="main-nav__link nav-active">خرید هاست</a>
                        <div class="main-nav__link--dropdown">
                            <ul>
                                <li><a href="linux_hosting" <?php if ($file_url == 'linux_hosting') echo "class='nav-active'"; ?>>هاست لینوکس</a></li>
                                <li><a href="wordpress_hosting" <?php if ($file_url == 'wordpress_hosting') echo "class='nav-active'"; ?>>هاست وردپرس</a></li>
                                <!-- <li><a href="ecommerce_hosting" <?php if ($file_url == 'ecommerce_hosting') echo "class='nav-active'"; ?>>هاست فروشگاهی</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="main-nav__item"><a href="business_package" class="main-nav__link <?php if ($file_url == 'business_package') echo 'nav-active'; ?>">پکیج بیزینس</a></li> -->
                    <li class="main-nav__item dropdown">
                        <a href="../domain" class="main-nav__link">دامنه</a>
                        <div class="main-nav__link--dropdown">
                            <ul>
                                <li><a href="../domain/ir_domain">ثبت دامنه ir</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="main-nav__item"><a href="../blog" class="main-nav__link">بلاگ</a></li>
                    <li class="main-nav__item"><a href="../contact" class="main-nav__link">تماس با ما</a></li>
                </ul>
                <div class="main-nav__logo-box">
                    <a class="main-nav__logo" href="../"><img class="main-nav__logo--img" src="../vendors/images/main-logo.png" alt="لوگو میزبان نت - خرید هاست و دامنه ارزان"></a>
                </div>
                
            </div>
        </nav>

    </header>