<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./update-ticket-type.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/update-ticket-type.css')}}"/>
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
    <div class="update-ticket-type">
      <div class="frame-container">
        <a class="icon-short-text-parent1">
          <img
            class="icon-short-text4"
            alt=""
            src="./public/-icon-short-text3.svg"
          />

          <div class="ticket-type2">Ticket Type</div>
        </a>
        <div class="group-div">
          <a class="icon-short-text-parent2" href="{{route('showScreening')}}">
            <img
              class="icon-short-text4"
              alt=""
              src="./public/-icon-short-text4.svg"
            />

            <div class="ticket-type2">Screening</div>
          </a>
          <a class="icon-laptop-container" href="{{route('showMovies')}}">
            <img class="icon-laptop2" alt="" src="./public/-icon-laptop1.svg" />

            <div class="ticket-type2">Movies</div>
            <img class="vuesaxlinearprofile-icon6" alt="" />
          </a>
        </div>
        <a class="icon-burger-container" href="{{route('showFnB')}}">
          <img class="icon-burger2" alt="" src="./public/-icon-burger2.svg" />

          <div class="ticket-type2">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon6" alt="" />
        </a>
      </div>
      <a class="update-ticket-type-inner">
        <div class="vuesaxlinearlogout-container">
          <img
            class="vuesaxlinearprofile-icon6"
            alt=""
            src="./public/vuesaxlinearlogout2.svg"
          />

          <a href="{{route('logout')}}" class="logout2">Logout</a>
        </div>
      </a>
      <img class="group-icon2" alt="" src="./public/group2.svg" />

      <div class="update-ticket-type-child">
        <div class="group-frame">
          <div class="lala-lulu-container">
            <div class="lala-lulu2">Lala Lulu</div>
            <div class="owner2">Owner</div>
          </div>
        </div>
      </div>
      <div class="type-parent">
          <form action="{{ url('updateTicket/' .$tickets->id_ticket_type) }}" enctype="multipart/form-data" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
          <div class="type">Type</div>
        <div class="price">Price</div>
      </div>
      <input class="update-ticket-type-item" name="type" type="text" value="{{$tickets->type}}" />
      <input class="update-ticket-type-child1" name="price" type="text" value="{{$tickets->price}}"/>

        <select class="update-ticket-type-item2" name="status">
            @if ($tickets->status ==0)
            <option disabled>Select Type</option>
            <option value="0" selected>Active</option>
            <option value="1">Deleted</option>
            @else
            <option disabled>Select Type</option>
            <option value="0" >Active</option>
            <option value="1" selected>Deleted</option>
            @endif
        </select>

      <button type="submit" class="button4">
        <div class="button5">UPDATE</div>
      </button>
    </form>
      <a class="button6" href="{{route('showTicketType')}}">
        <div class="button7">back</div>
      </a>

    </div>
  </body>
</html>
