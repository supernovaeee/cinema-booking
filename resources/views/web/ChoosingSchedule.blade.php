<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/ChoosingSchedule.css')}}" />
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
    <div class="choosing-schedule">
      <div class="time-picker-frame">
            @foreach($branch as $br)
            <div class="badhe-and-title">
              <div class="title2">
                <img class="title-child" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />
                <div class="grand-indonesia-cgv6">{{$br->branch_name}}</div>
              </div>
            </div>
            @foreach($branch_studio as $bs)
            @if($bs->id_branch == $br->id_branch)
            <div class="all-schedule">
                <div class="cinemas-class-schedule">
                    <div class="badhe-and-title">
                        <div class="gold-class-2d">{{ $bs->studio_name }}</div>
                    </div>
                    <div class="time-schedule2">
                        @foreach($time as $t)
                        @if($bs->id_branch_studio == $t->id_branch_studio)
                        <a class="time-schedule-button3" href="{{route('ChoosingSeats',$t->id_studio_movies)}}">
                            <b class="b9">{{ $t->time }}</b>
                        </a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach
        </div>

      </div>
      <b class="schedule">Schedule</b>
      <div class="choose-the-cinema">
        Choose the cinema schedule that you will watch
      </div>
    @foreach($movies as $m)
      <div class="movie">
        <img class="picture-icon8" alt="" src="{{ asset('css/public-cust/'. $m->photo) }}" />
<!--          add foreach buat list semua add di database juga-->
        <div class="spiderman-no">{{$m->movies_name}}</div>
        <div class="description5">
          <div class="genre">Genre</div>
          <div class="duration">Duration</div>
          <div class="duration">Director</div>
          <div class="duration">Rating</div>
        </div>
        <div class="description-content">
            <div class="genre">{{$m->genre}}</div>
            <div class="duration">{{$m->duration}} minutes</div>
            <div class="duration">{{$m->director}}</div>
            <div class="duration">{{$m->rating}}</div>
        </div>
      </div>
    @endforeach

<!--        Header-->
    <div class="before-login">
        <img
            class="word-only-icon"
            alt=""
            src="{{ asset('css/public-cust/word-only.svg') }}"
            id="wordOnly"
        />

        <div class="home-parent">
            <a class="home13" href="{{route('index')}}">
                <a class="company" href="{{route('index')}}">Home</a>
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

    </div>

    <script>
      var wordOnly = document.getElementById("wordOnly");
      if (wordOnly) {
        wordOnly.addEventListener("click", function (e) {
          window.location.href = "http://127.0.0.1:8000/index";
        });
      }

      var button2 = document.getElementById("button2");
      if (button2) {
        button2.addEventListener("click", function (e) {
          window.location.href = "http://127.0.0.1:8000/MyTicketTransactionList";
        });
      }

      var buttonText13 = document.getElementById("buttonText13");
      if (buttonText13) {
        buttonText13.addEventListener("click", function (e) {
          window.location.href = "http://127.0.0.1:8000/FoodAndBeverage";
        });
      }
      </script>
  </body>
</html>