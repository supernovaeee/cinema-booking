<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-weekly.css')}}"/>
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
    <div class="owner-fnb-weekly">
      <div class="owner-fnb-weekly-child"></div>
      <a class="owner-fnb-weekly-inner">
        <div class="vuesaxlinearlogout-group">
          <img
            class="vuesaxlinearlogout-icon1"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout.svg') }}"
          />

          <div class="logout1">Logout</div>
        </div>
      </a>
      <img class="group-icon1" alt="" src="{{ asset('css/public2/group.svg') }}" />

      <div class="frame-group">
        <a
          class="icon-short-text-group"
          href="showTicketWeek"
          id="frameLink1"
        >
          <img
            class="icon-short-text1"
            alt=""
            src="{{ asset('css/public2/-icon-short-text.svg') }}"
          />

          <div class="ticket-sales1">Ticket Sales</div>
        </a>
        <div class="icon-burger-group">
          <img class="icon-burger1" alt="" src="{{ asset('css/public2/-icon-burger.svg') }}" />

          <div class="ticket-sales1">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon1" alt="" />
        </div>
        <a
          class="icon-bar-chart-group"
          href="downloadReport"
          id="frameLink2"
        >
          <img
            class="icon-bar-chart1"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales1">Report</div>
          <img class="vuesaxlinearlogout-icon1" alt="" />
        </a>
      </div>
      <div class="button-group">
          <a class="button8" href="showFnbHour">
              <div class="button9">Hourly</div>
          </a>
          <a class="button10" href="showFnbDaily">
              <div class="button9">Daily</div>
          </a>
          <a class="button12" href="showFnbWeek">
              <div class="button9">Weekly</div>
          </a>
          <a class="button14" href="showFnbMonth">
              <div class="button9">Monthly</div>
          </a>
      </div>
      <form style="margin-left: 15%; margin-top: 10%" action="{{ route('showFnbWeek') }}" method="GET">
          <input type="text" name="search" placeholder="Search..." value="{{ request()->input('search') }}">
          <button type="submit">Search</button>
      <br><br>
      </form>


      <div class="box_table">

                  <table id="myTable" class="table table-striped table-bordered" style="width: 70%; margin-left: 15%;  margin-top: 5%;">
                  <thead>
                      <tr>
                          <th style="width: 10%;">
                              <a href="{{ route('showFnbWeek', ['sort' => 'week', 'direction' => 'desc']) }}">Week ↓</a>
                              <a href="{{ route('showFnbWeek', ['sort' => 'week', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th style="width: 25%;">Date Range</th>
                          <th>
                              <a href="{{ route('showFnbWeek', ['sort' => 'total_price', 'direction' => 'desc']) }}">Revenues ↓</a>
                              <a href="{{ route('showFnbWeek', ['sort' => 'total_price', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>Food / Beverage</th>
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
                              @if ($order->week !== $previousWeek || $order->total_price !== $previousTotalPrice)
                                  {{ $order->total_price }}
                              @endif
                          </td>
                          <td>{{ $order->fnb_name }}</td>
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

    </div>
  </body>
</html>
