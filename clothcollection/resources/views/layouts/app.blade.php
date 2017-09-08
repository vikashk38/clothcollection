<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('layout/css/bootstrap.min.css') }}">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('layout/css/style.default.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset('layout/css/custom.css') }}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('layout/img/favicon.ico') }}">
        <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">


    </head>
    <body>
        <!-- @section('sidebar')
            This is the master sidebar.
        @show -->
        <div class="container">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="{{ URL::asset('layout/js/tether.min.js') }} "></script>
        <script src="{{ URL::asset('layout/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('layout/js/jquery.cookie.js') }}"> </script>
        <script src="{{ URL::asset('layout/js/jquery.validate.min.js') }}"></script>
        <script src="{{ URL::asset('layout/js/front.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
        <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    </body>
</html>
