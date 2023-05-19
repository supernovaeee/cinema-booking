<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/ChoosingSeats.css')}}" />
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

<body onload="disableSeats()">
    <div class="choosing-seats">
        <b class="choose-seats">CHOOSE SEATS</b>

        <div class="choose-the-seat">
        @if($errors->any())
        <div style="background-color: red;color:white">
            {{ $errors->first() }}
        </div>
        @endif
            Choose the seat that you will occupy during the screening<br>
            *INCLUDE GST(8%)*<br>
             PLEASE ENTER CARD DETAILS FOR PAYMENT BELOW
        </div>
        <form action="{{route('chooseSeats')}}" method="post">
            @csrf
            <div class="seat-status">
                <label for="ticket_type">Select ticket type:</label>
                <select id="ticket_type" name="ticket_type">
                    @foreach($tickets as $t)
                    <option value="{{$t->id_ticket_type}}">{{$t->type}}</option>
                    @endforeach
                </select>
            </div>
            @foreach($tickets as $t)
            <input type="hidden" value="{{$t->id_ticket_type}}" id="id_ticket_type" />
            <input type="hidden" value="{{$t->ticket_type}}" id="ticket_name" />
            <input type="hidden" value="{{$t->price}}" id="ticket_price" />
            @endforeach
            <input type="hidden" value="{{$id}}" name="studio_movies" />
            <input type="hidden" value="{{$price}}" name="price" id="price" />

            @for($i = 1; $i <= 20; $i++) <label class="label">
                @php
                $disabled = in_array($i, $dseat);
                $displayValue = $disabled ? 'X' : $i;
                @endphp
                <input type="checkbox" name="seats[]" id="dd" value="{{ $i }}" onclick="handleCheckboxClick(this)" @if($disabled) disabled @endif>
                <span>{{ $displayValue }}</span>
                </label>
                @endfor <br>

            @for($i = 21; $i <= 120; $i++)
            @php
            $disabled = in_array($i, $dseat);
            $displayValue = $disabled ? 'X' : $i;
            @endphp
            <label class="label2">
                <input type="checkbox" name="seats[]" id="dd" value="{{ $i }}" onclick="handleCheckboxClick(this)" @if($disabled) disabled @endif>
                <span>{{ $displayValue }}</span>
            </label>
            @if ($i % 20 == 0)
            <br>
            @endif
            @endfor
                    <br>
                    <br>

                    <button type="submit" class="button125">
                        <div class="button124">Confirm</div>
                    </button>
        </form>


        <div class="layar-bioskop">
            <b class="screen">Screen</b>
        </div>


        <div class="total">Total</div>
        <div class="seats1">Seats</div>
        <b class="sgd-30" id="pricetotal">SGD ...</b>
        <div class="seat4">
            <b class="c8-c9-c101" id="result">...</b>
        </div>

        <div class="footer7">
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
            wordOnly.addEventListener("click", function(e) {
                window.location.href = "index";
            });
        }

        var buttonText13 = document.getElementById("buttonText13");
        if (buttonText13) {
            buttonText13.addEventListener("click", function(e) {
                window.location.href = "MyTicketTransactionList";
            });
        }

        var buttonText14 = document.getElementById("buttonText14");
        if (buttonText14) {
            buttonText14.addEventListener("click", function(e) {
                window.location.href = "FoodAndBeverage";
            });
        }
    </script>

    <script>
        var selectedSeats = [];

        function handleCheckboxClick(checkbox) {
            var seatValue = checkbox.value;

            if (checkbox.checked) {
                selectedSeats.push(seatValue);
            } else {
                var index = selectedSeats.indexOf(seatValue);
                if (index !== -1) {
                    selectedSeats.splice(index, 1);
                }
            }

            updateResult();
            updatePriceTotal();
        }

        function updateResult() {
            var resultDiv = document.getElementById('result');
            resultDiv.innerHTML = selectedSeats.join(', ');
        }

        function updatePriceTotal() {
            var ticketTypeSelect = document.getElementById("ticket_type");
            var priceTotalDiv = document.getElementById('pricetotal');
            var price = parseFloat(document.getElementById('price').value);

            if (ticketTypeSelect.value == "1") {
                price = price - 0;
            } else if (ticketTypeSelect.value == "2") {
                price = price - 5;
            } else if (ticketTypeSelect.value == "3") {
                price = price - 3;
            }
            var totalPrice = selectedSeats.length * price;
            priceTotalDiv.innerHTML = "SGD " + totalPrice;
        }

    </script>
</body>
</html>
