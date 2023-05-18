<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{url('css/owner-trends.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" />
</head>

<body>
  <div class="owner-trends" data-scroll-to="ownerTrendsContainer">
    <div class="owner-trends-child" data-scroll-to="frame"></div>
    <a class="owner-trends-inner">
      <div class="vuesaxlinearlogout-parent3">
        <img class="vuesaxlinearlogout-icon6" alt="" src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}" />

        <div class="logout6">Logout</div>
      </div>
    </a>
    <div class="owner-trends-inner1">
      <div class="group-wrapper">
        <div class="lala-lulu-parent">
          <div class="lala-lulu">Lala Lulu</div>
          <div class="owner">Owner</div>
        </div>
      </div>
    </div>
    <div class="frame-parent4">
      <a class="icon-short-text-parent3" href="showTicketHour" id="frameLink1">
        <img class="icon-short-text6" alt="" src="{{ asset('css/public2/-icon-short-text1.svg') }}" />

        <div class="ticket-sales6">Ticket Sales</div>
      </a>
      <a class="icon-burger-parent4" href="showFnbHour" id="frameLink2">
        <img class="icon-burger6" alt="" src="{{ asset('css/public2/-icon-burger2.svg') }}" />

        <div class="ticket-sales6">Food and Beverage</div>
        <img class="vuesaxlinearlogout-icon6" alt="" />
      </a>
      <div class="icon-bar-chart-parent4">
        <img class="icon-bar-chart6" alt="" src="{{ asset('css/public2/-icon-bar-chart1.svg') }}" />

        <div class="ticket-sales6">Report</div>
        <img class="vuesaxlinearlogout-icon6" alt="" />
      </div>
    </div>
    <img class="group-icon6" alt="" src="{{ asset('css/public2/group2.svg') }}" />

    <div class="button-parent3">
      <a href="{{ route('downloadReportHour') }}" class="button48">
        <div class="button49">Hourly</div>
      </a>
      <a class="button48">
        <div class="button49">Daily</div>
      </a>
      <a class="button48">
        <div class="button49">Weekly</div>
      </a>
      <a class="button48">
        <div class="button49">Monthly</div>
      </a>
    </div>
    <h1 class="generate-report-to-csv-file-wrapper">
      <div class="generate-report-to">Generate Report to CSV File</div>
    </h1>
  </div>
</body>

</html>