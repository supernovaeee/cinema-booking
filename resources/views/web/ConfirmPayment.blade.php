<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/ConfirmPayment.css')}}" />
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
    <div class="payment">
      <b class="payment-verification">PAYMENT VERIFICATION</b>
      <div class="enter-your-debitcredit">
        ENTER YOUR DEBIT/CREDIT CARD dETAILS
      </div>
      <div class="detail-order">
        <div class="card-details">Card Details</div>
        <div class="movie-title">
          <div class="name-on-card">Name on Card</div>
        </div>
        <div class="movie-title1">
          <div class="name-on-card">Lalala lululu</div>
        </div>
        <div class="date">
          <div class="name-on-card">Card Number</div>
        </div>
        <div class="date1">
          <div class="name-on-card">123456789</div>
        </div>
        <div class="class">
          <div class="name-on-card">Expiry Date</div>
        </div>
        <div class="div1">02/25</div>
        <div class="div2">355</div>
        <div class="seat1">
          <div class="name-on-card">CVV</div>
        </div>
        <div class="divider5"></div>
        <div class="divider6"></div>
        <div class="divider7"></div>
      </div>
      <div class="payment-child"></div>
      <div class="footer2">
        <div class="footers-description2">
          <div class="footer-content6">
            <div class="company2">Company</div>
            <div class="content6">
              <div class="home32">
                <div class="name-on-card">Contact Us</div>
              </div>
              <div class="home32">
                <div class="name-on-card">About Us</div>
              </div>
              <div class="home32">
                <div class="name-on-card">Partnering</div>
              </div>
            </div>
          </div>
          <div class="footer-content6">
            <div class="company2">Services</div>
            <div class="content6">
              <div class="home32">
                <div class="name-on-card">Theaters</div>
              </div>
              <div class="home32">
                <div class="name-on-card">My Tickets</div>
              </div>
              <div class="home32">
                <div class="name-on-card">Food and Beverage</div>
              </div>
              <div class="home32">
                <div class="name-on-card">Payments</div>
              </div>
              <input class="home39" type="text" />
            </div>
          </div>
          <div class="footer-content6">
            <div class="company2">Help</div>
            <div class="content6">
              <div class="home32">
                <div class="name-on-card">Terms and Condition</div>
              </div>
              <div class="home32">
                <div class="name-on-card">FAQ</div>
              </div>
              <div class="home32">
                <div class="name-on-card">CSR</div>
              </div>
              <input class="home39" type="text" />

              <input class="home39" type="text" />
            </div>
          </div>
        </div>
        <div class="social-media-and-download-apps2">
          <div class="follow-social-media-container">
            <div class="company2">Follow Social Media</div>
            <div class="instagram-container">
              <img
                class="instagram-icon2"
                alt=""
                src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
              />

              <img
                class="instagram-icon2"
                alt=""
                src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
              />

              <button class="facebook">
                <img class="icon" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />
              </button>
            </div>
          </div>
        </div>
        <div class="divider8"></div>
        <img class="group-icon2" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />
      </div>
      <div class="visa-mastercard-american-expre"></div>
      <img
        class="visa-mastercard-american-expre-icon2"
        alt=""
        src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
      />

      <img
        class="visa-mastercard-american-expre-icon3"
        alt=""
        src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
      />

      <a class="button40" href="PaymentSuccess">
        <div class="button41">Confirm</div>
      </a>
      <div class="after-login-notif-on1">
        <img
          class="word-only-icon2"
          alt=""
          src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
          id="wordOnly"
        />

        <div class="homepage-link1">
          <a class="home45" href="index">
            <div class="company2">Home</div>
          </a>
          <a class="home45" href="MyTicketTransactionList">
            <div class="button43" id="buttonText11">My Tickets</div>
          </a>
          <a class="home45" href="FoodAndBeverage">
            <div class="button43" id="buttonText12">Food and Beverage</div>
          </a>
          <div class="profile-picture1">
            <img
              class="profile-picture-item"
              alt=""
              src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
            />

            <div class="m1">M</div>
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
