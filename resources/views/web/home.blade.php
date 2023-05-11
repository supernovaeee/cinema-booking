<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
    />
</head>
<body>

<div class="homepage">

    <div class="movie-selection">
        <div class="carousel">
            <div class="carousel-inner">
                @foreach($movies as $mv)
                <a class="carousel-item active" href="{{route('ChoosingSchedule',$mv->id_movies)}}">
                    <img src="{{ asset('css/public-cust/'. $mv->photo) }}" alt="Movie 1">
                    <h4><b class="spider-man-no-way">{{$mv->movies_name}}</b></h4>
                </a>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="food-and-beverage-parent">
        <div class="food-and-beverage">Food and Beverage</div>
        <a class="view-all1" href="{{route('products.index')}}">View All</a>
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item-active">
                    @foreach($food as $f)
                    <div class="tix-id-news-card">
                        <div class="title-and-tag">
                            <img class="image-14-icon" src="{{ asset('css/public-cust/'. $f->fnb_photo) }}" alt="Product Image">
                            <div class="title-article-and-date">
                                <div class="the-matrix-resurrections">{{$f->fnb_name}}</div>
                                <div class="nov-2021">${{$f->price}}</div>
                                <div>Size: {{$f->fnb_desc}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="coming-soon-parent">
        <div class="coming-soon">Coming Soon</div>
        <div class="carousel2">
            <div class="carousel-inner"><br><br>
                @foreach($soon as $s)
                <div class="carousel-item active">
                    <img src="{{ asset('css/public-cust/'. $s->photo) }}">
                    <b class="spider-man-no-way">{{$s->movies_name}}</b>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>


    <div class="before-login">
        <img
            class="word-only-icon"
            alt=""
            src="{{ asset('css/public-cust/word-only.svg') }}"
            id="wordOnly"
        />

        <div class="home-parent">
            <a class="home13">
                <div class="company">Home</div>
            </a>
            <a class="home13" href="{{route('MyTicketTransactionList')}}">
                <a class="button11" href="{{route('MyTicketTransactionList')}}"
                >My Tickets</a
                >
            </a>
            <a class="home13" href="{{route('products.index')}}">
                <a class="button11" href="{{route('products.index')}}"
                >Food and Beverage</a
                >
            </a>
            @if(Auth::check())
            <a class="button13" href="{{route('logout')}}">
                <div class="button14">{{Auth::user()->name}}</div>
            </a>
            @else
            <div class="frame-child"></div>
            <a class="register" href="{{route('signup')}}" id="register"
            >Register</a
            >
            <a class="button13" href="{{route('login')}}">
                <div class="button14">Login</div>
            </a>
            @endif
        </div>
    </div>
</div>


<script>
    var spidermanNoWayHome = document.getElementById("spidermanNoWayHome");
    if (spidermanNoWayHome) {
        spidermanNoWayHome.addEventListener("click", function (e) {
            window.location.href = "ChoosingSchedule";
        });
    }

    var wordOnly = document.getElementById("wordOnly");
    if (wordOnly) {
        wordOnly.addEventListener("click", function (e) {
            window.location.href = "index";
        });
    }

    var register = document.getElementById("register");
    if (register) {
        register.addEventListener("click", function (e) {
            window.location.href = "SignUpTixID";
        });
    }
</script>
</body>
</html>
