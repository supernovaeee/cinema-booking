<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/SignUpTixID.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
    />
  </head>
  <body>
    <div class="sign-up-tix-id">
      <a class="button45" href="{{route('index')}}" id="button">
        <img class="arrowleft-icon" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />

        <b class="button46">back</b>
      </a>
      <div class="login-card">
        <b class="daftar-tix-id">Register</b>

          <form action="{{route('registerAll')}}" method="post">
              @csrf
          <div class="nama-lengkap">FULL NAME</div>
        <div class="username">USERNAME</div>
        <div class="password">PASSWORD</div>
        <div class="email">EMAIL</div>
          <input class="text-input" type="text" name="name" required/>

          <input class="text-input1" type="email" name="email" required/>

          <input class="text-input2" type="text" name="username" required/>

          <input class="text-input3" type="password" name="password" required/>

          <input class="text-input3" type="hidden" value="2" name="role"/>
        <button type="submit" class="button47">
          <div class="button48">Register</div>
        </button>
          </form>
      </div>
    </div>

    <script>
      var button = document.getElementById("button");
      if (button) {
        button.addEventListener("click", function (e) {
          window.location.href = "Login";
        });
      }
      </script>
  </body>
</html>
