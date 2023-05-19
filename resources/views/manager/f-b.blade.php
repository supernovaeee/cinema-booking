<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./f-b.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/f-b.css')}}"/>
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
    <div class="fb">
      <div class="fb-child"></div>
      <a class="fb-inner">
        <div class="vuesaxlinearlogout-parent8">
          <img
            class="vuesaxlinearlogout-icon10"
            alt=""
            src="./public/vuesaxlinearlogout2.svg"
          />

          <a href="{{route('logout')}}" class="logout10">Logout</a>
        </div>
      </a>
      <img class="group-icon10" alt="" src="./public/group3.svg" />

      <div class="fb-inner1">
        <div class="group-wrapper7">
          <div class="lala-lulu-parent7">
            <div class="lala-lulu9">Lala Lulu</div>
            <div class="owner8">Owner</div>
          </div>
        </div>
      </div>
      <a class="x-baseunderline6" href="{{route('createFb')}}">
        <div class="text8">Create</div>
      </a>
      <a class="x-baseunderline7">
        <div class="text8">F&B</div>
      </a>
      <div class="fb-item">
          <div class="box_table">
              <table id="myTable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Type</th>
                      <th>Price</th>
                      <th>Size</th>
                      <th>Status</th>
                      <th width="20%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($fnb as $a)
                  <tr>
                      <td>{{$a->fnb_name}}</td>
                      <td> <img width="50px" height="50px" src="{{ asset('css/public-cust/'. $a->fnb_photo) }}"> </td>
                      <td>{{$a->fnb_type}}</td>
                      <td>${{$a->price}}</td>
                      <td>{{$a->fnb_desc}}</td>
                      <td>
                          @if ($a->status == 0)
                          <p>Active</p>
                          @else
                          <p>Deleted</p>
                          @endif
                      </td>
                      <td>
                          <a href="updateFnB/{{$a->id_fnb}}" class="btn btn-success m-1">Edit</a>
                          <a href="deleteFood/{{$a->id_fnb}}"  class="btn btn-danger m1 btn-hapus">Delete</a>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      <a class="icon-short-text-parent17" href="{{route('showTicketType')}}">
        <img
          class="icon-short-text20"
          alt=""
          src="./public/-icon-short-text1.svg"
        />

        <div class="text8">Ticket Type</div>
      </a>
      <a class="icon-short-text-parent18" href="{{route('showScreening')}}">
        <img
          class="icon-short-text20"
          alt=""
          src="./public/-icon-short-text1.svg"
        />

        <div class="text8">Screening</div>
      </a>
      <a class="icon-laptop-parent8" href="{{route('showMovies')}}">
        <img class="icon-laptop10" alt="" src="./public/-icon-laptop.svg" />

        <div class="text8">Movies</div>
        <img class="vuesaxlinearlogout-icon10" alt="" />
      </a>
      <a class="icon-burger-parent8">
        <img class="icon-burger10" alt="" src="./public/-icon-burger4.svg" />

        <div class="text8">Food and Beverage</div>
        <img class="vuesaxlinearlogout-icon10" alt="" />
      </a>
    </div>
  </body>
  <script>
      $(document).ready(function() {
          $('#myTable').DataTable({
              // responsive: true
          });
      });
  </script>
</html>
