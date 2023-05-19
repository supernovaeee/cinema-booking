<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/create-fb.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/update-fb.css')}}"/>

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
    <div class="create-fb">
      <div class="create-fb-inner">
        <div class="group-wrapper5">
          <div class="lala-lulu-parent5">
            <div class="lala-lulu7">Lala Lulu</div>
            <div class="owner7">Owner</div>
          </div>
        </div>
      </div>
      <div class="text-parent">
        <a class="text6">Create</a>
        <a class="x-baseunderline5" href="{{route('showFnB')}}">
          <div class="text7">F&B</div>
        </a>
        <div class="group-child"></div>
      </div>
<!--      <button class="button20">-->
<!--        <div class="button21">CREATE</div>-->
<!--      </button>-->
      <div class="create-fb-child"></div>
      <a class="create-fb-inner1">
        <div class="vuesaxlinearlogout-parent6">
          <img
            class="vuesaxlinearlogout-icon8"
            alt=""
            src="./public/vuesaxlinearlogout2.svg"
          />

          <a href="{{route('logout')}}" class="logout8">Logout</a>
        </div>
      </a>
      <img class="group-icon8" alt="" src="./public/group3.svg" />

      <a class="icon-short-text-parent13" href="{{route('showTicketType')}}">
        <img
          class="icon-short-text16"
          alt=""
          src="./public/-icon-short-text7.svg"
        />

        <div class="text7">Ticket Type</div>
      </a>
      <a class="icon-short-text-parent14" href="{{route('showScreening')}}">
        <img
          class="icon-short-text16"
          alt=""
          src="./public/-icon-short-text1.svg"
        />

        <div class="text7">Screening</div>
      </a>
      <a class="icon-laptop-parent6" href="{{route('showMovies')}}">
        <img class="icon-laptop8" alt="" src="./public/-icon-laptop.svg" />

        <div class="text7">Movies</div>
        <img class="vuesaxlinearlogout-icon8" alt="" />
      </a>
      <a class="icon-burger-parent6">
        <img class="icon-burger8" alt="" src="./public/-icon-burger5.svg" />

        <div class="text7">Food and Beverage</div>
        <img class="vuesaxlinearlogout-icon8" alt="" />
      </a>

        <form action="{{route('storeFood')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="button15">
                <input type="file" class="button16" name="photo" accept="image/*">
            </div>
            <div class="item1">Item</div>
            <div class="price4">Price</div>
            <div class="type3">Type and Status</div>
            <div class="choose-photo1">Choose Photo</div>
            <div class="choose-photo2">Size</div>
            <select class="update-fb-child2" name="type">
                <option disabled selected>Select Type</option>
                <option value="food">Food</option>
                <option value="beverage">Beverage</option>
            </select>
            <select class="update-fb-item" name="status">
                <option disabled selected>Select Type</option>
                <option value="0">Active</option>
                <option value="1">Deleted</option>
            </select>
            <input class="update-fb-child3" type="text" name="name"/>
            <input class="update-fb-child1" type="text" name="price"/>
            <input class="update-fb-child7" type="text" name="desc"/>

            <button type="submit" class="button14">
                <div class="button15">CREATE</div>
            </button>
        </form>

    </div>
  </body>
</html>
