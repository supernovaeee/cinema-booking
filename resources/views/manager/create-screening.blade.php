<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./create-screening.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/create-screening.css')}}"/>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker/jquery.datetimepicker.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery-datetimepicker/jquery.datetimepicker.full.min.js"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  </head>
  <body>
    <div class="create-screening">
      <div class="frame-group">
        <a class="icon-short-text-container" href="{{route('showTicketType')}}">
          <img
            class="icon-short-text2"
            alt=""
            src="./public/-icon-short-text1.svg"
          />

          <div class="text">Ticket Type</div>
        </a>
        <a class="frame-a">
          <img
            class="icon-short-text2"
            alt=""
            src="./public/-icon-short-text2.svg"
          />

          <div class="text">Screening</div>
        </a>
        <a class="icon-laptop-group" href="{{route('showMovies')}}">
          <img class="icon-laptop1" alt="" src="./public/-icon-laptop.svg" />

          <div class="text">Movies</div>
          <img class="vuesaxlinearprofile-icon3" alt="" />
        </a>
        <a class="icon-burger-group" href="{{route('showFnB')}}">
          <img class="icon-burger1" alt="" src="./public/-icon-burger1.svg" />

          <div class="text">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon3" alt="" />
        </a>
      </div>
      <a class="create-screening-inner">
        <div class="vuesaxlinearlogout-group">
          <img
            class="vuesaxlinearprofile-icon3"
            alt=""
            src="./public/vuesaxlinearlogout1.svg"
          />

          <a href="{{route('logout')}}" class="logout1">Logout</a>
        </div>
      </a>
      <img class="group-icon1" alt="" src="./public/group1.svg" />

      <div class="create-screening-child">
        <div class="group-container">
          <div class="lala-lulu-group">
            <div class="lala-lulu1">Lala Lulu</div>
            <div class="owner1">Owner</div>
          </div>
        </div>
      </div>
      <img class="icon" alt="" src="./public/icon.svg" />

      <div class="counter">
        <div class="div">0</div>
      </div>
      <img class="icon1" alt="" src="./public/icon.svg" />


      <div class="movie-title-parent">
        <div class="movie-title">Branch-Studio</div>
        <div class="time">Movies</div>
        <div class="director">Time</div>
      </div>

        <form action="{{route('storeScreening')}}" enctype="multipart/form-data" method="post">
            @csrf
        <select class="rectangle-input" name="movies">
            <option disabled selected>Select Movies</option>
            @foreach ($movies as $m)
            <option value="{{$m->id_movies}}">{{$m->movies_name}}</option>
            @endforeach
        </select>
        <select class="create-screening-child1" name="branch-studio">
            <option disabled selected>Select Branch-Studio</option>
            @foreach ($branch as $b)
            <option value="{{$b->id_branch_studio}}">{{$b->branch_name}} - {{$b->studio_name}}</option>
            @endforeach
        </select>
        <input class="create-screening-item"  type="text" id="datetime-input" name="datetime" />
        <button class="button" type="submit">
            <div class="button1">CREATE</div>
        </button>
    </form>


      <a class="x-baseunderline" href="{{route('createMovies')}}">
        <div class="text">Create</div>
      </a>
      <a class="x-baseunderline1" href="{{route('showScreening')}}">
        <div class="text">Screening</div>
      </a>
      <div class="line-div"></div>

    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  </body>
  <script>

      $(document).ready(function() {
          flatpickr('#datetime-input', {
              enableTime: true,
              dateFormat: "Y-m-d H:i:s",
              time_24hr: true
          });
      });
  </script>

</html>
