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
                                    <h1 class="heading-section">Наши статьи</h1>
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
                    @foreach($articles as $el)
                    @if ($el-> id == 1 or $el -> id == 2 or $el -> id == 3)
                    <hr class="tm-hr-primary">
                    <a href="/" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                        </div>
                        <a href="/articles/{{$el->id}}"><h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$el->title}}</h2></a>
                        <p class="tm-pt-30">
                                {{$el->description}}
                        </p>
                    </a>
                    @endif
                   @endforeach

            </article>

            <article class="col-12 col-md-6 tm-post" style="left: 500px">
                @foreach($articles as $el)
                    @if ($el-> id == 4 or $el -> id == 5 or $el -> id == 6)
                        <hr class="tm-hr-primary">
                        <a href="/" class="effect-lily tm-post-link tm-pt-60">
                            <div class="tm-post-link-inner">
                                <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                            </div>
                            <a href="/articles/{{$el->id}}"><h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$el->title}}</h2></a>
                            <p class="tm-pt-30">
                                {{$el->description}}
                            </p>
                        </a>
                    @endif
                @endforeach

            </article>



        </div>
    </main>
</div>
</body>
</html>
@endsection
