<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{url('css/Login.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />
</head>

<body>

  <div class="login">

    <a class="button49" href="{{route('index')}}" id="button">
      <img class="eye-show-visible" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />

      <b class="button50">back</b>
    </a>
    <div class="login-card1">
      <b class="masuk-ke-tix">Login</b>
      <div class="text-input4">
        <div class="parent">
          <div class="div3">+62</div>
          <div class="frame-item"></div>
          <div class="masukkan-nomor-handphone">Enter phone number</div>
        </div>
        <div class="text-input-child"></div>
      </div>
      <div class="text-input5">
        <div class="masukkan-input-parent">
          <div class="masukkan-nomor-handphone">TixID123</div>
          <img class="eye-show-visible" alt="" src="{{ asset('css/public-cust/tix-id-11@2x.png') }}" />
        </div>
        <div class="text-input-item"></div>
      </div>
      @if($errors->any())
      <div style="background-color: red;color:white">
        {{ $errors->first() }}
      </div>
      @endif
      <form action="{{route('dologin')}}" method="post">
        @csrf
          <label class="password1">PASSWORD</label>

          <div class="buttontertiarydefaultlarge">
        </div>
        <a class="button52" href="{{route('signup')}}">
          <div class="button53">Register</div>
        </a>
        <div class="belum-punya-akun">Don’t have an account yet?</div>
        <button class="button54" type="submit">
          <div class="button53">Login</div>
        </button>
    </div>
      <label class="password1">PASSWORD</label>
      <input class="text-input6" type="password" name="password" />
    <div class="username1">USERNAME</div>
      <input class="text-input7" type="text" name="username" />
  </div>
  </form>

  <script>
    var button = document.getElementById("button");
    if (button) {
      button.addEventListener("click", function(e) {
        window.location.href = "index";
      });
    }
  </script>
</body>

</html>
