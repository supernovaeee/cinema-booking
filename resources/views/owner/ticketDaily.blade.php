<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-ticket-sales-daily.css')}}"/>
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
    <div class="owner-ticket-sales-daily">
      <div class="owner-ticket-sales-daily-child"></div>
      <a class="owner-ticket-sales-daily-inner">
        <div class="vuesaxlinearlogout-parent2">
          <img
            class="vuesaxlinearlogout-icon5"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}"
          />

          <div class="logout5">Logout</div>
        </div>
      </a>
      <img class="group-icon5" alt="" src="{{ asset('css/public2/group1.svg') }}" />

      <div class="button-parent2">
          <a class="button40" href="ticketHour">
              <div class="button41">Hourly</div>
          </a>
          <a class="button42" href="ticketDaily">
              <div class="button41">Daily</div>
          </a>
          <a class="button44" href="ticketWeek">
              <div class="button41">Weekly</div>
          </a>
          <a class="button46" href="ticketMonth">
              <div class="button41">Monthly</div>
          </a>
      </div>
      <div class="frame-parent3">
        <a class="icon-short-text-parent2">
          <img
            class="icon-short-text5"
            alt=""
            src="{{ asset('css/public2/-icon-short-text3.svg') }}"
          />

          <div class="ticket-sales5">Ticket Sales</div>
        </a>
        <a
          class="icon-burger-parent3"
          href="fnbDaily"
          id="frameLink2"
        >
          <img class="icon-burger5" alt="" src="{{ asset('css/public2/-icon-burger1.svg') }}" />

          <div class="ticket-sales5">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon5" alt="" />
        </a>
        <a
          class="icon-bar-chart-parent3"
          href="./owner-trends.html"
          id="frameLink3"
        >
          <img
            class="icon-bar-chart5"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales5">Report</div>
          <img class="vuesaxlinearlogout-icon5" alt="" />
        </a>
      </div>
    </div>
  </body>
</html>
