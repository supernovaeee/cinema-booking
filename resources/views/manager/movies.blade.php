<!DOCTYPE html>
<html>
  <head>    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./movies.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/movies.css')}}"/>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap"
    />
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
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
  </head>
  <body>
    <div class="movies12">
      <div class="frame-parent7">
        <a class="icon-short-text-parent21" href="{{route('showTicketType')}}">
          <img
            class="icon-short-text24"
            alt=""
            src="./public/-icon-short-text10.svg"
          />

          <div class="ticket-type14">Ticket Type</div>
        </a>
        <a class="icon-short-text-parent22" href="{{route('showScreening')}}">
          <img
            class="icon-short-text24"
            alt=""
            src="./public/-icon-short-text7.svg"
          />

          <div class="ticket-type14">Screening</div>
        </a>
        <a class="icon-laptop-parent10">
          <img class="icon-laptop12" alt="" src="./public/-icon-laptop2.svg" />

          <div class="ticket-type14">Movies</div>
          <img class="vuesaxlinearprofile-icon36" alt="" />
        </a>
        <a class="icon-burger-parent10" href="{{route('showFnB')}}">
          <img class="icon-burger12" alt="" src="./public/-icon-burger8.svg" />

          <div class="ticket-type14">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon36" alt="" />
        </a>
      </div>
      <a class="movies-inner">
        <div class="vuesaxlinearlogout-parent10">
          <img
            class="vuesaxlinearprofile-icon36"
            alt=""
            src="./public/vuesaxlinearlogout4.svg"
          />

          <a href="{{route('logout')}}" class="logout12">Logout</a>
        </div>
      </a>
      <img class="group-icon12" alt="" src="./public/group6.svg" />

      <div class="movies-child">
        <div class="group-wrapper9">
          <div class="lala-lulu-parent9">
            <div class="lala-lulu11">Lala Lulu</div>
            <div class="owner10">Owner</div>
          </div>
        </div>
      </div>
      <a class="x-baseunderline8" href="{{route('createMovies')}}">
        <div class="ticket-type14">Create</div>
      </a>
      <a class="x-baseunderline9">
        <div class="ticket-type14">Movies</div>
      </a>
      <div class="movies-item">
          <br><br>
          <div class="box_table">
              <table id="myTable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                      <th>Title</th>
                      <th>Photo</th>
                      <th>Duration</th>
                      <th>Genre</th>
                      <th>Director</th>
                      <th>Rating</th>
                      <th>Status</th>
                      <th width="20%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($movies as $a)
                  <tr>
                      <td>{{$a->movies_name}}</td>
                      <td> <img width="50px" height="50px" src="{{ asset('css/public-cust/'. $a->photo) }}"> </td>
                      <td>{{$a->duration}}</td>
                      <td>{{$a->genre}}</td>
                      <td>{{$a->director}}</td>
                      <td>{{$a->rating}}</td>
                      <td>
                          @if ($a->screening_status == 1)
                          <p>Active</p>
                          @elseif ($a->screening_status == 0)
                          <p>Coming Soon</p>
                          @else
                          <p>Deleted</p>
                          @endif
                      </td>
                      <td>
                          <a href="updateMovies/{{$a->id_movies}}" class="btn btn-success m-1">Edit</a>
                          <a href="deleteMovies/{{$a->id_movies}}"  class="btn btn-danger m1 btn-hapus">Delete</a>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      </div>
<!--     -->
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
