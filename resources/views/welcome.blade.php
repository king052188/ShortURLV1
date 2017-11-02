<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
      	{!! SEO::generate() !!}
        <meta property="og:image" content="{{ secure_asset('images/logo.kpa.ph.png') }}" />
        <link rel="apple-touch-icon" href="{{ secure_asset('images/logo.kpa.ph.png') }}">
    		<link rel="shortcut icon" type="image/png" href="{{ secure_asset('images/logo.kpa.ph.png') }}"/>
        <script src="{{ secure_asset('js/jquery-3.2.1.min.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,800,900" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #f7f7f7;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
                width: 500px;
                height: 130px;
                margin: 0 auto;
                padding: 5px;
            }
            .text {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                margin: 40px 0 0 0;
            }
            .links > a {
               color: #636b6f;
               padding: 5px;
               font-size: 12px;
               font-weight: 600;
               letter-spacing: .1rem;
               text-decoration: none;
               text-transform: uppercase;
           }
            a {
                color: #636b6f;
                text-decoration: none;
            }
            a:hover {
              padding-bottom: 2px;
              border-bottom: 1px solid #636b6f;
            }
            a.shorl_url {
              color: #d93470;
              text-decoration: none;
            }
            a.shorl_url:hover {
              padding-bottom: 5px;
              border-bottom: 2px solid #d93470;
            }
            input {
              font-family: 'Raleway', sans-serif;
              color: #636b6f;
              padding: 10px;
              font-size: 18px;
              width: 390px;
              font-weight: 600;
            }
            input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            input::-moz-placeholder { /* Firefox 19+ */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            input:-ms-input-placeholder { /* IE 10+ */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            input:-moz-placeholder { /* Firefox 18- */
              font-family: 'Raleway', sans-serif;
              font-weight: 300;
              color: #636b6f;
            }
            .btn {
              background: #d93470;
              background-image: -webkit-linear-gradient(top, #d93470, #b82b63);
              background-image: -moz-linear-gradient(top, #d93470, #b82b63);
              background-image: -ms-linear-gradient(top, #d93470, #b82b63);
              background-image: -o-linear-gradient(top, #d93470, #b82b63);
              background-image: linear-gradient(to bottom, #d93470, #b82b63);
              border-radius: 28px;
              border: 0px;
              font-family: 'Raleway', sans-serif;
              color: #ffffff;
              font-size: 22px;
              padding: 10px 35px 10px 35px;
              text-decoration: none;
            }
            .btn:hover {
              background: #b82b63;
              background-image: -webkit-linear-gradient(top, #b82b63, #d93470);
              background-image: -moz-linear-gradient(top, #b82b63, #d93470);
              background-image: -ms-linear-gradient(top, #b82b63, #d93470);
              background-image: -o-linear-gradient(top, #b82b63, #d93470);
              background-image: linear-gradient(to bottom, #b82b63, #d93470);
              text-decoration: none;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 500px) {
              .title {
                  font-size: 64px;
                  width: 355px;
                  height: 130px;
                  margin: 0 auto;
                  padding: 5px;
              }

              input {
                font-family: 'Raleway', sans-serif;
                color: #636b6f;
                padding: 10px;
                font-size: 18px;
                width: 300px;
                font-weight: 600;
              }
            }
        </style>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=299400663806765';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                   <div class="fb-like" data-href="https://kpa.ph" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    @auth
                        <?php $url = "/api/generate/short-url/" . Auth::user()->id; ?>
                        <a href="{{ url('/home') }}">Manage Account</a>
                    @else
                        <?php $url = "/api/generate/short-url"; ?>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                  <a href="/">
                    <div style="float: left; text-align: center;"><b>{{ app()->getAppName() }}</b></div>
                    <div style="float: left; margin: 80px 0 0 -80px; font-size: .7em;">.kpa.ph</div>
                  </a>
                </div>
                @if($return_msg["message"] != null)
                  <div class="text">
                    <p style="color: #d93470;"> {{ $return_msg["message"] }} </p>
                  </div>
                @else
                  <div id="generate" class="text">

                    <p> <input type="text" name="url_val" id="url_val" placeholder="Place a link here to shorten it" /> </p>
                    <p id="origin_url" style="margin: 10px 0 0 0;"></p>
                    <p> <button class="btn" id="btnSubmit">Shorten</button> </p>
                    <p> <button class="btn" id="btnCopy" style="display: none;">Copy ShorURL</button> </p>
                    <p id="error_msg" style="margin: 10px 0 0 0;"></p>
                  </div>
                @endif
            </div>
        </div>
        <script>
          $("#btnSubmit").click(function() {
            var url = "{{ secure_url($url) }}";
            var destination = $("#url_val").val();
            if(destination == "") {
              $("#error_msg").text("Please enter your url.");
              return false;
            }
            var data = { url: destination };
            ajax_execute(data, url);
          })

          var copyInputTextBtn = document.querySelector('#btnCopy');
          copyInputTextBtn.addEventListener('click', function(event) {
              var copyTextValue = document.querySelector('#url_val');
              copyTextValue.select();
              try {
                  var successful = document.execCommand('copy');
                  var msg = successful ? 'successful' : 'unsuccessful';
                  $("#error_msg").text("Copying URL was "+ msg);
              } catch (err) {
                  $("#error_msg").text("Oops, unable to copy");
              }
          });
        </script>

        <script>(function(d, s, id) {
          var js, kpa_js = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = '{{ secure_url("/api/js/sdk/v1/kpa-jsdk.js?code=sadsad9090ad09sadsaodusaoidsa") }}';
          kpa_js.parentNode.insertBefore(js, kpa_js);
        }(document, 'script', 'kpa-jssdk'));</script>

    </body>
</html>
