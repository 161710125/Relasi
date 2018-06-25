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



    <!-- Teaser start -->
    <section id="teaser">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xs-12 pull-right">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides start -->
              <div class="carousel-inner">
                <div class="item active">
                  <h1 class="title">Luxury car from from $28 day
                    <span class="subtitle">Treat yourself in USA</span></h1>
                    <div class="car-img">
                      <img src="{{ asset('assets/theme/img/car1.png') }}" class="img-responsive" alt="car1">
                    </div>
                  </div>
                  <div class="item">
                    <h1 class="title">Get 15% off your rental
                      <span class="subtitle">Plan your trip now</span></h1>
                      <div class="car-img">
                        <img src="{{ asset('assets/theme/img/car2.png') }}" class="img-responsive" alt="car1">
                      </div>
                    </div>
                  </div>
                  <!-- Wrapper for slides end -->

                  <!-- Slider Controls start -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                  <!-- Slider Controls end -->
                </div>
              </div>
              <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">

                  <form action="#" method="post" name="car-select-form" id="car-select-form">
                    <!-- <form action="{{ route('front.store') }}" method="post" name="car-select-form" id="car-select-form">
                    {{ csrf_field() }} -->

                    <div class="alert alert-danger hidden" id="car-select-form-msg">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <strong>Note:</strong> All fields required!
                    </div>

                    <!-- Car select start -->
                    <!-- <div class="styled-select-car">
                      <select name="car-select" id="car-select">
                        <option value="">Select your car type</option>
                        <option value="{{ asset('assets/theme/img/vehicle1.jpg') }}">VW Golf VII</option>
                        <option value="{{ asset('assets/theme/img/vehicle2.jpg') }}">Audi A1 S-LINE</option>
                        <option value="{{ asset('assets/theme/img/vehicle3.jpg') }}">Toyota Camry</option>
                        <option value="{{ asset('assets/theme/img/vehicle4.jpg') }}">BMW 320 ModernLine</option>
                        <option value="{{ asset('assets/theme/img/vehicle5.jpg') }}">Mercedes-Benz GLK</option>
                        <option value="{{ asset('assets/theme/img/vehicle6.jpg') }}">VW Passat CC</option>
                      </select>
                    </div> -->
                    <div class="styled-select-car">
                        <select name="id_mobil" class="form-control">
                            <option>Pilih Foto</option>
                            @foreach($mobil as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_mobil'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_mobil') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- Car select end -->

                    <!-- Pick-up location start -->
                    <div class="location">
                      <div class="input-group pick-up">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Pick-up</span>
                        <input type="text" name="jemput_p" id="pick-up-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport">
                      </div>
                      <!-- Pick-up location end -->

                      <a class="different-drop-off" href="#">Need a different drop-off location?</a>

                      <!-- Drop-off location start -->
                      <div class="input-group drop-off">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Drop-off</span>
                        <input type="text" name="jemput_a" id="drop-off-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport">
                      </div>
                    </div>
                    <!-- Drop-off location end -->

                    <!-- Pick-up date/time start -->
                    <div class="datetime pick-up">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>
                          <input type="text" readonly="true" name="tgl_pinjam" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- Pick-up date/time end -->

                    <!-- Drop-off date/time start -->
                    <div class="datetime drop-off">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>
                          <input type="text" readonly="true" name="tgl_kembali" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- Drop-off date/time end -->

                    <input type="submit" class="submit" name="submit" value="continue car reservation" id="checkoutModalLabel">
                  </form>

                </div>
              </div>

            </div>
          </div>
        </section>
        <div class="arrow-down"></div>
        <!-- Teaser end -->



        <!-- Services start -->
        <section id="services" class="container">
          <div class="row">
            <div class="col-md-12 title">
              <h2>Customer Services</h2>
              <span class="underline">&nbsp;</span>
            </div>

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Special rates on car booking</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
            <!-- Service Box end -->

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Mobile Phone Reservation</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
            <!-- Service Box end -->

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Unlimited Miles Car Rental</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
            <!-- Service Box end -->

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">One Way Car Rentals</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
            <!-- Service Box end -->

          </div>
        </section>
        <!-- Services end -->

          <!-- Vehicles start -->
          <section id="vehicles" class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="title wow fadeInDown" data-wow-offset="200">Vehicle Models - <span class="subtitle">Our rental fleet at a glance</span></h2>
              </div>

              <!-- Vehicle nav start -->
              <div class="col-md-3 vehicle-nav-row wow fadeInUp" data-wow-offset="100">
                <div id="vehicle-nav-container">
                  <ul class="vehicle-nav">
                      <li class="active"><a href="#vehicle-1">VW Golf VII</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-2">Audi A1 S-LINE</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-3">Toyota Camry</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-4">BMW 320 ModernLine</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-5">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-6">VW Passat CC</a><span class="active">&nbsp;</span></li>

                      <li><a href="#vehicle-7">Audi A1 S-LINE</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-8">Toyota Camry</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-9">BMW 320 ModernLine</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-10">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-11">VW Passat CC</a><span class="active">&nbsp;</span></li>

                      <li><a href="#vehicle-7">Audi A1 S-LINE 12</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-8">Toyota Camry 13</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-9">BMW 320 ModernLine 14</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-10">Mercedes-Benz GLK 15</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-11">VW Passat CC 16</a><span class="active">&nbsp;</span></li>

                      <li><a href="#vehicle-7">Audi A1 S-LINE</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-8">Toyota Camry</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-9">BMW 320 ModernLine</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-10">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-11">VW Passat CC</a><span class="active">&nbsp;</span></li>
                  </ul>
                </div>

                  <div class="vehicle-nav-control">
                      <a class="vehicle-nav-scroll" data-direction="up" href="#"><i class="fa fa-chevron-up"></i></a>
                      <a class="vehicle-nav-scroll" data-direction="down" href="#"><i class="fa fa-chevron-down"></i></a>
                  </div>

              </div>
              <!-- Vehicle nav end -->

              <!-- Vehicle 1 data start -->
              <div class="vehicle-data" id="vehicle-1">
                <div class="col-md-6 wow fadeIn" data-wow-offset="100">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="{{ asset('assets/theme/img/vehicle1.jpg') }}" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
                  <div class="vehicle-price">$ 37.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
              <!-- Vehicle 1 data end -->

              <!-- Vehicle 2 data start -->
              <div class="vehicle-data" id="vehicle-2">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle2.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 70.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
              <!-- Vehicle 2 data end -->

              <!-- Vehicle 3 data start -->
              <div class="vehicle-data" id="vehicle-3">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle3.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
              <!-- Vehicle 3 data end -->

              <!-- Vehicle 4 data start -->
              <div class="vehicle-data" id="vehicle-4">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle4.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
              <!-- Vehicle 4 data end -->

              <!-- Vehicle 5 data start -->
              <div class="vehicle-data" id="vehicle-5">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
              <!-- Vehicle 5 data end -->

              <!-- Vehicle 6 data start -->
              <div class="vehicle-data" id="vehicle-6">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle6.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Model</td>
                      <td>Limousine</td>
                    </tr>
                    <tr>
                      <td>Doors</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Seats</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Luggage</td>
                      <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>Automatic</td>
                    </tr>
                    <tr>
                      <td>Air conditioning</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Minimum age</td>
                      <td>25 years</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                </div>
              </div>
              <!-- Vehicle 6 data end -->

                <!-- Vehicle 7 data start -->
                <div class="vehicle-data" id="vehicle-7">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle2.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 70.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                <!-- Vehicle 7 data end -->

                <!-- Vehicle 8 data start -->
                <div class="vehicle-data" id="vehicle-8">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle3.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                <!-- Vehicle 8 data end -->

                <!-- Vehicle 9 data start -->
                <div class="vehicle-data" id="vehicle-9">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle4.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                <!-- Vehicle 9 data end -->

                <!-- Vehicle 10 data start -->
                <div class="vehicle-data" id="vehicle-10">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                <!-- Vehicle 10 data end -->

                <!-- Vehicle 11 data start -->
                <div class="vehicle-data" id="vehicle-11">
                    <div class="col-md-6" data-wow-offset="200">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="img/vehicle6.jpg" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-offset="200">
                        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td>Limousine</td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td>2 Suitcases / 2 Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td>25 years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
                <!-- Vehicle 11 data end -->

            </div>
          </section>
          <!-- Vehicles end -->



          <!-- Reviews start -->
          <section id="reviews" class="container wow fadeInUp">
            <div class="row text-center">
              <div class="col-md-12 stars">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star big"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div id="reviews-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">

                    <!-- Review item 1 start -->
                    <div class="item active">
                      <div class="review">
                        It is always a positive experience when renting from your 5th street location. The staff is very professional and efficient and always smiling. And I always feel welcome and appreciated. The management is always prompt to solve any issue at any moment. Their efficiency and professionalism makes it my number one choice.
                      </div>
                      <div class="author">
                        – Michael Smith, Santa Barbara CA
                      </div>
                    </div>
                    <!-- Review item 1 end -->

                    <!-- Review item 2 start -->
                    <div class="item">
                      <div class="review">
                       This rental was the best rental experience ever! After completing all details on-line myself, the pick-up was super efficient, extremely friendly, and free of the usual 5 - 10 min very unpleasant drilling of why one is not signing up to all options (insurance, etc). I was handed the keys and a wide register print out that required...
                     </div>
                     <div class="author">
                      – Jon Doe, Las Vegas NV
                    </div>
                  </div>
                  <!-- Review item 2 end -->

                  <!-- Review item 3 start -->
                  <div class="item">
                    <div class="review">
                      This was my first time renting from car|rental. And over all it was a wonderful experience I have no complaints. The service rep help me find the best rental to suit my needs. I also love the fact that you guys provide luxury rentals at a great price. I will definitely rent with this company again.
                    </div>
                    <div class="author">
                      – Michael Smith, Santa Barbara CA
                    </div>
                  </div>
                  <!-- Review item 3 end -->

                </div>

                <!-- Review Nav start -->
                <ol class="carousel-indicators">
                  <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#reviews-carousel" data-slide-to="1"></li>
                  <li data-target="#reviews-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Review Nav end -->

              </div>
            </div>
          </div>
        </section>
        <!-- Reviews end -->



        <!-- Locations start -->
        <section id="locations">
          <div class="container location-select-container wow bounceInDown" data-wow-offset="200">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="location-select">
                  <div class="row">
                    <div class="col-md-6">
                      <h2>Car Rental Locations</h2>
                    </div>
                    <div class="col-md-6">
                      <div class="styled-select-location">
                        <select id="location-map-select"></select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="arrow-down-location">&nbsp;</div>
          </div>
          <div class="map wow bounceInUp" data-wow-offset="100"><!-- map by gmap3 --></div>
        </section>
        <!-- Locations end -->

        <!-- Contact start -->
        <section id="contact" class="container wow bounceInUp" data-wow-offset="50">
          <div class="row">
            <div class="col-md-12">
              <h2>Contact Us</h2>
            </div>
            <div class="col-md-4 col-xs-12 pull-right">
              <h4 class="contact-box-title">Customer Center</h4>
              <div class="contact-box">
                <div class="contact-box-name">Sarah Connor</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
              </div>
              <div class="contact-box-border">&nbsp;</div>

              <div class="contact-box-divider">&nbsp;</div>

              <h4 class="contact-box-title">Change or Cancel Reservation</h4>
              <div class="contact-box">
                <div class="contact-box-name">Mike Smith</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
              </div>
              <div class="contact-box-border">&nbsp;</div>

              <div class="contact-box">
                <div class="contact-box-name">Jane Doe</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
              </div>
              <div class="contact-box-border">&nbsp;</div>
            </div>
            <div class="col-md-8 col-xs-12 pull-left">
              <p class="contact-info">You have any questions or need additional information? <br>
                <span class="address"><span class="highlight">Address:</span>  Car|Rental / 3861 Sepulveda Blvd. / Culver City, CA 90230</span></p>
                  <form action="{{route('front.store')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
                    <input type="hidden" name="action" value="send_contact_form"/>
                    <input type="text" class="website_hp" name="website_hp"/>

                  <div class="alert hidden" id="contact-form-msg"></div>

                  <div class="form-group">
                    <input type="text" class="form-control first-name text-field" name="nama_p" placeholder="First Name:">
                    <input type="text" class="form-control last-name text-field" name="nama_a" placeholder="Last Name:">
                    <div class="clearfix"></div>
                  </div>

                  <div class="form-group">
                    <input type="tel" class="form-control telephone text-field" name="no_hp" placeholder="Telephone:">
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control email text-field" name="email" placeholder="Email:">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control message" name="message" placeholder="Message:"></textarea>
                  </div>

                    <input type="submit" class="btn submit-message" name="submit-message" value="Submit Message">


                </form>
              </div>

            </div>
          </section>
          <!-- Contact end -->


          <a href="#" class="scrollup">ScrollUp</a>


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
                  <p class="copyright">©2014 Themeinjection, All Rights Reserved</p>
                </div>
              </div>
            </div>
          </footer>
          <!-- Footer end -->



          <!-- Checkout Modal Start -->
          <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{route('front.store')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}

                  <!-- Modal header start -->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Complete reservation</h4>
                  </div>
                  <!-- Modal header end -->

                  <!-- Modal body start -->
                  <div class="modal-body">

                    <!-- Checkout Info start -->
                    <div class="checkout-info-box">
                      <h3><i class="fa fa-info-circle"></i> Upon completing this reservation enquiry, you will receive::</h3>
                      <p>Your rental voucher to produce on arrival at the rental desk and a toll-free customer support number.</p>
                    </div>
                    <!-- Checkout Info end -->

                    <!-- Checkout Rental Info start -->
                    <!-- <div class="styled-select-car">
                        <select name="id_mobil" class="form-control">
                            <option>Pilih Foto</option>
                            @foreach($mobil as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_mobil'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_mobil') }}</strong>
                        </span>
                        @endif
                    </div> -->
                    @foreach($mobil as $data)
                    <input type="hidden" name="id_mobil" value="{{ $data->id }}">
                    @endforeach
                    <div class="checkout-vehicle-info">
                      <div class="location-date-info">
                        <h3>Location & Date</h3>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-calendar"></span>
                          <h4 class="info-box-title">Pick-Up Time</h4>
                          <p class="info-box-description"><span id="pick-up-date-ph"></span></p>
                          <input type="hidden" name="tgl_pinjam" id="pick-up" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-calendar"></span>
                          <h4 class="info-box-title">Drop-Off Time</h4>
                          <p class="info-box-description"><span id="drop-off-date-ph"></span></p>
                          <input type="hidden" name="tgl_kembali" id="drop-off" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-map-marker"></span>
                          <h4 class="info-box-title">Pick-Up Location</h4>
                          <p class="info-box-description" id="pickup-location-ph"></p>
                          <input type="hidden" name="jemput_p" id="pickup-location" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-map-marker"></span>
                          <h4 class="info-box-title">Drop-Off Location</h4>
                          <p class="info-box-description" id="dropoff-location-ph"></p>
                          <input type="hidden" name="jemput_a" id="dropoff-location" value="">
                        </div>
                      </div>

                      <div class="vehicle-info">
                        <h3>CAR: <span id="selected-car-ph"></span></h3> <a href="#vehicles" class="scroll-to">[ Vehicle Models ]</a>
                        <div class="clearfix"></div>
                        <div class="vehicle-image">
                          <img class="img-responsive" id="selected-vehicle-image" src="../img/{{ $data->galeri->foto }}" alt="Vehicle">
                        </div>
                      </div>

                      <div class="clearfix"></div>

                    </div>
                    <!-- Checkout Rental Info end -->

                    <hr>

                    <!-- Checkout Personal Info start -->
                    <div class="checkout-personal-info">
                      <div class="alert hidden" id="checkout-form-msg">
                        test
                      </div>
                      <h3>PERSONAL INFORMATION</h3>
                      <div class="form-group left">
                        <label for="first-name">First Name:</label>
                        <input type="text" class="form-control" name="nama_p" id="first_name">
                      </div>
                      <div class="form-group right">
                        <label for="last-name">Last Name:</label>
                        <input type="text" class="form-control" name="nama_a" id="last_name">
                      </div>
                      <div class="form-group left">
                        <label for="phone-number">Phone Number:</label>
                        <input type="text" class="form-control" name="no_hp" id="phone-number">
                      </div>
                      <div class="form-group left">
                        <label for="phone-number">Identitas</label>
                        <input type="text" class="form-control" name="identitas" id="identitas">
                      </div>
                  <!-- Checkout Personal Info end -->

                  <!-- Checkout Address Info start -->
                  <div class="form-group left {{ $errors->has('id_supir') ? 'has error' : '' }}">
                        <label class="control-label">Foto</label>
                        <select name="id_supir" class="form-control">
                            <option>Pilih Supir</option>
                            @foreach($supir as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_supir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_supir') }}</strong>
                        </span>
                        @endif
                    </div>

                  <div class="checkout-address-info">
                    <div class="form-group address">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="alamat" id="address">
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <!-- Checkout Address Info end -->
                <!-- Modal body end -->

                <!-- Modal footer start -->
                <div class="modal-footer">
                  <span class="btn-border btn-gray">
                    <button type="button" class="btn btn-default btn-gray" data-dismiss="modal">Cancel</button>
                  </span>
                  <span class="btn-border btn-yellow">
                    <button type="submit" class="btn btn-primary btn-yellow">Reserve now</button>
                  </span>
                </div>
                <!-- Modal footer end -->

              </form>
            </div>
          </div>
        </div>
        <!-- Checkout Modal end -->


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