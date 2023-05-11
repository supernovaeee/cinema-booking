<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/ChoosingSchedule.css')}}" />
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
    <div class="choosing-schedule">
      <div class="time-picker-frame">
        <div class="grand-indonesia">
            @foreach($branch as $br)
          <div class="location-and-cinemas-badge">
            <div class="badhe-and-title">
              <div class="title2">
                <img class="title-child" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />
                <div class="grand-indonesia-cgv6">{{$br->branch_name}}</div>
              </div>
              <div class="badge20">
                <b class="cgv5">Cathay</b>
              </div>
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

<!--        Footer-->
      <div class="divider26"></div>
      <div class="footer8">
        <div class="footers-description8">
          <div class="grand-indonesia">
            <div class="oct5">Company</div>
            <div class="content29">
              <div class="home128">
                <div class="duration">Contact Us</div>
              </div>
              <div class="home128">
                <div class="duration">About Us</div>
              </div>
              <div class="home128">
                <div class="duration">Partnering</div>
              </div>
            </div>
          </div>
          <div class="grand-indonesia">
            <div class="oct5">Services</div>
            <div class="content29">
              <div class="home128">
                <div class="duration">Theaters</div>
              </div>
              <div class="home128">
                <div class="duration">My Tickets</div>
              </div>
              <div class="home128">
                <div class="duration">Food and Beverage</div>
              </div>
              <div class="home128">
                <div class="duration">Payments</div>
              </div>
              <div class="home128">
                <div class="duration"></div>
              </div>
            </div>
          </div>
          <div class="grand-indonesia">
            <div class="oct5">Help</div>
            <div class="content29">
              <div class="home128">
                <div class="duration">Terms and Condition</div>
              </div>
              <div class="home128">
                <div class="duration">FAQ</div>
              </div>
              <div class="home128">
                <div class="duration">CSR</div>
              </div>
              <div class="home128">
                <div class="duration"></div>
              </div>
              <div class="home128">
                <div class="duration"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="social-media-and-download-apps8">
          <div class="follow-social-media-parent6">
            <div class="oct5">Follow Social Media</div>
            <div class="instagram-parent6">
              <img
                class="instagram-icon8"
                alt=""
                src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
              />

              <img
                class="instagram-icon8"
                alt=""
                src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
              />

              <img
                class="instagram-icon8"
                alt=""
                src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
              />
            </div>
          </div>
        </div>
        <div class="divider27"></div>
        <img class="group-icon8" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />
      </div>
      <div class="after-login-notif-on7">
        <img
          class="word-only-icon8"
          alt=""
          src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
          id="wordOnly"
        />

        <div class="homepage-link7">
          <a class="home141" href="{{route('index')}}">
            <a class="button155" href="{{route('index')}}">Home</a>
          </a>
          <a class="home141" href="{{route('MyTicketTransactionList')}}">
            <a
              class="button156"
              href="{{route('MyTicketTransactionList')}}"
              id="button2"
              >My Tickets</a
            >
          </a>
          <a class="home141" href="http://127.0.0.1:8000/FoodAndBeverage">
            <div class="button157" id="buttonText13">Food and Beverage</div>
          </a>
          <div class="profile-picture7">
            <img
              class="profile-picture-child4"
              alt=""
              src="{{ asset('css/public-cust/tix-id-11@2x.png') }}"
            />

            <div class="m7">M</div>
          </div>
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
