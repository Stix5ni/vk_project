@extends('layout')

@section('title')О нас@endsection

@section('main_content')
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_4.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1 class="heading-section">О нас и нашем проекте</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-about">
        <div class="container">
            <div class="col-md-6 animate-box">
                <span>О нашем проекте</span>
                <h2>Добро пожаловать на обучающий сайт</h2>
                <p>Этот проект вдохновлён идеей помочь старшему поколению освоить новую для них социальную сеть.</p>
                <p>Наш проект призван разбить барьер интернет-пространства между старшим поколением и молодежью.</p>
                <p>Проект поможет множеству людей самостоятельно разобраться во всём самим, не прося помощи у внуков</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/grandparents.jpg" >
            </div>
        </div>
    </div>

    </div>
    </body>
    </html>
@endsection



