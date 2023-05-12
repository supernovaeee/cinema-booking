<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-ticket-sales-weekly.css')}}"/>
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
    <div class="owner-ticket-sales-weekly">
      <div class="owner-ticket-sales-weekly-child"></div>
      <a class="owner-ticket-sales-weekly-inner">
        <div class="vuesaxlinearlogout-parent1">
          <img
            class="vuesaxlinearlogout-icon4"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}""
          />

          <div class="logout4">Logout</div>
        </div>
      </a>
      <img class="group-icon4" alt="" src="{{ asset('css/public2/group1.svg') }}" />

      <div class="button-parent1">
          <a class="button32" href="ticketHour">
              <div class="button33">Hourly</div>
          </a>
          <a class="button34" href="ticketDaily">
              <div class="button33">Daily</div>
          </a>
          <a class="button36" href="ticketWeek">
              <div class="button33">Weekly</div>
          </a>
          <a class="button38" href="ticketMonth">
              <div class="button33">Monthly</div>
          </a>
      </div>
      <div class="frame-parent2">
        <a class="icon-short-text-parent1">
          <img
            class="icon-short-text4"
            alt=""
            src="{{ asset('css/public2/-icon-short-text3.svg') }}"
          />

          <div class="ticket-sales4">Ticket Sales</div>
        </a>
        <a
          class="icon-burger-parent2"
          href="fnbHour"
          id="frameLink2"
        >
          <img class="icon-burger4" alt="" src="{{ asset('css/public2/-icon-burger1.svg') }}" />

          <div class="ticket-sales4">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon4" alt="" />
        </a>
        <a
          class="icon-bar-chart-parent2"
          href="trends"
          id="frameLink3"
        >
          <img
            class="icon-bar-chart4"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales4">Report</div>
          <img class="vuesaxlinearlogout-icon4" alt="" />
        </a>
      </div>
    </div>
  </body>
</html>
