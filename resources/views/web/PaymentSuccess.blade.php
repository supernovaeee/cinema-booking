<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/PaymentSuccess.css')}}" />
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
    <div class="payment-success">
      <b class="payment-succesfull">Payment Successful</b>
      <div class="transaction-details-have">
        Transaction details have been sent to your email, you can also check
        other ticket details on my ticket either on the website or on your
        smartphone.
      </div>
      <a class="button91" href="MyTicketTransactionList">
        <div class="button92">My Tickets</div>
      </a>
      <img class="clapperboard-icon" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />

      <img class="movie-roll-icon" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />

      <div class="after-login-notif-on4">
        <img
          class="word-only-icon5"
          alt=""
          src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
          id="wordOnly"
        />

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
      </div>
    </div>

    <script>
      var wordOnly = document.getElementById("wordOnly");
      if (wordOnly) {
        wordOnly.addEventListener("click", function (e) {
          window.location.href = "index";
        });
      }

      var buttonText11 = document.getElementById("buttonText11");
      if (buttonText11) {
        buttonText11.addEventListener("click", function (e) {
          window.location.href = "MyTicketTransactionList";
        });
      }

      var buttonText12 = document.getElementById("buttonText12");
      if (buttonText12) {
        buttonText12.addEventListener("click", function (e) {
          window.location.href = "FoodAndBeverage";
        });
      }
      </script>
  </body>
</html>