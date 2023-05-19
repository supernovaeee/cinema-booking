<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./screening.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/screening.css')}}"/>
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
    <div class="screening15">
      <div class="frame-parent10">
        <a class="icon-short-text-parent27" href="{{route('showTicketType')}}">
          <img
            class="icon-short-text30"
            alt=""
            src="./public/-icon-short-text1.svg"
          />

          <div class="ticket-type17">Ticket Type</div>
        </a>
        <a class="icon-short-text-parent28">
          <img
            class="icon-short-text30"
            alt=""
            src="./public/-icon-short-text6.svg"
          />

          <div class="ticket-type17">Screening</div>
        </a>
        <a class="icon-laptop-parent13" href="{{route('showMovies')}}">
          <img class="icon-laptop15" alt="" src="./public/-icon-laptop.svg" />

          <div class="ticket-type17">Movies</div>
          <img class="vuesaxlinearprofile-icon45" alt="" />
        </a>
        <a class="icon-burger-parent13" href="{{route('showFnB')}}">
          <img class="icon-burger15" alt="" src="./public/-icon-burger1.svg" />

          <div class="ticket-type17">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon45" alt="" />
        </a>
      </div>
      <a class="screening-inner">
        <div class="vuesaxlinearlogout-parent13">
          <img
            class="vuesaxlinearprofile-icon45"
            alt=""
            src="./public/vuesaxlinearlogout1.svg"
          />

          <a href="{{route('logout')}}" class="logout15">Logout</a>
        </div>
      </a>
      <img class="group-icon15" alt="" src="./public/group8.svg" />

      <div class="screening-child">
        <div class="group-wrapper12">
          <div class="lala-lulu-parent12">
            <div class="lala-lulu14">Lala Lulu</div>
            <div class="owner13">Owner</div>
          </div>
        </div>
      </div>
      <a class="x-baseunderline11" href="{{route('createScreening')}}">
        <div class="ticket-type17">Create</div>
      </a>
      <a class="x-baseunderline12">
        <div class="ticket-type17">Screening</div>
      </a>
      <div class="screening-item">
          <div class="box_table">
              <table id="myTable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                      <th>Branch</th>
                      <th>Studio</th>
                      <th>Movies</th>
                      <th>Time</th>
                      <th width="20%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($studio as $a)
                  <tr>
                      <td>{{$a->branch_name}}</td>
                      <td>{{$a->studio_name}}</td>
                      <td>{{$a->movies_name}}</td>
                      <td>{{$a->time}}</td>
                      <td>
                          <a href="deleteScreening/{{$a->id_studio_movies}}"  class="btn btn-danger m1 btn-hapus">Delete</a>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>

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
