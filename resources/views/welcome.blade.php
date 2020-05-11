<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('modules.analytics')
    @laravelPWA
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all">
    <meta name="googlebot" content="all" />
    <meta name="google" content="translate" />

    <title>@yield('pageTitle', config('app.name'))</title>
    @include('modules.seo')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
      html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Open Sans', sans-serif;
        font-weight: 200;
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

      .logo {
        max-width: 50%;
      }

      .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
      }

      .m-b-md {
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
        <div class="top-right links">
          @auth
            <a href="{{ url('/home') }}">Home</a>
          @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}">Register</a>
            @endif
          @endauth
        </div>
      @endif

      <div class="content">
        <div class="m-b-md">
          <img src="{{ asset('assets/images/brand/wetaelk-blue.png') }}" class="logo" alt="{{ config('app.name') }}">
        </div>

        <div class="links">
          <a href="https://github.com/orgs/wetaelkio/projects/1">Project</a>
          <a href="https://github.com/wetaelkio/wetaelk">Repository</a>
        </div>
      </div>
    </div>
  </body>
</html>
