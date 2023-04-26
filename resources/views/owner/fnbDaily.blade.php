<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-daily.css')}}"/>
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
    <div class="owner-fnb-daily">
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

      <div class="frame-container">
        <a
          class="icon-short-text-container"
          href="ticketHour"
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
          href="trends"
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
        <a class="button16" href="fnbHour">
          <div class="button17">Hourly</div>
        </a>
        <a class="button18" href="fnbDaily">
          <div class="button17">Daily</div>
        </a>
        <a class="button20" href="fnbWeek">
          <div class="button17">Weekly</div>
        </a>
        <a class="button22" href="fnbMonth">
          <div class="button17">Monthly</div>
        </a>
      </div>
    </div>
  </body>
</html>
