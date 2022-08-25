@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>Наш сайт сделан от настоящего поколения к прошлому</h1>
                                    <p><a class="btn btn-primary btn-lg" href="/">Начни сейчас!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>Самое понятное и простое объясненние</h1>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="/">Начни сейчас!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>Мы поможем тебе освоиться в сети ВК</h1>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="/">Начни сейчас!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-course-categories">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>О чём эти уроки?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span>
							<img src="images/vk_communication.png" style=" position: absolute;left: 88px;top: 30px; width: 75px;">
						</span>
                        <div class="desc">
                            <h3><a href="/articles/5" style="position: relative; top: 115px;">Общение</a></h3>
                            <p style="position: relative; top: 115px;">Начни общаться со своими друзьями, внучками и внуками в одной из самых популряных соц.сетей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span>
							<img src="images/communities.jpg" style="width: 75px; position: absolute; top: 30px; left: 88px;">
						</span>
                        <div class="desc">
                            <h3><a href="/articles/2" style="position: relative; top: 115px">Сообщества</a></h3>
                            <p style="position: relative; top: 115px;">Создай свою группу и получай миллионы просмотров от всевозможной аудитории.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span>
							<img src="images/music.jpg" style=" position: absolute;left: 88px;top: 30px; width: 75px;">
						</span>
                        <div class="desc">
                            <h3 style="position: relative; top: 115px;"><a href="/articles/3">Музыка</a></h3>
                            <p style="position: relative; top: 115px;">Наслаждайся любимыми мелодиями своего прошлого или же слушай новинки этого десятилетия.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span>
							<img src="images/news.Png" style=" position: absolute;left: 88px;top: 30px; width: 75px;">
						</span>
                        <div class="desc">
                            <h3 style="position: relative; top: 115px;"><a href="/articles/4">Новости</a></h3>
                            <p style="position: relative; top: 115px;">Будь в курсе всех проишествий всех масштабов: от подъездных до общемировых.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    </div>

    </body>
    </html>
@endsection


