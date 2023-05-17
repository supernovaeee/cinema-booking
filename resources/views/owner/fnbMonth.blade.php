<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-monthly.css')}}"/>
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
    <div class="owner-fnb-monthly">
      <div class="owner-fnb-monthly-child"></div>
      <a class="owner-fnb-monthly-inner">
        <div class="vuesaxlinearlogout-parent">
          <img
            class="vuesaxlinearlogout-icon"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout.svg') }}"
          />

          <div class="logout">Logout</div>
        </div>
      </a>
      <img class="group-icon" alt="" src="{{ asset('css/public2/group.svg') }}" />

      <div class="frame-parent">
        <a
          class="icon-short-text-parent"
          href="ticketMonth"
          id="frameLink1"
        >
          <img
            class="icon-short-text"
            alt=""
            src="{{ asset('css/public2/-icon-short-text.svg') }}"
          />

          <div class="ticket-sales">Ticket Sales</div>
        </a>
        <div class="icon-burger-parent">
          <img class="icon-burger" alt="" src="{{ asset('css/public2/-icon-burger.svg') }}" />

          <div class="ticket-sales">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon" alt="" />
        </div>
        <a
          class="icon-bar-chart-parent"
          href="trends"
          id="frameLink2"
        >
          <img
            class="icon-bar-chart"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales">Report</div>
          <img class="vuesaxlinearlogout-icon" alt="" />
        </a>
      </div>
      <div class="button-parent">
          <a class="button" href="fnbHour">
              <div class="button1">Hourly</div>
          </a>
          <a class="button2" href="fnbDaily">
              <div class="button1">Daily</div>
          </a>
          <a class="button4" href="fnbWeek">
              <div class="button1">Weekly</div>
          </a>
          <a class="button6" href="fnbMonth">
              <div class="button1">Monthly</div>
          </a>
      </div>
      <form style="margin-left: 15%; margin-top: 10%" action="{{ route('fnbWeek') }}" method="GET">
          <input type="text" name="search" placeholder="Search..." value="{{ request()->input('search') }}">
          <button type="submit">Search</button>
      <br><br>
      </form>
      <div class="box_table">

<table id="myTable" class="table table-striped table-bordered" style="width: 70%; margin-left: 15%;  margin-top: 5%;">
<thead>
    <tr>
        <th style="width: 10%;">
            <a href="{{ route('fnbMonth', ['sort' => 'month', 'direction' => 'desc']) }}">Month ↓</a>
            <a href="{{ route('fnbMonth', ['sort' => 'month', 'direction' => 'asc']) }}">↑</a>
        </th>
        <th>
            <a href="{{ route('fnbMonth', ['sort' => 'total_price', 'direction' => 'desc']) }}">Revenues ↓</a>
            <a href="{{ route('fnbMonth', ['sort' => 'total_price', 'direction' => 'asc']) }}">↑</a>
        </th>
        <th>Food / Beverage</th>
        <th>Qty</th>
    </tr>
</thead>
<tbody>
    @php
        $previousMonth = null;
        $previousTotalPrice = null;
    @endphp
    @foreach($orders as $order)
    <tr>
        <td>
        @if ($order->month !== $previousMonth)
            @php
                $trimmedMonth = trim($order->month);
                $monthName = '';
                $year = trim($order->year);
                switch ($trimmedMonth) {
                    case '1':
                        $monthName = 'January';
                        break;
                    case '2':
                        $monthName = 'February';
                        break;
                    case '3':
                        $monthName = 'March';
                        break;
                    case '4':
                        $monthName = 'April';
                        break;
                    case '5':
                        $monthName = 'May';
                        break;
                    case '6':
                        $monthName = 'June';
                        break;
                    case '7':
                        $monthName = 'July';
                        break;
                    case '8':
                        $monthName = 'August';
                        break;
                    case '9':
                        $monthName = 'September';
                        break;
                    case '10':
                        $monthName = 'October';
                        break;
                    case '11':
                        $monthName = 'November';
                        break;
                    case '12':
                        $monthName = 'December';
                        break;
                    default:
                        $monthName = "help idk";
                        break;
                }
            @endphp
            {{ $monthName }} {{ $year }}
        @endif

        </td>
        <td>
            @if ($order->month !== $previousMonth || $order->total_price !== $previousTotalPrice)
                {{ $order->total_price }}
            @endif
        </td>
        <td>{{ $order->fnb_name }}</td>
        <td>{{ $order->total_qty }}</td>
    </tr>
    @php
        $previousMonth = $order->month;
        $previousTotalPrice = $order->total_price;
    @endphp
    @endforeach
</tbody>

</table>
</div>
    </div>
  </body>
</html>
