<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Editorial</title>
  
    <link href="/css/app.css" rel="stylesheet">

  </head>

  <body>

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Main -->
          <div id="main">
            <div class="inner">

              @include ('layouts.header')

              @yield ('content')


            </div><!-- end of inner -->
          </div><!-- end of main -->

          @include ('layouts.sidebar')

      </div><!-- end of wrapper -->

    <!-- Scripts -->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/skel.min.js"></script>
      <script src="/js/util.js"></script>
      <script src="/js/main.js"></script>

  </body>
</html>