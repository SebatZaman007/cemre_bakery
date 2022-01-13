<!doctype html>
<html lang="en">
   @include('frontend.includes.head')
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
                  <div class="fixedArea">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                            <div class="content-wrapper one">
                                <!-- Main Menu Start -->
                                <!-- Navbar-->
                                <header class="header">
                                    <nav class="navbar navbar-default myNavBar">
                                        <div class="container">

                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                        <div class="row">
                                                            <div class="col-md-3 col-xs-3 col-sm-3">
                                                                <a style="padding-top:0px;" class="navbar-brand navBrandText text-uppercase font-weight-bold" href="index.html"><img src="{{asset('frontend/img/logo/cemrebakerylogo.png')}}" alt="restorant" /></a>

                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <a href="index.html"><img class="img-responsive logo" src="{{asset('frontend/img/logo/cemrebakerytextlogolight.png')}}" alt="restorant" /></a>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right navBar">
                                                    <li class="nav-item"><a href="#section0" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home <span class="sr-only">(current)</span></a></li>
                                                    <li class="nav-item"><a href="#section1" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Offers</a></li>
                                                    <li class="nav-item"><a href="#section2" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">About</a></li>
                                                    <li class="nav-item"><a href="#section3" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Portfolio</a></li>
                                                    <li class="nav-item"><a href="#section4" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Testimonial</a></li>
                                                    <li class="nav-item"><a href="#section5" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Blog</a></li>
                                                    <li class="nav-item"><a href="#section6" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Contact</a></li>
                                                    <li class="nav-item"><a href="#section7" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Address</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </header>
                                <!-- Main Menu End -->
                            </div>
						</div>
                  </div>
			</div>
		</header>
		<!-- Header Area End -->
		<!-- Section0 Area Start -->
        <section id="section0" class="slider-area">
            <div class="main-slider owl-theme owl-carousel">
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url({{asset('frontend/img/slider/doughnuts-gb3f24dccd_1920.jpg')}})">


                    <!-- <img src="img/slider/placehold.png"> -->

                    <!-- Start Slider Content -->

                     @foreach ($data as $item)
                     <div class="slider-content-area">
                        <div class="row">
                                <div class="slide-content-wrapper text-center">
                                    <div class="slide-content">
                                        <img class="classic" src="{{asset(BlogImage().$item->logo)}}">
                                        <h3> {{$item->title}}</h3>
                                        <h2>{{$item->description_1}}</h2>
                                        <p>{{$item->description_2}}</p>

                                        <a class="default-btn" href="about.html">Learn more</a>
                                        <img class="classic" src="{{asset('frontend/img/new/icon.png')}}">

                                    </div>
                                </div>
                            </div>
            </div>

                     @endforeach
                    <!-- Start Slider Content -->
                </div>
                <!-- End Single Slide -->
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url({{asset('frontend/img/slider/1900x1000.png')}})">

                    <!-- <img src="img/slider/bakery.jpg"> -->
                    <!-- Start Slider Content -->

                        <div class="slider-content-area">
                                <div class="row">
                                        <div class="slide-content-wrapper text-center">
                                            <div class="slide-content">
                                                <img class="classic" src="{{asset('frontend/img/logo/cemrebakerylogo.png')}}">

                                                <h3>BAKERY MAKES </h3>
                                                <h2>A Taste Of  The Good Life</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.</p>
                                                <a class="default-btn" href="about.html">Learn more</a>
                                                <img class="classic" src="{{asset('frontend/img/new/icon.png')}}">

                                            </div>
                                    </div>
                            </div>
                  </div>
                    <!-- Start Slider Content -->
                </div>

                <div class="single-slide item" style="background-image: url({{asset('frontend/img/slider/1900x1000.png')}})">

                    <!--<img src="img/slider/bakery.jpg">-->
                    <!-- Start Slider Content -->


                        <div class="slider-content-area">
                                <div class="row">
                                        <div class="slide-content-wrapper text-center">
                                            <div class="slide-content">
                                                <img class="classic" src="{{asset('frontend/img/logo/cemrebakerylogo.png')}}">

                                                <h3>BAKERY MAKES </h3>
                                                <h2>A Taste Of  The Good Life</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.</p>
                                                <a class="default-btn" href="about.html">Learn more</a>
                                                <img class="classic" src="{{asset('frontend/img/new/icon.png')}}">

                                            </div>
                                    </div>
                            </div>
                        </div>


                    <!-- Start Slider Content -->
                </div>
             </div>
        </section>

		<!-- Section0 Area End -->
        <!-- Section1 Start -->
        <section id="section1" class="topOff">
            <div class="container">
                <div class="row">
                    @foreach ($offer as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body colorfullPanel text-center">
                                <h3>{{$item->offer}}</h3>
                                <h2><span>{{$item->title_1}}</span> {{$item->title_2}}
                                    <img class="classic" src="{{asset('frontend/img/new/icon.png')}}">

                                    </h2>
                                    <p>{{$item->description}}</p>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Section1 End -->
        <!-- Section2 Start -->
        <section id="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="maintext text-center">
                            <span>Serve You Since 1988</span>
                            <h2>Welcome To Cemre Bakery</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.</p>
                            </div>
                    </div>
                </div>
                <div class="row shapes">
                   @foreach ($about as $item)
                   <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 minHeightProp">
                            <img class="imgback" src="{{asset(BlogImage().$item->about_image)}}">
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>{{$item->about_title}}</span>
                                <p>{{$item->about_description}}</p>
                                </div>
                        </div>
                    </div>
                </div>

                   @endforeach
                </div>
            </div>
        </section>
        <!-- Section2 End -->
        <!-- Banner Start -->

        <div class="container">
            <div class="banner"
            style="background-image: url({{asset('frontend/img/new/DSC_1853-1.jpg')}});">
                <div class="content text-center">
                    <span>NEW CAKE!!! GET IT FOR $12/PAX (LIMITED)</span>
                    <h2>Strawberry Pancake</h2>
                    <h3>SHOP NOW</h3>
                    <img class="classic" src="{{asset('frontend/img/new/icon.png')}}">
                </div>
            </div>
        </div>
        <!-- Banner End -->
        <!-- Section3 Start -->
        <section id="section3">
            <div class="container">

                <div class="row">
                     <div class="col-xs-12">
                        <div class="section-title text-center">
                            <h3>Premium Quality</h3>
                            <h2>Cemre Bakery Fresh Cakes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="container">
                        <div class="col-md-12 noPadding">
                            <div id="news-slider" class="news-slider owl-theme owl-carousel">
                                @foreach ($portfolio as $item)
                                <div class="post-slide">
                                    <div class="post-img">
                                        <div class="post-abs"><p>Progresso İtalian Style</p></div>
                                        <img src="{{asset(BlogImage().$item->about_image)}}" alt="">
                                    </div>
                                    <h3 class="post-title"><a href="#">{{$item->portfolio_productname}}</a></h3>
                                    <p class="post-description">
                                       {{$item->portfolio_rate}}
                                    </p>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section3 End -->
        <!-- Testimonial Area Start -->
        <section id="section4" class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/slider/1900x1000.png')}}">
            <h3>What We Say</h3>
            <h2>Customer Testimonial</h2>
        <div class="testimonial-area owl-theme owl-carousel" >

            <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                <div class="single-testimonial">
                    <div class="testimonial-info">
                        <div class="testimonial-content">
                            <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                            <h4>David Morgan</h4>
                            <h5>Student, CSE</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                <div class="single-testimonial">
                    <div class="testimonial-info">
                        <div class="testimonial-content">
                            <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                            <h4>David Morgan</h4>
                            <h5>Student, CSE</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                <div class="single-testimonial">
                    <div class="testimonial-info">
                        <div class="testimonial-content">
                            <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                            <h4>David Morgan</h4>
                            <h5>Student, CSE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->
        <section id="section5" class="blog-area">
            <div class="row">
                    <div class="col-xs-12">
                        <div class="blog-section-title text-center">
                            <h3>Cemre Bakery Blog</h3>
                            <h2>Our Latest News</h2>
                        </div>
                    </div>
                <div class="row">
                    <div class="container blog-section">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="blog-section-date col-md-4 col-sm-4 col-xs-12 noPadding">

                                        <p class="month">June</p>
                                        <p class="date">6.6.1986</p>


                                    </div>

                                    <div class="blog-section-description col-md-8 col-sm-8 col-xs-12 noPadding">
                                        <h2>I must explain to you how all this mistaken </h2>
                                        <p>idea of denouncing pleure and praising pain was born and I will give you a complete account of the system</p>

                                        <a href="">Shop</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="blog-section-date col-md-4 col-sm-4 col-xs-12 noPadding">

                                        <p class="month">June</p>
                                        <p class="date">6.6.1986</p>


                                    </div>

                                    <div class="blog-section-description col-md-8 col-sm-8 col-xs-12 noPadding">
                                        <h2>I must explain to you how all this mistaken </h2>
                                        <p>idea of denouncing pleure and praising pain was born and I will give you a complete account of the system</p>
                                        <a href="">Shop</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Blog Area End -->
        <!-- Contact Start -->
        <section id="section6" class="contact">
            <div class="contact100-form-title container">
                <h3>Keep In Touch</h3>
                <h2>Send A Message</h2>
                    <form class="contact100-form validate-form">


                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Your Name</span>
                            <input class="input100" type="text" name="name" placeholder="Enter your name">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Message</span>
                            <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>

                        <div class="container-contact100-form-btn response" style="margin-top: 30px;">
                            <p class="error">
                            </p>
                        </div>
                    </form>
                </div>
        </section>
        <!-- Contact End -->
        <!-- Address Section Start -->
      @include('frontend.includes.cemrebakerylocation')

        <!-- Adress Section End -->
        <!-- Footer Start -->
       @include('frontend.includes.footer')
        <!-- Footer End -->
       @include('frontend.includes.scripts')
    </body>
</html>
