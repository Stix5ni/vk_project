<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />


    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href={{ asset("css/animate.css")}}>
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href={{ asset("css/icomoon.css")}}>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href={{ asset("css/bootstrap.css")}}>

    <!-- Magnific Popup -->
    <link rel="stylesheet" href={{ asset("css/magnific-popup.css")}}>

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href={{ asset("css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{ asset("css/owl.theme.default.min.css")}}>

    <!-- Flexslider  -->
    <link rel="stylesheet" href={{ asset('css/flexslider.css')}}>
    <!-- Pricing -->
    <link rel="stylesheet" href={{ asset('css/pricing.css')}}>

    <!-- Theme style  -->
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

    <!-- Modernizr JS -->
    <script src="{{ asset("js/modernizr-2.6.2.min.js")}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset("js/respond.min.js")}}"></script>
    <![endif]-->

    <!--Style for articles -->
    <link rel="stylesheet" href={{asset("css/all.min.css")}}> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("css/templatemo-xtra-blog.css")}} rel="stylesheet">

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <ul class="fh5co-social">
                            <li><a href="/"><img src="{{asset("images/vk.png")}}" style="width: 25px;"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="/"><img src="{{asset("images/vk.png")}}" style="position: absolute;left: 2px;top: 3px; width: 25px">Вкдлявсех</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="/">Главная страница</a></li>
                            <li><a href="/articles">Статьи</a></li>
                            <li><a href="/about">О нас</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

@yield('main_content')


<footer id="fh5co-footer" role="contentinfo" style="background-image: url({{asset("images/img_bg_4.jpg")}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">Создано командой разработчиков в рамках проекта "ВК для всех"</small>
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- jQuery -->
<script src="{{ asset("js/jquery.min.js")}}"></script>
<!-- jQuery Easing -->
<script src="{{ asset("js/jquery.easing.1.3.js")}}"></script>
<!-- Bootstrap -->
<script src="{{ asset("js/bootstrap.min.js")}}"></script>
<!-- Waypoints -->
<script src="{{ asset("js/jquery.waypoints.min.js")}}"></script>
<!-- Stellar Parallax -->
<script src="{{ asset("js/jquery.stellar.min.js")}}"></script>
<!-- Carousel -->
<script src="{{ asset("js/owl.carousel.min.js")}}"></script>
<!-- Flexslider -->
<script src="{{ asset("js/jquery.flexslider-min.js")}}"></script>
<!-- countTo -->
<script src="{{ asset("js/jquery.countTo.js")}}"></script>
<!-- Magnific Popup -->
<script src="{{ asset("js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{ asset("js/magnific-popup-options.js")}}"></script>
<!-- Count Down -->
<script src="{{ asset("js/simplyCountdown.js")}}"></script>
<!-- Main -->
<script src="{{ asset("js/main.js")}}" ></script>

</body>
</html>
