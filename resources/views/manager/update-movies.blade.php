<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./update-movies.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/update-movies.css')}}"/>
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
  </head>
  <body>
    <div class="update-movies">
      <div class="frame-parent6">
        <a class="icon-short-text-parent19" href="{{route('showTicketType')}}">
          <img
            class="icon-short-text22"
            alt=""
            src="./public/-icon-short-text8.svg"
          />

          <div class="ticket-type13">Ticket Type</div>
        </a>
        <a class="icon-short-text-parent20" href="{{route('showScreening')}}">
          <img
            class="icon-short-text22"
            alt=""
            src="./public/-icon-short-text9.svg"
          />

          <div class="ticket-type13">Screening</div>
        </a>
        <a class="icon-laptop-parent9">
          <img class="icon-laptop11" alt="" src="./public/-icon-laptop2.svg" />

          <div class="ticket-type13">Movies</div>
          <img class="vuesaxlinearprofile-icon33" alt="" />
        </a>
        <a class="icon-burger-parent9" href="{{route('showFnB')}}">
          <img class="icon-burger11" alt="" src="./public/-icon-burger7.svg" />

          <div class="ticket-type13">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon33" alt="" />
        </a>
      </div>
      <a class="update-movies-inner">
        <div class="vuesaxlinearlogout-parent9">
          <img
            class="vuesaxlinearprofile-icon33"
            alt=""
            src="./public/vuesaxlinearlogout3.svg"
          />

          <a href="{{route('logout')}}" class="logout11">Logout</a>
        </div>
      </a>
      <img class="group-icon11" alt="" src="./public/group5.svg" />

      <div class="update-movies-child">
        <div class="group-wrapper8">
          <div class="lala-lulu-parent8">
            <div class="lala-lulu10">Lala Lulu</div>
            <div class="owner9">Owner</div>
          </div>
        </div>
      </div>
      <img class="icon6" alt="" src="./public/icon3.svg" />

      <div class="counter3">
        <div class="div3">0</div>
      </div>
      <img class="icon7" alt="" src="./public/icon3.svg" />
      <a class="button28" href="{{route('showMovies')}}">
        <div class="button29">back</div>
      </a>
        <form action="{{ url('update/' .$movies->id_movies) }}" enctype="multipart/form-data" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
      <input type="file" class="button30" name="photo" accept="image/*" value="{{$movies->photo}}"/>
      <div class="movie-title-group">
        <div class="movie-title2">Movie Title</div>
        <div class="time2">Duration</div>
        <div class="director1">Genre</div>
        <div class="duration1">Director</div>
        <div class="rating-age1">Rating</div>
        <div class="choose-photo3">Choose Photo</div>
        <div class="synopsis1">Status</div>
      </div>

            <input class="update-movies-item" name="genre" value="{{$movies->genre}}" type="text" />

            <input class="update-movies-child1" name="duration" type="text" value="{{$movies->duration}}"/>

      <input class="update-movies-child2" name="name" type="text"  value="{{$movies->movies_name}}"/>

            <select class="update-movies-child3" name="status">
                @if ($movies->screening_status == 1)
                <option value="1" selected>Coming Soon</option>
                <option value="0">Active</option>
                <option value="2">Deleted</option>
                @elseif ($movies->screening_status == 0)
                <option value="0" selected>Active</option>
                <option value="1">Coming Soon</option>
                <option value="2">Deleted</option>
                @else
                <option value="0">Active</option>
                <option value="1">Coming Soon</option>
                <option value="2" selected>Deleted</option>
                @endif
            </select>

      <input class="update-movies-child4" name="rating" type="text"  value="{{$movies->rating}}"/>

      <input class="update-movies-child5" name="director" type="text"  value="{{$movies->director}}"/>

        <button type="submit" class="button26">
            <div class="button27">UPDATE</div>
        </button>
    </form>

    </div>
  </body>
</html>
