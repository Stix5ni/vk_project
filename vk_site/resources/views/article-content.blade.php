@extends('article_layout')

@section('title')О нас@endsection

@section('main_content')

    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{asset('images/img_bg_4.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1 class="heading-section">Статья о ВК</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div class="row tm-row">
        <article class="col-12 col-md-6 tm-post" style="left: 500px">
                    <a href="/" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$article->title}}</h2>
                        <img src="{{$article->image}}" style="left: -2px; top: 20px; transform: none">
                        <p class="tm-pt-30">
                            {!! nl2br($article->article) !!}
                        </p>
                    </a>
        </article>
    </div>
    </main>
</div>
</body>
</html>
@endsection


