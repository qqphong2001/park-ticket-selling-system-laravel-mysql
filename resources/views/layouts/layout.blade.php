<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Home</title>

    <!-- Font awesome -->
    <link href="{{url("asset")}}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{url("asset")}}/css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{url("asset")}}/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{url("asset")}}/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{url("asset")}}/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{url("asset")}}/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="{{url("asset")}}/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="{{url("asset")}}/css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{url("asset")}}/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{url("asset")}}/css/style.css" rel="stylesheet">

    <script src="{{url("asset")}}/js/main.js" ></script>
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

  @php
   $count = Session::get('carts') !== null ? count(Session::get('carts')) :'0';
  @endphp

  <body>
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>
    <!-- / wpf loader Two -->
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-top-area">
                <!-- start header top left -->
                <div class="aa-header-top-left">
                </div>
                <!-- / header top left -->
                <div class="aa-header-top-right">
                  <ul class="aa-head-top-nav-right">

                    <li class="hidden-xs"><a href="{{url('/cart')}}">My Cart</a></li>

                    @if(Auth::check())
                        @if(isset(Auth::user()->email_verified_at))
                             <li>
                         <a class="nav-link" data-toggle="dropdown" href="#">
                           Hello |  {{Auth::user()->name}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 100px;top: 135%">
                            <a href="{{url('account/logout')}}" class="dropdown-item">

                             log out

                            </a>


                          </div>
                          </li>

                          @else
                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>


                        @endif


                    @else


                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                    @endif

                </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{url('index')}}">
                  {{-- <span class="fa fa-shopping-cart"></span> --}}
                  {{-- <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p> --}}
                  <img src="{{url("asset")}}/img/logo.png" width="250" alt="">
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="{{url("asset")}}/img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->


              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify" class="cart-count">{{$count }}</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    @php
                    $sum = 0
                    @endphp
                    @if( $count)
                        @foreach($products as $key => $product)
                        @php
                         $price = $product->price * $carts[$product->product_id];
                         $sum += $price;
                        @endphp
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="{{$product->photo}}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">{{$product->name}}</a></h4>
                         <span class="num-cart"> {{$carts[$product->product_id]}} x </span> <span>{{$product->price}}</span>
                      </div>
                      <a class="aa-remove-product" href="{{url('cart/delete/'.$product->product_id)}}"><span class="fa fa-times"></span></a>
                    </li>
                        @endforeach
                    @endif
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price" class="cart-price">
                        ${{$sum}}
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="{{url('/cart')}}">Checkout</a>
                </div>
              </div>



              <!-- / cart box -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav" style="text-transform: capitalize;">
                @foreach($home as $item)
                <li><a href="/{{$item->url}}">{{$item->name}}</a></li>
                @endforeach
                @foreach($menus as $menu)
                 <li><a href="/{{$menu->url}}">{{$menu->name}}</a></li>
              @endforeach
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </section>
  <!-- / menu -->



  {{-- content --}}

  @yield('content')
  {{-- end content --}}


  <!-- footer -->
  <footer id="aa-footer">
    <div class="aa-footer-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hwrap">
                        <div class="hmove">
                            <div class="hitem">Keansburg Park</div>
                            <div class="hitem" id="date"></div>
                            <div class="hitem" id="time"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer - top -->
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">

                  <h3><a href="{{url('/account/register')}}" style="color: white">Become A Member</a></h3>
                  <h3><a href="{{url('/account/login')}}" style="color: white">Sign Up</a></h3>
                  <h3><a href="{{url('/contact')}}" style="color: white">Send Us Feedback</a></h3>


                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3><a href="#" style="color: white">Main Menu</a></h3>
                  <ul class="aa-footer-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{url('/food/index')}}">Food</a></li>
                    <li><a href="{{url('/zones/index')}}">Zones</a></li>
                    <li><a href="{{url('/tickets/index')}}">Tickets</a></li>

                  </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3><a href="{{url('/contact')}}" style="color: white">About Us</a></h3>
                    <ul class="aa-footer-nav">
                      <li><a href="{{url('/news')}}">News</a></li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 275 Beachway Avenue, Keansburg, NJ 07734</p>
                      <p><span class="fa fa-phone"></span>732-495-1400</p>
                      <p><span class="fa fa-envelope"></span>keansburgpark@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->

  </footer>
  <!-- / footer -->

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="{{ url('account/process-login') }}" method="post">
            @csrf
            <label for="">Email address<span>*</span></label>
            <input type="text" placeholder="Username or email"  name="email">
            <label for="">Password<span>*</span></label>
            <input name="password" type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme" name="remember"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="{{url('account/register')}}">Register now!</a>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{url("asset")}}/js/bootstrap.js"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{url("asset")}}/js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{url("asset")}}/js/jquery.smartmenus.bootstrap.js"></script>
  <!-- To Slider JS -->
  <script src="{{url("asset")}}/js/sequence.js"></script>
  <script src="{{url("asset")}}/js/sequence-theme.modern-slide-in.js"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="{{url("asset")}}/js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="{{url("asset")}}/js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{url("asset")}}/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{url("asset")}}/js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="{{url("asset")}}/js/custom.js"></script>
   {{-- scrolling ticker --}}
   <script src="{{ url('asset') }}/js/date-time-location.js"></script>
   {{-- scrolling ticker --}}
  <script src="{{ url('asset') }}/js/ajax.js"></script>
  </body>
</html>
