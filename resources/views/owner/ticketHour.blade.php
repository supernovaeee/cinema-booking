<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-ticket-sales-hour.css')}}"/>
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
    <div class="owner-ticket-sales-hour" data-scroll-to="ownerTicketSalesHour">
      <div class="owner-ticket-sales-hour-inner">
        <div class="frame-parent6">
          <a class="icon-short-text-parent5">
            <img
              class="icon-short-text8"
              alt=""
              src="{{ asset('css/public2/-icon-short-text3.svg') }}"
            />

            <div class="ticket-sales8">Ticket Sales</div>
          </a>
          <a
            class="icon-burger-parent6"
            href="fnbHour"
            id="frameLink1"
          >
            <img class="icon-burger8" alt="" src="{{ asset('css/public2/-icon-burger2.svg') }}" />

            <div class="ticket-sales8">Food and Beverage</div>
            <img class="vuesaxlinearprofile-icon16" alt="" />
          </a>
          <a
            class="icon-bar-chart-parent6"
            href="trends"
            id="frameLink2"
          >
            <img
              class="icon-bar-chart8"
              alt=""
              src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
            />

            <div class="ticket-sales8">Report</div>
            <img class="vuesaxlinearprofile-icon16" alt="" />
          </a>
        </div>
      </div>
      <a class="owner-ticket-sales-hour-child">
        <div class="vuesaxlinearlogout-parent5">
          <img
            class="vuesaxlinearprofile-icon16"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}"
          />

          <div class="logout8">Logout</div>
        </div>
      </a>
      <img class="group-icon8" alt="" src="{{ asset('css/public2/group2.svg') }}" />

      <div class="button-parent5">
          <a class="button64" href="ticketHour">
              <div class="button17">Hourly</div>
          </a>
          <a class="button66" href="ticketDaily">
              <div class="button17">Daily</div>
          </a>
          <a class="button68" href="ticketWeek">
              <div class="button17">Weekly</div>
          </a>
          <a class="button70" href="ticketMonth">
              <div class="button17">Monthly</div>
          </a>
      </div>
    </div>
  </body>
</html>
