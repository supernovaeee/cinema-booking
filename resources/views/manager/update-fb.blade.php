<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/update-fb.css')}}"/>
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
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
  </head>
  <body>
    <div class="update-fb">
      <div class="update-fb-inner">
        <div class="group-wrapper4">
          <div class="lala-lulu-parent4">
            <div class="lala-lulu6">Lala Lulu</div>
            <div class="owner6">Owner</div>
          </div>
        </div>
      </div>
      <img class="icon4" alt="" src="./public/icon2.svg" />

      <div class="counter2">
        <div class="div2">0</div>
      </div>
      <img class="icon5" alt="" src="./public/icon2.svg" />

      <div class="update-fb-child"></div>
      <a class="update-fb-inner1">
        <div class="vuesaxlinearlogout-parent5">
          <img
            class="vuesaxlinearlogout-icon7"
            alt=""
            src="./public/vuesaxlinearlogout2.svg"
          />

          <a href="{{route('logout')}}" class="logout7">Logout</a>
        </div>
      </a>
      <img class="group-icon7" alt="" src="./public/group4.svg" />

      <a class="icon-short-text-parent11" href="{{route('showTicketType')}}">
        <img
          class="icon-short-text14"
          alt=""
          src="./public/-icon-short-text7.svg"
        />

        <div class="ticket-type9">Ticket Type</div>
      </a>
      <a class="icon-short-text-parent12" href="{{route('showScreening')}}">
        <img
          class="icon-short-text14"
          alt=""
          src="./public/-icon-short-text7.svg"
        />

        <div class="ticket-type9">Screening</div>
      </a>
      <a class="icon-laptop-parent5" href="{{route('showMovies')}}">
        <img class="icon-laptop7" alt="" src="./public/-icon-laptop.svg" />

        <div class="ticket-type9">Movies</div>
        <img class="vuesaxlinearlogout-icon7" alt="" />
      </a>
      <a class="icon-burger-parent5">
        <img class="icon-burger7" alt="" src="./public/-icon-burger5.svg" />

        <div class="ticket-type9">Food and Beverage</div>
        <img class="vuesaxlinearlogout-icon7" alt="" />
      </a>

        <form action="{{ url('updateFood/' .$fnb->id_fnb) }}" enctype="multipart/form-data" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
        <div class="button15">
            <input type="file" class="button16" name="photo" accept="image/*" value="{{$fnb->fnb_photo}}">
        </div>

      <div class="item1">Item</div>
      <div class="price4">Price</div>
            <div class="type3">Type and Status</div>
            <div class="choose-photo1">Choose Photo</div>
            <div class="choose-photo2">Size</div>
            <select class="update-fb-child2" name="type">
                @if ($fnb->fnb_type == "food")
                <option disabled>Select Type</option>
                <option value="food" selected>Food</option>
                <option value="beverage">Beverage</option>
                @else
                <option disabled>Select Type</option>
                <option value="food" >Food</option>
                <option value="beverage" selected>Beverage</option>
                @endif
            </select>
            <select class="update-fb-item" name="status">
                @if ($fnb->status ==0)
                <option disabled>Select Type</option>
                <option value="0" selected>Active</option>
                <option value="1">Deleted</option>
                @else
                <option disabled>Select Type</option>
                <option value="0" >Active</option>
                <option value="1" selected>Deleted</option>
                @endif
            </select>
        <input class="update-fb-child3" type="text" name="name" value="{{$fnb->fnb_name}}"/>
        <input class="update-fb-child1" type="text" name="price" value="{{$fnb->price}}"/>
        <input class="update-fb-child7" type="text" name="desc" value="{{$fnb->fnb_desc}}"/>

            <button type="submit" class="button14">
            <div class="button15">UPDATE</div>
        </button>
        </form>

        <a class="button18" href="{{route('showFnB')}}">
        <div class="button19">back</div>
      </a>

    </div>
  </body>
</html>
