<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-ticket-sales-month.css')}}"/>
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
    <div class="owner-ticket-sales-monthly" data-scroll-to="ownerTicketSalesMonth">
      <div class="owner-ticket-sales-monthly-child"></div>
      <a class="owner-ticket-sales-monthly-inner">
        <div class="frame-div">
          <img
            class="vuesaxlinearlogout-icon3"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout.svg') }}"
          />

          <div class="logout3">Logout</div>
        </div>
      </a>
      <img class="group-icon3" alt="" src="{{ asset('css/public2/group.svg') }}" />

      <div class="group-div">
          <a class="button24" href="showTicketHour">
              <div class="button25">Hourly</div>
          </a>
          <a class="button26" href="showTicketDaily">
              <div class="button25">Daily</div>
          </a>
          <a class="button28" href="showTicketWeek">
              <div class="button25">Weekly</div>
          </a>
          <a class="button30" href="showTicketMonth">
              <div class="button25">Monthly</div>
          </a>
      </div>

      <div class="frame-parent1">
        <a class="frame-a">
          <img
            class="icon-short-text3"
            alt=""
            src="{{ asset('css/public2/-icon-short-text2.svg') }}"
          />

          <div class="ticket-sales3">Ticket Sales</div>
        </a>
        <a
          class="icon-burger-parent1"
          href="showFnbMonth"
          id="frameLink2"
        >
          <img class="icon-burger3" alt="" src="{{ asset('css/public2/-icon-burger1.svg') }}" />

          <div class="ticket-sales3">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon3" alt="" />
        </a>
        <a
          class="icon-bar-chart-parent1"
          href="downloadReport"
          id="frameLink3"
        >
          <img
            class="icon-bar-chart3"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales3">Report</div>
          <img class="vuesaxlinearlogout-icon3" alt="" />
        </a>
      </div>
      <form style="margin-left: 15%; margin-top: 10%" action="{{ route('showTicketMonth') }}" method="GET">
          <input type="text" name="search" placeholder="Search..." value="{{ request()->input('search') }}">
          <button type="submit">Search</button>
      <br><br>
      </form> 

      <div class="scrollable-container">

                  <table id="myTable" class="table table-striped table-bordered" style="width: 70%; margin-left: 15%;  margin-top: 5%;">
                  <thead>
                      <tr>
                          <th style="width: 10%;">
                              <a href="{{ route('showTicketMonth', ['sort' => 'month', 'direction' => 'desc']) }}">Month ↓</a>
                              <a href="{{ route('showTicketMonth', ['sort' => 'month', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>
                              <a href="{{ route('showTicketMonth', ['sort' => 'total_price', 'direction' => 'desc']) }}">Revenues ↓</a>
                              <a href="{{ route('showTicketMonth', ['sort' => 'total_price', 'direction' => 'asc']) }}">↑</a>
                          </th>
                          <th>Movie Name</th>
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
                          <td>{{ $order->movies_name }}</td>
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
