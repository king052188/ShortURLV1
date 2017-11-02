<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ secure_asset('images/logo.kpa.ph.png') }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - kpa.ph</title>
    <link rel="apple-touch-icon" href="{{ secure_asset('images/logo.kpa.ph.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ secure_asset('images/logo.kpa.ph.png') }}"/>
    <!-- Styles -->
    <script src="{{ secure_asset('js/jquery-3.2.1.min.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
    <style>
        html, body {
            background-color: #f7f7f7;
            color: #636b6f;
        }
        .m_top20 { margin-top: 40px; }

        .information h3.title {
          margin: 0 0 10px 0;
          padding: 0;
          font-size: 1.2em;
          font-weight: 600;
        }
        .information div.content {
          background-color: #1d2129;
          border: 1px solid #EEEEEE;
          font-size: 1em;
          border-radius: 3px;
          padding: 10px;
        }
        .information div.content p {
          color: #EEE686;
          margin: 0 0 0 0;
        }
        .information div.content span {
          color: #80D956;
        }

        .information div.json_format p.j_content {
            margin: 0 0 0 10px;
        }

        .information a.api_url {
          color: #80D956;
        }

        .information a.api_url:hover {
          color: #80D956;
          text-decoration: underline;
        }
    </style>
    <script>
    function delete_me(id){
      ajax_delete({id:id}, "{{ secure_url('/api/generate/delete-short-url') }}", id);
    }
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
