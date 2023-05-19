<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./create-ticket-type.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/create-ticket-type.css')}}"/>
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
    <div class="create-ticket-type">
      <div class="frame-parent1">
        <a class="icon-short-text-parent5">
          <img
            class="icon-short-text8"
            alt=""
            src="./public/-icon-short-text6.svg"
          />

          <div class="ticket-type4">Ticket Type</div>
        </a>
        <div class="frame-parent2">
          <a class="icon-short-text-parent6" href="{{route('showScreening')}}">
            <img
              class="icon-short-text8"
              alt=""
              src="./public/-icon-short-text1.svg"
            />

            <div class="ticket-type4">Screening</div>
          </a>
          <a class="icon-laptop-parent2" href="{{route('showMovies')}}">
            <img class="icon-laptop4" alt="" src="./public/-icon-laptop.svg" />

            <div class="ticket-type4">Movies</div>
            <img class="vuesaxlinearprofile-icon12" alt="" />
          </a>
        </div>
        <a class="icon-burger-parent2" href="{{route('showFnB')}}">
          <img class="icon-burger4" alt="" src="./public/-icon-burger1.svg" />

          <div class="ticket-type4">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon12" alt="" />
        </a>
      </div>

      <a class="create-ticket-type-inner">
        <div class="vuesaxlinearlogout-parent2">
          <img
            class="vuesaxlinearprofile-icon12"
            alt=""
            src="./public/vuesaxlinearlogout2.svg"
          />

          <a href="{{route('logout')}}" class="logout4">Logout</a>
        </div>
      </a>
      <img class="group-icon4" alt="" src="./public/group3.svg" />

      <a class="text2">Create</a>
      <div class="x-baseunderline2">
        <a class="text3" href="{{route('showTicketType')}}">Ticket Type</a>
      </div>
      <div class="create-ticket-type-child"></div>

      <div class="ticket-type-parent">
          <form action="{{ route('storeTickets') }}" enctype="multipart/form-data" method="post">
              @csrf
        <div class="ticket-type5">Ticket Type</div>
        <div class="price2">Price</div>
      </div>
      <input class="create-ticket-type-item" name="price" type="text" />
      <input class="create-ticket-type-child1" name="type" type="text" />
        <select class="create-ticket-type-item2" name="status">
            <option disabled selected>Select Status</option>
            <option value="0">Active</option>
            <option value="1">Deleted</option>
        </select>
        <button type="submit" class="button10">
            <div class="button11">CREATE</div>
        </button>
        </form>
    </div>
  </body>
</html>
