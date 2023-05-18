<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-hour.css')}}"/>
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
    <div class="owner-fnb-hour" data-scroll-to="ownerFnBHour">
      <div class="owner-fnb-hour-child"></div>
      <a class="owner-fnb-hour-inner">
        <div class="vuesaxlinearlogout-parent4">
          <img
            class="vuesaxlinearlogout-icon7"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}"
          />

          <div class="logout7">Logout</div>
        </div>
      </a>
      <img class="group-icon7" alt="" src="{{ asset('css/public2/group2.svg') }}" />

      <div class="frame-parent5" data-scroll-to="groupContainer">
        <a
          class="icon-short-text-parent4"
          href="showTicketHour"
          id="frameLink1"
        >
          <img
            class="icon-short-text7"
            alt=""
            src="{{ asset('css/public2/-icon-short-text1.svg') }}"
          />

          <div class="ticket-sales7">Ticket Sales</div>
        </a>
        <div class="icon-burger-parent5">
          <img class="icon-burger7" alt="" src="{{ asset('css/public2/-icon-burger.svg') }}" />

          <div class="ticket-sales7">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon7" alt="" />
        </div>
        <a
          class="icon-bar-chart-parent5"
          href="downloadReport"
          id="frameLink2"
        >
          <img
            class="icon-bar-chart7"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales7">Report</div>
          <img class="vuesaxlinearlogout-icon7" alt="" />
        </a>
      </div>
      <div class="button-parent4">
          <a class="button56" href="showFnbHour">
              <div class="button57">Hourly</div>
          </a>
          <a class="button58" href="showFnbDaily">
              <div class="button57">Daily</div>
          </a>
          <a class="button60" href="showFnbWeek">
              <div class="button57">Weekly</div>
          </a>
          <a class="button62" href="showFnbMonth">
              <div class="button57">Monthly</div>
          </a>
      </div>
      <form style="margin-left: 15%; margin-top: 10%" action="{{ route('showFnbHour') }}" method="GET">
          <input type="text" name="search" placeholder="Search..." value="{{ request()->input('search') }}">
          <button type="submit">Search</button>
      <br><br>
      </form>


      <div class="box_table">

                  <table id="myTable" class="table table-striped table-bordered" style="width: 70%; margin-left: 15%;  margin-top: 5%;">
                  <thead>
                      <tr>
                          <th style="width: 20%;">       
                            <a href="{{ route('showFnbHour', ['sort' => 'date', 'direction' => 'desc']) }}">Date ↓</a>
                            <a href="{{ route('showFnbHour', ['sort' => 'date', 'direction' => 'asc']) }}">↑</a>
                          <th style="width: 20%;">
                            <a href="{{ route('showFnbHour', ['sort' => 'time_frame', 'direction' => 'desc']) }}">Hour ↓</a>
                            <a href="{{ route('showFnbHour', ['sort' => 'time_frame', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>
                              <a href="{{ route('showFnbHour', ['sort' => 'total_price', 'direction' => 'desc']) }}">Revenues ↓</a>
                              <a href="{{ route('showFnbHour', ['sort' => 'total_price', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>Food / Beverage</th>
                          <th>Qty</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                          $previousDate = null;
                          $previousTimeFrame = null;
                          $previousTotalPrice = null;
                      @endphp
                      @foreach($orders as $order)
                      <tr>
                          <td>
                              @if ($order->date !== $previousDate)
                                  {{ $order->date }}
                              @endif
                          </td>
                          <td>
                              @if ($order->time_frame !== $previousTimeFrame)
                                  {{ $order->time_frame }}
                              @endif
                          </td>
                          <td>
                              @if ($order->time_frame !== $previousTimeFrame || $order->total_price !== $previousTotalPrice)
                                  {{ $order->total_price }}
                              @endif
                          </td>
                          <td>{{ $order->fnb_name }}</td>
                          <td>{{ $order->total_qty }}</td>
                      </tr>
                      @php
                          $previousDate = $order->date;
                          $previousTimeFrame = $order->time_frame;
                          $previousTotalPrice = $order->total_price;
                      @endphp
                      @endforeach
                  </tbody>
                  </table>
</div>

    </div>
  </body>
</html>
