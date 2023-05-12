<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-hour.css')}}"/>
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
    <div class="owner-fnb-hour" data-scroll-to="ownerFnBHour">
      <div class="owner-fnb-hour-child"></div>
      <a class="owner-fnb-hour-inner">
        <div class="vuesaxlinearlogout-parent4">
          <img
            class="vuesaxlinearlogout-icon7"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout1.svg') }}"
          />

          <div class="logout7">Logout</div>
        </div>
      </a>
      <img class="group-icon7" alt="" src="{{ asset('css/public2/group2.svg') }}" />

      <div class="frame-parent5" data-scroll-to="groupContainer">
        <a
          class="icon-short-text-parent4"
          href="ticketHour"
          id="frameLink1"
        >
          <img
            class="icon-short-text7"
            alt=""
            src="{{ asset('css/public2/-icon-short-text1.svg') }}"
          />

          <div class="ticket-sales7">Ticket Sales</div>
        </a>
        <div class="icon-burger-parent5">
          <img class="icon-burger7" alt="" src="{{ asset('css/public2/-icon-burger.svg') }}" />

          <div class="ticket-sales7">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon7" alt="" />
        </div>
        <a
          class="icon-bar-chart-parent5"
          href="trends"
          id="frameLink2"
        >
          <img
            class="icon-bar-chart7"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales7">Report</div>
          <img class="vuesaxlinearlogout-icon7" alt="" />
        </a>
      </div>
      <div class="button-parent4">
          <a class="button56" href="fnbHour">
              <div class="button57">Hourly</div>
          </a>
          <a class="button58" href="fnbDaily">
              <div class="button57">Daily</div>
          </a>
          <a class="button60" href="fnbWeek">
              <div class="button57">Weekly</div>
          </a>
          <a class="button62" href="fnbMonth">
              <div class="button57">Monthly</div>
          </a>
      </div>
    </div>
  </body>
</html>
