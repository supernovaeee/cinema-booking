<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-ticket-sales-month.css')}}"/>
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
    <div class="owner-ticket-sales-monthly">
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
          <a class="button24" href="ticketHour">
              <div class="button25">Hourly</div>
          </a>
          <a class="button26" href="ticketDaily">
              <div class="button25">Daily</div>
          </a>
          <a class="button28" href="ticketWeek">
              <div class="button25">Weekly</div>
          </a>
          <a class="button30" href="ticketMonth">
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
          href="fnbHour"
          id="frameLink2"
        >
          <img class="icon-burger3" alt="" src="{{ asset('css/public2/-icon-burger1.svg') }}" />

          <div class="ticket-sales3">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon3" alt="" />
        </a>
        <a
          class="icon-bar-chart-parent1"
          href="trends"
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
    </div>
  </body>
</html>
