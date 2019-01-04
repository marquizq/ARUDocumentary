<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="/"><img src="{{asset('/storage/csm.png')}}" width="50px" height="50px"/></a>

      <!-- Links -->
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" href="/Info">Info</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="/news">News</a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="/About Us">about Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact Us</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">


    @yield('content')

    <!-- @if(Request::is('/Info'))
    @include('inc.home2')
    @endif -->
        <div class="footer">
        <p>&copy;2019 CSM</p>

        </div>

        <style>
        .footer {

        position: fixed;
        left: 0;
        bottom: 0;
        height: 8%;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
        }

        </style>
  </body>
</html>
