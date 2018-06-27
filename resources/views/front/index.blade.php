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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <link rel="shortcut icon" href="{{ asset('assets/theme/img/ico/a.jpg') }}">

  </head>
  <body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

  <!-- Header start -->
  <header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

      <div class="row container box">
          <div class="col-md-5">
              <!-- Logo start -->
              <div class="brand">
                  <h1><a class="scroll-to" href="#top"><h1>Momobilan</h1></a></h1>
              </div>
              <!-- Logo end -->
          </div>

          <div class="col-md-7">
              <div class="pull-right">
                  <div class="header-info pull-right">
                      <div class="contact pull-left"> <span class="fa fa-whatsapp" style="color:green"></span> <a href="sms:+6289639301145">+6289639301145</a> <a href="mailto:gemanuryanaagung.today"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a></div>
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
                          <a class="navbar-brand scroll-to" href="#top"><img class="img-responsive"  src="{{ asset('assets/theme/img/ico/a.jpg') }}" alt="Momobilan"></a>
                      </div>
                      <!-- Collect the nav links, for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <!-- Nav-Links start -->
                          <ul class="nav navbar-nav navbar-right">
                              <li class="active"><a href="#top" class="scroll-to">Home</a></li>
                              <li><a href="#services" class="scroll-to">Services</a></li>
                              <li><a href="#vehicles" class="scroll-to">Mobil</a></li>
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
                  <h1 class="title">
                    <span class="subtitle"></span></h1>
                    <div class="car-img">
                      <img src="{{ asset('assets/theme/img/car1.png') }}" class="img-responsive" alt="car1">
                    </div>
                  </div>
                  <div class="item">
                    <h1 class="title">
                      <span class="subtitle"></span></h1>
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
                      <strong>Note:</strong> Isi Semua Data!
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
                            <option>Pilih Mobil</option>
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
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Titik Jemput</span>
                        <input type="text" name="jemput_p" id="pick-up-location" class="form-control autocomplete-location" placeholder="Jl Cibaduyut No 11">
                      </div>
                      <!-- Pick-up location end -->

                      <a class="different-drop-off" href="#">Butuh Titik Akhir?</a>

                      <!-- Drop-off location start -->
                      <div class="input-group drop-off">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Titik Akhir&nbsp&nbsp&nbsp&nbsp</span>
                        <input type="text" name="jemput_a" id="drop-off-location" class="form-control autocomplete-location" placeholder="Jl Cibaduyut No 55">
                      </div>
                    </div>
                    <!-- Drop-off location end -->

                    <!-- Pick-up date/time start -->
                    <!-- <div class="datetime pick-up">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>
                          <input type="text" readonly="true" name="tgl_pinjam" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div> -->
                    <!-- Pick-up date/time end -->

                    <!-- Drop-off date/time start -->
                    <!-- <div class="datetime drop-off">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>
                          <input type="text" readonly="true" name="tgl_kembali" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div> -->
                    <!-- Drop-off date/time end -->

                    <input type="submit" class="submit" name="submit" value="Continue" id="checkoutModalLabel">
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
              <h2>Orang Menggunakan Momobilan Karena</h2>
              <span class="underline">&nbsp;</span>
            </div>

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Jaminan Harga Terbaik</h3>
                <div class="clearfix"></div>
                <p class="service-content">Bandingkan seluruh mitra kami untuk mendapatkan harga terbaik di sini.</p>
              </div>
            </div>
            <!-- Service Box end -->

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Konfirmasi Instan</h3>
                <div class="clearfix"></div>
                <p class="service-content">Pemesanan Anda terjamin & pikiran lebih tenang.<br><br></p>
              </div>
            </div>
            <!-- Service Box end -->

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Jaminan untuk setiap Pemesanan</h3>
                <div class="clearfix"></div>
                <p class="service-content">Kami memantau setiap pemesanan untuk memastikan Anda mendapatkan mobil yang Anda pilih atau setara.</p>
              </div>
            </div>
            <!-- Service Box end -->

            <!-- Service Box start -->
            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Terpercaya & Kualitas Tinggi</h3>
                <div class="clearfix"></div>
                <p class="service-content">Kendaraan yang tidak bermasalah dan karyawan supir yang dapat dipercaya.<br><br></p>
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
                      <li class="active"><a href="#vehicle-1">Mobil 1</a><span class="active">&nbsp;</span></li>
                  </ul>
                </div>

                  <div class="vehicle-nav-control">
                      <a class="vehicle-nav-scroll" data-direction="up" href="#"><i class="fa fa-chevron-up"></i></a>
                      <a class="vehicle-nav-scroll" data-direction="down" href="#"><i class="fa fa-chevron-down"></i></a>
                  </div>

              </div>
              <!-- Vehicle nav end -->

              <!-- Vehicle 1 data start -->
              @foreach ($mobil as $data)
              <div class="vehicle-data" id="vehicle-1">
                <div class="col-md-6 wow fadeIn" data-wow-offset="100">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="{{ asset('assets/theme/img/vehicle1.jpg') }}" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
                  <div class="vehicle-price">RP. {{$data->harga}} <span class="info">per hari</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Merk</td>
                      <td>{{$data->merk}}</td>
                    </tr>
                    <tr>
                      <td>Kapasitas</td>
                      <td>{{$data->kapasitas}}</td>
                    </tr>
                    <tr>
                      <td>Tahun Keluaran</td>
                      <td>{{$data->tahun_kel}}</td>
                    </tr>
                    <tr>
                      <td>Plat Nomor</td>
                      <td>{{$data->plat_no}}</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Booking Sekarang</a>
                </div>
              </div>
              @endforeach
              <!-- Vehicle 1 data end -->

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
                      This was my first time renting from Momobilan. And over all it was a wonderful experience I have no complaints. The service rep help me find the best rental to suit my needs. I also love the fact that you guys provide luxury rentals at a great price. I will definitely rent with this company again.
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
                      <h2>Lokasi Momobilan</h2>
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
              <h2>Hubungi Kami</h2>
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

              <h4 class="contact-box-title">Pembatalan atau Perubahan jadwal</h4>
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
              <p class="contact-info">Butuh Sesuatu yang lain, datangi alamat kami di <br>
                <span class="address"><span class="highlight">Alamat:</span>  Momobilan / Jalan Terate 2 no 69 / Bandung, Jawa Barat 40238</span></p>
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
                    <li><a class="scroll-to" href="#vehicles">Mobil</a></li>
                    <li><a class="scroll-to" href="#reviews">Reviews</a></li>
                    <li><a class="scroll-to" href="#locations">Lokasi</a></li>
                    <li><a class="scroll-to" href="#contact">Kontak</a></li>
                  </ul>
                  <div class="clearfix"></div>
                  <p class="copyright">Powered By ©2014 Themeinjection, Create and Edit With <span class="fa fa-heart"></span> by <a href="mailto:muhammad@gemanuryanaagung.today">Muhammad Gema Nuryana Agung</a></p>
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
                    <h4 class="modal-title" id="myModalLabel">Selesaikan Pemesanan</h4>
                  </div>
                  <!-- Modal header end -->

                  <!-- Modal body start -->
                  <div class="modal-body">

                    <!-- Checkout Info start -->
                    <div class="checkout-info-box">
                      <h3><i class="fa fa-info-circle"></i> Setelah menekan tombol Pesan, anda hanya tinggal menunggu pihak kami menelpon.</h3>
                      <p>Masukan Semua data dengan benar</p>
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
                        <h3>Lokasi Dan Tanggal</h3>
                        <div class="form-group {{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
                       <span class="glyphicon glyphicon-calendar"></span> <label class="control-label">Tanggal Pinjam</label>   
                        <input type="date" name="tgl_pinjam" class="form-control"  required>
                        @if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
                       <span class="glyphicon glyphicon-calendar"></span> <label class="control-label">Tanggal Kembali</label>   
                        <input type="date" name="tgl kembali" class="form-control"  required>
                        @if ($errors->has('tgl kembali'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl kembali') }}</strong>
                            </span>
                        @endif
                    </div>
                        <!-- <div class="info-box">
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
                        </div> -->
                        <div class="info-box">
                          <span class="glyphicon glyphicon-map-marker"></span>
                          <h4 class="info-box-title">Titik Jemput</h4>
                          <p class="info-box-description" id="pickup-location-ph"></p>
                          <input type="hidden" name="jemput_p" id="pickup-location" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-map-marker"></span>
                          <h4 class="info-box-title">Titik Akhir</h4>
                          <p class="info-box-description" id="dropoff-location-ph"></p>
                          <input type="hidden" name="jemput_a" id="dropoff-location" value="">
                        </div>
                      </div>

                      <div class="vehicle-info">
                        <h3>MOBIL : <span id="selected-car-ph"></span></h3> <a href="#vehicles" class="scroll-to">Jenis Mobil</a>
                        <div class="clearfix"></div>
                        <div class="vehicle-image">
                          <img class="img-responsive" id="selected-vehicle-image" src="{{ asset('/img/'.$data->galeri->foto) }} " alt="Vehicle" style="max-height:250px;max-width:300px;margin-top:7px;">
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
                      <h3>DATA DIRI</h3>
                      <div class="form-group left">
                        <label for="first-name">Nama Pertama:</label>
                        <input type="text" class="form-control" name="nama_p" id="first_name" placeholder="Jajang">
                      </div>
                      <div class="form-group right">
                        <label for="last-name">Nama Akhir:</label>
                        <input type="text" class="form-control" name="nama_a" id="last_name" placeholder="Sopana">
                      </div>
                      <div class="form-group left">
                        <label for="phone-number">Nomor Handphone</label>
                        <input type="text" class="form-control" name="no_hp" id="phone-number" placeholder="+62xxxxxxxxxx">
                      </div>
                      <div class="form-group right">
                        <label for="phone-number">Identitas</label>
                        <input type="text" class="form-control" name="identitas" id="identitas" placeholder="1000xxxxxxxxx">
                      </div>
                  <!-- Checkout Personal Info end -->

                  <!-- Checkout Supir Info start -->
                  <div class="form-group left {{ $errors->has('id_supir') ? 'has error' : '' }}">
                        <label for="phone-number">Supir</label>
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

                  <div class="form-group right">
                      <label for="address">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="address" placeholder="Jl Cibaduyut No 34">
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <!-- Checkout Address Info end -->
                <!-- Modal body end -->

                <!-- Modal footer start -->
                <div class="modal-footer">
                  <span class="btn-border btn-gray">
                    <button type="button" class="btn btn-default btn-gray" data-dismiss="modal">Batal</button>
                  </span>
                  <span class="btn-border btn-yellow">
                    <button type="submit" class="btn btn-primary btn-yellow">Pesan</button>
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