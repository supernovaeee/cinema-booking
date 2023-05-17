<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/MyTicketTransactionList.css')}}" />
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


    <div class="my-ticket-transaction-list">
      <div class="my-ticket-transaction-list-child"></div>
      <div class="my-ticket-transaction-list-item"></div>
      <div class="my-ticket">My Ticket</div>
      <div class="list-of-tickets">
        List of tickets and transactions that you have done
      </div>

      <div class="all-ticket">
          @foreach($movies as $mv)
          <div class="content12">
            <img class="picture-icon3" alt="" src="{{ asset('css/public-cust/'. $mv->photo) }}" />
            <div class="description">
              <div class="title-and-date">
                <div class="spiderman-no-way1">{{$mv->movies_name}}</div>
                <div class="kamis-16-desember">{{$mv->time}}</div>
                  <div class="kamis-16-desember">Seats:{{$mv->seats}}</div>
              </div>
              <div class="location">
                  <div class="grand-indonesia-cgv1">{{$mv->type}}</div>
                  <div class="grand-indonesia-cgv1">Total: ${{$mv->total_price}}</div><br>
                  <div class="grand-indonesia-cgv1">{{$mv->branch_name}}</div>
                <div class="regular-2d1">{{$mv->studio_name}}</div>
              </div>
                <button class="status" disabled>
                    <div class="berhasil">{{$mv->order_number}}</div>
                </button>
            </div>
          </div>
          @endforeach

          @foreach($food as $fo)
          <div class="content12">
              <img class="picture-icon3" alt="" src="{{ asset('css/public-cust/'. $fo->fnb_photo) }}" />
              <div class="description">
                  <div class="title-and-date">
                      <div class="spiderman-no-way1">{{$fo->fnb_name}}</div>
                      <div class="kamis-16-desember">
                          Qty:{{$fo->qty}}
                      </div>
                  </div>
                  <div class="location">
                      <div class="grand-indonesia-cgv1">${{$fo->total_price}}</div>
                  </div>
                  <button class="status" disabled>
                      <div class="berhasil">{{$fo->order_number}}</div>
                  </button>
              </div>
          </div>
          @endforeach
    </div>



    <div class="after-login-notif-on3">
        <img
            class="word-only-icon4"
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


        <script>
      var myTicket = document.getElementById("myTicket");
      if (myTicket) {
        myTicket.addEventListener("click", function (e) {
          window.location.href = "TransactionDetail";
        });
      }

      var wordOnly = document.getElementById("wordOnly");
      if (wordOnly) {
        wordOnly.addEventListener("click", function (e) {
          window.location.href = "index";
        });
      }

      var buttonText14 = document.getElementById("buttonText14");
      if (buttonText14) {
        buttonText14.addEventListener("click", function (e) {
          window.location.href = "MyTicketTransactionList";
        });
      }

      var buttonText15 = document.getElementById("buttonText15");
      if (buttonText15) {
        buttonText15.addEventListener("click", function (e) {
          window.location.href = "FoodAndBeverage";
        });
      }
      </script>
  </body>
</html>