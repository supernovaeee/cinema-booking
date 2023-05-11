<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/PaymentSuccess.css')}}" />
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

        <div class="homepage-link4">
          <a class="home93" href="{{route('index')}}">
            <div class="company5">Home</div>
          </a>
          <a class="home93" href="{{route('MyTicketTransactionList')}}">
            <div class="button104" id="buttonText11">My Tickets</div>
          </a>
          <a class="home93" href="{{route('products.index')}}">
            <div class="button104" id="buttonText12">Food and Beverage</div>
          </a>
          <div class="profile-picture4">
            <img
              class="profile-picture-child1"
              alt=""
              src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
            />

            <div class="m4">M</div>
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
