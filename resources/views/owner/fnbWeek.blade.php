<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
      <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/owner-fn-b-weekly.css')}}"/>
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
    <div class="owner-fnb-weekly">
      <div class="owner-fnb-weekly-child"></div>
      <a class="owner-fnb-weekly-inner">
        <div class="vuesaxlinearlogout-group">
          <img
            class="vuesaxlinearlogout-icon1"
            alt=""
            src="{{ asset('css/public2/vuesaxlinearlogout.svg') }}"
          />

          <div class="logout1">Logout</div>
        </div>
      </a>
      <img class="group-icon1" alt="" src="{{ asset('css/public2/group.svg') }}" />

      <div class="frame-group">
        <a
          class="icon-short-text-group"
          href="ticketHour"
          id="frameLink1"
        >
          <img
            class="icon-short-text1"
            alt=""
            src="{{ asset('css/public2/-icon-short-text.svg') }}"
          />

          <div class="ticket-sales1">Ticket Sales</div>
        </a>
        <div class="icon-burger-group">
          <img class="icon-burger1" alt="" src="{{ asset('css/public2/-icon-burger.svg') }}" />

          <div class="ticket-sales1">Food and Beverage</div>
          <img class="vuesaxlinearlogout-icon1" alt="" />
        </div>
        <a
          class="icon-bar-chart-group"
          href="trends"
          id="frameLink2"
        >
          <img
            class="icon-bar-chart1"
            alt=""
            src="{{ asset('css/public2/-icon-bar-chart.svg') }}"
          />

          <div class="ticket-sales1">Report</div>
          <img class="vuesaxlinearlogout-icon1" alt="" />
        </a>
      </div>
      <div class="button-group">
          <a class="button8" href="fnbHour">
              <div class="button17">Hourly</div>
          </a>
          <a class="button10" href="fnbDaily">
              <div class="button17">Daily</div>
          </a>
          <a class="button12" href="fnbWeek">
              <div class="button17">Weekly</div>
          </a>
          <a class="button14" href="fnbMonth">
              <div class="button17">Monthly</div>
          </a>
      </div>
    </div>
  </body>
</html>
