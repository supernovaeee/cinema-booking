<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-ticket-sales-weekly.css')}}"/>
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
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
  </head>
  <body>
    <div class="owner-ticket-sales-weekly">
      <div class="owner-ticket-sales-weekly-child"></div>
      <a class="owner-ticket-sales-weekly-inner">
        <div class="vuesaxlinearlogout-parent1">
          <img
            class="vuesaxlinearlogout-icon4"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}""
          />

          <div class="logout4">Logout</div>
        </div>
      </a>
      <img class="group-icon4" alt="" src="{{ asset('css/public2/group1.svg') }}" />

      <div class="button-parent1">
          <a class="button32" href="ticketHour">
              <div class="button33">Hourly</div>
          </a>
          <a class="button34" href="ticketDaily">
              <div class="button33">Daily</div>
          </a>
          <a class="button36" href="ticketWeek">
              <div class="button33">Weekly</div>
          </a>
          <a class="button38" href="ticketMonth">
              <div class="button33">Monthly</div>
          </a>
      </div>

      <div class="frame-parent2">
        <a class="icon-short-text-parent1">
          <img
            class="icon-short-text4"
            alt=""
            src="{{ asset('css/public2/-icon-short-text3.svg') }}"
          />

          <div class="ticket-sales4">Ticket Sales</div>
        </a>
        <a
          class="icon-burger-parent2"
          href="fnbWeek"
          id="frameLink2"
        >
          <img class="icon-burger4" alt="" src="{{ asset('css/public2/-icon-burger1.svg') }}" />

          <div class="ticket-sales4">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon4" alt="" />
        </a>
        <a
          class="icon-bar-chart-parent2"
          href="trends"
          id="frameLink3"
        >
          <img
            class="icon-bar-chart4"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales4">Report</div>
          <img class="vuesaxlinearlogout-icon4" alt="" />
        </a>
      </div>
      <form style="margin-left: 15%; margin-top: 10%" action="{{ route('ticketWeek') }}" method="GET">
          <input type="text" name="search" placeholder="Search..." value="{{ request()->input('search') }}">
          <button type="submit">Search</button>
      <br><br>
      </form>


      <div class="box_table">

                  <table id="myTable" class="table table-striped table-bordered" style="width: 70%; margin-left: 15%;  margin-top: 5%;">
                  <thead>
                      <tr>
                          <th style="width: 10%;">
                              <a href="{{ route('ticketWeek', ['sort' => 'week', 'direction' => 'desc']) }}">Week ↓</a>
                              <a href="{{ route('ticketWeek', ['sort' => 'week', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th style="width: 25%;">Date Range</th>
                          <th>
                              <a href="{{ route('ticketWeek', ['sort' => 'total_price', 'direction' => 'desc']) }}">Revenues ↓</a>
                              <a href="{{ route('ticketWeek', ['sort' => 'total_price', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>Movie Name</th>
                          <th>Qty</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                          $previousWeek = null;
                          $previousTotalPrice = null;
                      @endphp
                      @foreach($orders as $order)
                      <tr>
                          <td>
                              @if ($order->week !== $previousWeek)
                                  {{ $order->week }}
                              @endif
                          </td>
                          <td>
                              @if ($order->week !== $previousWeek)
                                  {{ $order->start_date }} - {{ $order->end_date }}
                              @endif
                          </td>
                          <td>
                              @if ($order->total_price !== $previousTotalPrice)
                                  {{ $order->total_price }}
                              @endif
                          </td>
                          <td>{{ $order->movies_name }}</td>
                          <td>{{ $order->total_qty }}</td>
                      </tr>
                      @php
                          $previousWeek = $order->week;
                          $previousTotalPrice = $order->total_price;
                      @endphp
                      @endforeach
                  </tbody>
                  </table>
    </div>
  </body>
</html>
