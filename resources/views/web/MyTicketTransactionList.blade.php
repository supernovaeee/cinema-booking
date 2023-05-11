<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/MyTicketTransactionList.css')}}" />
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
  <div class="homepage-link3">
      <a class="home77" href="{{route('index')}}">
          <div class="company4">Home</div>
      </a>
      <a class="home77" href="{{route('MyTicketTransactionList')}}">
          <div class="button89" id="buttonText14">My Tickets</div>
      </a>
      <a class="home77" href="{{route('products.index')}}">
          <div class="button89" id="buttonText15">Food and Beverage</div>
      </a>
      <div class="profile-picture3">
          <img class="ellipse-icon" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />

          <div class="m3">M</div>
      </div>
  </div>

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
                <div class="kamis-16-desember">
                    {{$mv->time}}
                </div>
              </div>
              <div class="location">
                  <div class="grand-indonesia-cgv1">{{$mv->total_price}}</div>
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
                          {{$fo->qty}}
                      </div>
                  </div>
                  <div class="location">
                      <div class="grand-indonesia-cgv1">{{$fo->total_price}}</div>
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
