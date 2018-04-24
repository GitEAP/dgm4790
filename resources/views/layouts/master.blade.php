<!DOCTYPE HTML>

<html>
    <head>
        <title>Massively by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <link rel="stylesheet" href="/css/app.css" />
        <noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
    </head>
    <body class="is-loading">

        <!-- Wrapper -->
            <div id="wrapper" class="fade-in">
          
           <!-- introHeader -->
                @yield ('introHeader')

                @include ('layouts.nav')

                <!-- Main -->
                @yield ('content')

                @include ('layouts.footer')

            </div><!-- end of wrapper -->


        <!-- Scripts -->
            <script src="/js/jquery.min.js"></script>
            <script src="/js/jquery.scrollex.min.js"></script>
            <script src="/js/jquery.scrolly.min.js"></script>
            <script src="/js/skel.min.js"></script>
            <script src="/js/util.js"></script>
            <script src="/js/app.js"></script>

    </body>
</html>