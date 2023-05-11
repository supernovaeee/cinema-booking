<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/ChoosingSeats.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />
</head>

<body>
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
            <input type="hidden" value="{{$id}}" name="studio_movies" />
            <input type="hidden" value="{{$price}}" name="price" id="price" />
            @for($i = 1; $i <= 20; $i++) <label class="label">
                <input type="checkbox" name="seats[]" value="{{ $i }}" onclick="handleCheckboxClick(this)">
                <span>{{ $i }}</span>
                </label>
                @endfor <br>
                @for($i = 21; $i <= 120; $i++) <label class="label2">
                    <input type="checkbox" name="seats[]" value="{{ $i }}" onclick="handleCheckboxClick(this)">
                    <span>{{ $i }}</span>
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


        <div class="seat-status">
            <div class="filled">
                <div class="filled-child"></div>
                <b class="selected">Selected</b>
            </div>
            <div class="filled">
                <div class="unfilled-child"></div>
                <b class="selected">Empty</b>
            </div>
            <div class="filled">
                <div class="selected-child"></div>
                <b class="chosen">Chosen</b>
            </div>
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
        <div class="after-login-notif-on6">
            <img class="word-only-icon7" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" id="wordOnly" />

            <div class="homepage-link6">
                <a class="home125" href="{{route('index')}}">
                    <div class="company7">Home</div>
                </a>
                <a class="home125"href="{{route('MyTicketTransactionList')}}">
                    <div class="button138" id="buttonText13">My Tickets</div>
                </a>
                <a class="home125" href="FoodAndBeverage">
                    <div class="button138" id="buttonText14">Food and Beverage</div>
                </a>
                <div class="profile-picture6">
                    <img class="profile-picture-child3" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />

                    <div class="m6">M</div>
                </div>
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
            var priceTotalDiv = document.getElementById('pricetotal');
            var price = document.getElementById('price');
            var totalPrice = selectedSeats.length * price.value;
            priceTotalDiv.innerHTML = "SGD " + totalPrice;
        }
    </script>



</body>

</html>
