<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./ticket-type.css" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/ticket-type.css')}}"/>
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
    <div class="ticket-type6">
      <div class="frame-parent3">
        <a class="icon-short-text-parent7">
          <img
            class="icon-short-text10"
            alt=""
            src="./public/-icon-short-text3.svg"
          />

          <div class="ticket-type7">Ticket Type</div>
        </a>

        <div class="frame-parent4">
          <a class="icon-short-text-parent8" href="{{route('showScreening')}}">
            <img
              class="icon-short-text10"
              alt=""
              src="./public/-icon-short-text4.svg"
            />

            <div class="ticket-type7">Screening</div>
          </a>
          <a class="icon-laptop-parent3" href="{{route('showMovies')}}">
            <img class="icon-laptop5" alt="" src="./public/-icon-laptop1.svg" />

            <div class="ticket-type7">Movies</div>
            <img class="vuesaxlinearprofile-icon15" alt="" />
          </a>
        </div>
        <a class="icon-burger-parent3" href="{{route('showFnB')}}">
          <img class="icon-burger5" alt="" src="./public/-icon-burger2.svg" />

          <div class="ticket-type7">Food and Beverage</div>
          <img class="vuesaxlinearprofile-icon15" alt="" />
        </a>
      </div>
      <a class="ticket-type-inner">
        <div class="vuesaxlinearlogout-parent3">
          <img
            class="vuesaxlinearprofile-icon15"
            alt=""
            src="./public/vuesaxlinearlogout2.svg"
          />

          <a href="{{route('logout')}}" class="logout5">Logout</a>
        </div>
      </a>
      <img class="group-icon5" alt="" src="./public/group2.svg" />

      <div class="ticket-type-child">
        <div class="group-wrapper2">
          <div class="lala-lulu-parent2">
            <div class="lala-lulu4">Lala Lulu</div>
            <div class="owner4">Owner</div>
          </div>
        </div>
      </div>
      <a class="x-baseunderline3" href="{{route('createTicketType')}}">
        <div class="ticket-type7">Create</div>
      </a>
      <a class="x-baseunderline4">
        <div class="ticket-type7">Ticket Type</div>
      </a>

      <img class="ticket-type-item" alt="" src="./public/line-6.svg" />

        <div class="fb-item">
            <div class="box_table">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tickets as $a)
                    <tr>
                        <td>{{$a->type}}</td>
                        <td>${{$a->price}}</td>
                        <td>
                            @if ($a->status == 0)
                            <p>Active</p>
                            @else
                            <p>Deleted</p>
                            @endif
                        </td>
                        <td>
                            <a href="updateTicketType/{{$a->id_ticket_type}}" class="btn btn-success m-1">Edit</a>
                            <a href="deleteTickets/{{$a->id_ticket_type}}"  class="btn btn-danger m1 btn-hapus">Delete</a>
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
