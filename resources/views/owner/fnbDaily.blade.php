<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-daily.css')}}"/>
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
    <div class="owner-fnb-daily" data-scroll-to="ownershowFnbDaily">
      <div class="owner-fnb-daily-child"></div>
        <a class="owner-fnb-daily-inner">
          <div class="vuesaxlinearlogout-container">
            <img
              class="vuesaxlinearlogout-icon2"
              alt=""
              src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}"
            />

            <div class="logout2">Logout</div>
          </div>
        </a>
        <img class="group-icon2" alt="" src="{{ asset('css/public2/group1.svg') }}" />
        <div class="frame-container" data-scroll-to="groupContainer">

        
        <a
          class="icon-short-text-container"
          href="showTicketDaily"
          id="frameLink1"
        >
          <img
            class="icon-short-text2"
            alt=""
            src="{{ asset('css/public2/-icon-short-text1.svg') }}"
          />

          <div class="ticket-sales2">Ticket Sales</div>
        </a>
        <div class="icon-burger-container">
          <img class="icon-burger2" alt="" src="{{ asset('css/public2/-icon-burger.svg') }}" />

          <div class="ticket-sales2">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon2" alt="" />
        </div>
        <a
          class="icon-bar-chart-container"
          href="downloadReport"
          id="frameLink2"
        >
          <img
            class="icon-bar-chart2"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales2">Report</div>
          <img class="vuesaxlinearlogout-icon2" alt="" />
        </a>
      </div>
      <div class="button-container">
          <a class="button16" href="showFnbHour">
              <div class="button17">Hourly</div>
          </a>
          <a class="button18" href="showFnbDaily">
              <div class="button17">Daily</div>
          </a>
          <a class="button20" href="showFnbWeek">
              <div class="button17">Weekly</div>
          </a>
          <a class="button22" href="showFnbMonth">
              <div class="button17">Monthly</div>
          </a>
      </div>

<!-- <h1 class="active-users-wrapper"> -->
<form style="margin-left: 15%; margin-top: 10%" action="{{ route('showFnbDaily') }}" method="GET">
          <input type="text" name="search" placeholder="Search..." value="{{ request()->input('search') }}">
          <button type="submit">Search</button>
      <br><br>
      </form>


      <div class="scrollable-container">

                  <table id="myTable" class="table table-striped table-bordered" style="width: 70%; margin-left: 15%;  margin-top: 5%;">
                  <thead>
                      <tr>
                          <th style="width: 30%;">
                              <a href="{{ route('showFnbDaily', ['sort' => 'date', 'direction' => 'desc']) }}">Date ↓</a>
                              <a href="{{ route('showFnbDaily', ['sort' => 'date', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>
                              <a href="{{ route('showFnbDaily', ['sort' => 'total_price', 'direction' => 'desc']) }}">Revenues ↓</a>
                              <a href="{{ route('showFnbDaily', ['sort' => 'total_price', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>Food / Beverage</th>
                          <th>Qty</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                          $previousDate = null;
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
                              @if ($order->date !== $previousDate || $order->total_price !== $previousTotalPrice)
                                  {{ $order->total_price }}
                              @endif
                          </td>
                          <td>{{ $order->fnb_name }}</td>
                          <td>{{ $order->total_qty }}</td>
                      </tr>
                      @php
                          $previousDate = $order->date;
                          $previousTotalPrice = $order->total_price;
                      @endphp
                      @endforeach
                  </tbody>

                  </table>
</div>

        <!-- </h1> -->

        
    <!-- <div class="frame-div">
        <div class="group-wrapper">
            <div class="lala-lulu-parent">
                <div class="lala-lulu">Lala Lulu</div>
                <div class="admin">Admin</div>

            </div>
        </div>
    </div> -->
    </div>
  </body>
</html>
