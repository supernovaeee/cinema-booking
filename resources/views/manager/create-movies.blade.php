<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./create-movies.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/create-movies.css')}}"/>
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
    <div class="create-movies">
      <div class="frame-parent9">
        <a class="icon-short-text-parent25" href="{{route('showTicketType')}}">
          <img
            class="icon-short-text28"
            alt=""
            src="./public/-icon-short-text10.svg"
          />

          <div class="ticket-type16">Ticket Type</div>
        </a>
        <a class="icon-short-text-parent26" href="{{route('showScreening')}}">
          <img
            class="icon-short-text28"
            alt=""
            src="./public/-icon-short-text7.svg"
          />

          <div class="ticket-type16">Screening</div>
        </a>
        <a class="icon-laptop-parent12">
          <img class="icon-laptop14" alt="" src="./public/-icon-laptop2.svg" />

          <div class="ticket-type16">Movies</div>
          <img class="vuesaxlinearprofile-icon42" alt="" />
        </a>
        <a class="icon-burger-parent12" href="{{route('showFnB')}}">
          <img class="icon-burger14" alt="" src="./public/-icon-burger8.svg" />

          <div class="ticket-type16">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon42" alt="" />
        </a>
      </div>
      <a class="create-movies-inner">
        <div class="vuesaxlinearlogout-parent12">
          <img
            class="vuesaxlinearprofile-icon42"
            alt=""
            src="./public/vuesaxlinearlogout4.svg"
          />

          <a href="{{route('logout')}}" class="logout14">Logout</a>
        </div>
      </a>
      <img class="group-icon14" alt="" src="./public/group6.svg" />

      <div class="create-movies-child">
        <div class="group-wrapper11">
          <div class="lala-lulu-parent11">
            <div class="lala-lulu13">Lala Lulu</div>
            <div class="owner12">Owner</div>
          </div>
        </div>
      </div>
      <img class="icon10" alt="" src="./public/icon5.svg" />

      <div class="counter5">
        <div class="div5">0</div>
      </div>
      <img class="icon11" alt="" src="./public/icon5.svg" />

      <div class="text12">Create</div>
      <a class="x-baseunderline10" href="{{route('showMovies')}}">
        <img class="icon12" alt="" src="./public/icon5.svg" />

        <div class="counter6">
          <div class="div5">0</div>
        </div>
        <img class="icon12" alt="" src="./public/icon5.svg" />

        <div class="text13">Movies</div>
      </a>
      <div class="create-movies-item"></div>
        <form action="{{route('storeMovies')}}" method="post" enctype="multipart/form-data">
            @csrf
      <input type="file" class="button35" accept="image/*" name="photo">
      <div class="movie-title-parent1">
        <div class="movie-title4">Movie Title</div>
        <div class="time4">Duration</div>
        <div class="director3">Genre</div>
        <div class="duration3">Director</div>
        <div class="rating-age3">Rating</div>
        <div class="choose-photo4">Choose Photo</div>
        <div class="synopsis3">Status</div>
      </div>
            <input class="create-movies-child1" type="text" name="genre"/>

            <input class="create-movies-child2" type="text" name="duration"/>

      <input class="create-movies-child3" type="text" name="name"/>

            <select class="create-movies-child4" name="status">
                <option disabled selected>Select Status</option>
                <option value="1"> Active</option>
                <option value="0" >Coming Soon</option>
                <option value="2" >Deleted</option>
            </select>


      <input class="create-movies-child5" type="text" name="rating"/>

      <input class="create-movies-child6" type="text" name="director"/>
            <button type="submit" class="button34">CREATE</button>
        </form>
    </div>
  </body>
</html>
