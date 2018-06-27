<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Momobilan</title>

  <!-- Bootstrap -->
  <link href="{{ asset('assets/theme/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="{{ asset('assets/theme/css/animate.css') }}" rel="stylesheet">

  <!-- Google Font Lato -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ asset('assets/theme/css/font-awesome.min.css') }}">

  <!-- Plugin Styles -->
  <link href="{{ asset('assets/theme/css/datepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/theme/css/animate.css') }}" rel="stylesheet">

  <!-- Main Styles -->
  <link href="{{ asset('assets/theme/css/styles.css') }}" rel="stylesheet">
  <!-- Available main styles: styles-red.css, styles-green.css -->

    <style>
        form .website_hp{
            display: none;
        }
    </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/ie8fix.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <![endif]-->


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/theme/img/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/theme/img/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/theme/img/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/theme/img/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/theme/img/ico/favicon.png') }}">

  </head>
  <body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

  <!-- Header start -->
  <header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

      <div class="row container box">
          <div class="col-md-5">
              <!-- Logo start -->
              <div class="brand">
                  <h1><a class="scroll-to" href="#top"><img class="img-responsive"  src="{{ asset('assets/theme/img/logo.gif') }}" alt="Car|Rental"></a></h1>
              </div>
              <!-- Logo end -->
          </div>

          <div class="col-md-7">
              <div class="pull-right">
                  <div class="header-info pull-right">
                      <div class="contact pull-left">CONTACT: (562) 498-4600</div>
                  </div>
              </div>

              <div class="clearfix"></div>

              <!-- start navigation -->
              <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                      <!-- Toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand scroll-to" href="#top"><img class="img-responsive"  src="{{ asset('assets/theme/img/logo.gif') }}" alt="Car|Rental"></a>
                      </div>
                      <!-- Collect the nav links, for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <!-- Nav-Links start -->
                          <ul class="nav navbar-nav navbar-right">
                              <li class="active"><a href="#top" class="scroll-to">Home</a></li>
                              <li><a href="#services" class="scroll-to">Services</a></li>
                              <li><a href="#vehicles" class="scroll-to">Vehicle Models</a></li>
                              <li><a href="#locations" class="scroll-to">Locations</a></li>
                              <li><a href="#contact" class="scroll-to">Contact</a></li>
                          </ul>
                          <!-- Nav-Links end -->
                      </div>
                  </div>
              </nav>
              <!-- end navigation -->
          </div>
      </div>

  </header>
  <!-- Header end -->
THANKS for Purchase

          <!-- Footer start -->
          <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <ul class="footer-nav">
                    <li><a class="scroll-to" href="#top">Home</a></li>
                    <li><a class="scroll-to" href="#services">Service</a></li>
                    <li><a class="scroll-to" href="#vehicles">Vehicle Models</a></li>
                    <li><a class="scroll-to" href="#reviews">Reviews</a></li>
                    <li><a class="scroll-to" href="#locations">Locations</a></li>
                    <li><a class="scroll-to" href="#contact">Contact</a></li>
                  </ul>
                  <div class="clearfix"></div>
                  <p class="copyright">Powered By ©2014 Themeinjection, Create With <span class="fa fa-heart"></span> by <a href="mailto:muhammad@gemanuryanaagung.today">Muhammad Gema Nuryana Agung</a></p>
                </div>
              </div>
            </div>
          </footer>
          <!-- Footer end -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('assets/theme/js/jquery-1.11.0.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="{{ asset('assets/theme/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/theme/js/jquery.autocomplete.min.js') }}"></script>
        <script src="{{ asset('assets/theme/js/jquery.placeholder.js') }}"></script>
        <script src="{{ asset('assets/theme/js/locations-autocomplete.js') }}"></script>
        <script src="{{ asset('assets/theme/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('assets/theme/js/gmap3.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsr1sFUtzPoVl9GIKmp1dXCS04tcJ9NfI" type="text/javascript"></script>




        <!--[if !(gte IE 8)]><!-->
            <script src="{{ asset('assets/theme/js/wow.min.js') }}"></script>
            <script>
                // Initialize WOW
                //-------------------------------------------------------------
                new WOW({mobile: false}).init();
            </script>
        <!--<![endif]-->

        <script src="{{ asset('assets/theme/js/custom.js') }}"></script>



      </body>
</html>