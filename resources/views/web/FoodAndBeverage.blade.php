<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/FoodAndBeverage.css')}}" />
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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  </head>
  <body>
    <div class="food-and-beverage1">
      <b class="food-and-beverage2">Food and Beverage </b>
      <div class="choose-your-food">Choose your food and beverage<br>*F&B purchased cannot be refund*</div>
        @foreach($food as $f)
        <div class="tix-id-news-card-group">
        <div class="product">
            <img src="{{ asset('css/public-cust/'. $f->fnb_photo) }}" alt="Product Image">
            <div class="product-info">
                <h2 class="product-name">{{$f->fnb_name}}</h2>
                <p class="product-price">{{$f->price}}</p>
                <p class="product-size">Size: {{$f->fnb_desc}}</p>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $f->id_fnb }}">
                    <input type="hidden" name="product_name" value="{{ $f->fnb_name }}">
                    <input type="hidden" name="product_price" value="{{ $f->price }}">
                    <label for="quantity">Quantity:</label>
                    <button type="submit" class="add-to-cart" name="add">
                        <i class="fas fa-shopping-cart"></i>
                        +
                    </button>
                </form>
            </div>
        </div>
        </div>
        @endforeach

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

        <div class="order-summary-parent">
            <div class="order-summary">
                <div class="order-summary">
                    <h2>Order Summary</h2>
                    <div class="item-list">
                        <form action="{{route('payment')}}" method="post">
                            @csrf
                        @foreach(Cart::content() as $item)
                        <a href="{{route('cart.remove',$item->rowId)}}" >x</a>
                        <div class="item">
                            <span class="item-name">{{$item->name}} ({{$item->qty}}x)</span>
                            <input type="hidden" name="qty" value="{{$item->qty}}">
                            <span class="item-price">{{$item->price}}SGD</span>
                        </div>
                        @endforeach
                        <div class="subtotal">
                            <span class="subtotal-label">Subtotal:</span>
                            <span class="subtotal-price">{{Cart::subtotal();}}</span>
                        </div>
                        <div class="service-fee">
                            <span class="service-fee-label">GST(8%):</span>
                            <span class="service-fee-price">{{Cart::tax()}}</span>
                        </div>
                        <div class="ringkasan-order">
                            <span class="total-label">Total:</span>
                            <span class="total-price">{{Cart::total()}}</span>
                            <input type="hidden" name="total" value="{{Cart::total()}}">
                        </div>
                    </div><br>
                    <div class="payment-method">
                        <h3>Payment Method</h3>
                        <h5>
                            <img
                                class="visa-mastercard-american-expre-icon"
                                src="{{ asset('css/public-cust/visamastercardamericanexpresslogosamericanexpress11563310354wrjblwjvhyremovebgpreview-2@2x.png') }}"
                            />
                            <img
                                class="visa-mastercard-american-expre-icon1"
                                src="{{ asset('css/public-cust/visamastercardamericanexpresslogosamericanexpress11563310354wrjblwjvhyremovebgpreview-3@2x.png') }}"
                            />
                            Credit/Debit Card
                        </h5>
                        <label for="cardNumber">Card Number</label>
                        <div class="input-group">
                            <input type="text" id="cardNumber" name="cardNumber" placeholder="XXXX XXXX XXXX XXXX">
                            <span class="icon"><i class="fas fa-credit-card"></i></span>
                        </div>
                        <label for="cardExpiry">Expiration Date</label>
                        <div class="input-group">
                            <input type="text" id="cardExpiry" name="cardExpiry" placeholder="MM / YY">
                            <span class="icon"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <label for="cardCVC">CVC</label>
                        <div class="input-group">
                            <input type="text" id="cardCVC" name="cardCVC" placeholder="XXX">
                            <span class="icon"><i class="fas fa-lock"></i></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button28">
                    <div class="button29">Confirm</div>
                </button>
                </form>
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
