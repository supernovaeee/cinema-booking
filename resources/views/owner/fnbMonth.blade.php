<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-monthly.css')}}"/>
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
          href="ticketHour.html"
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
    </div>
  </body>
</html>
