<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/review.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
</head>

<body>
<div class="before-login">
    <img
        class="word-only-icon"
        alt=""
        src="{{ asset('css/public-cust/word-only.svg') }}"
        id="wordOnly"
    />

    <div class="home-parent">
        <a class="home13" href="{{route('index')}}">
            <a href="{{route('index')}}" class="company">Home</a>
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
        <p>{{Auth::user()->name}}</p>
        <a class="button13" href="{{route('logout')}}">
            <div class="button14">Logout</div>
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
<br><br><br><br>
<div class="container">
    <h1>Movie Review</h1>
    <form action="{{route('submitReview')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="movie-name">Movie Name</label>
            <select name="movies">
                @foreach($movies as $m)
                <option value="{{$m->movies_name}}">{{$m->movies_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="review">Review</label>
            <input type="text" id="review" name="review">
        </div>
            @if(Auth::check())
            <input type="hidden" id="reviewer-name" name="id_user" value="{{Auth::user()->id}}">
            @endif
        <button type="submit">Submit Review</button>
    </form>

    <hr>

    <h1>All Reviews</h1>
    @foreach($review as $r)
    <div class="review-container">
        <div class="review-header">
            <h2 class="movie-title">{{$r->movies_name}}</h2>
            <p class="review-date">{{$r->created_at}}</p>
        </div>
        <div class="review-content">
            <img class="movie-image" src="{{ asset('css/public-cust/'. $r->photo) }}" alt="Movie Poster">
            <p class="review-text">{{$r->review_desc}}</p>
            <p class="reviewer-name">{{$r->name}}</p>
        </div>
    </div>
    @endforeach

</div>
</body>

</html>