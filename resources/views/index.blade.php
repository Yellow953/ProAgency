@extends('layouts/app')

@section('content')
<!-- header -->
<header>
    <div class="header">
        <div class="white_bg p-3">
            @include('layouts._header')

            <!-- banner -->
            <section class="banner_main p-0">
                <div id="banner1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="carousel-caption p-0">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                            <div class="text-bg m-5">
                                                <img src="{{asset('assets/images/logo.png')}}" alt=""
                                                    class="banner-img rounded-full "> <br>
                                                <span>Pro Agency</span>
                                                <p>Trade Safe with Pro Agency</p>
                                                <a class="read_more" href="#"><img
                                                        src="{{asset('assets/images/btn_h.png')}}" alt="#" />
                                                    Action</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="text_img">
                                                <figure><img src="{{asset('assets/images/forex1.png')}}" alt="#" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</header>
<!-- end banner -->
<!-- about section -->
<div class="about" id="about">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-12 col-lg-5">
                <div class="about_img">
                    <figure><img src="{{asset('assets/images/about.png')}}" alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="titlepage">
                    <h2> <span class="yellow">ABOUT US</span><br>Welcome TO Pro Agency</h2>
                    <p>
                        Welcome to Pro Agency! The safest place to trade and invest in the stock market. With our
                        headquarters in the vibrant city of Mreijeh and a branch in the
                        bustling city of Tripoli, we are a leading provider of forex trading services in Lebanon. <br>

                        Our services are many and all of them help you achieve financial freedom in the stock market and
                        get you an income plus profit from the forex market. <br>

                        We also have great customer support with our WhatsApp groups and our numbers. Whether you want
                        to visit us at our branches or on WhatsApp we always welcome you and answer all of your
                        questions. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section -->

<!-- services section -->
<div class="services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <span class="yellow">Services</span></h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="ho_color" class="services_main">
                    <i><img src="{{asset('assets/images/services_icon1.png')}}" alt="#" /></i>
                    <img class="ho" src="{{asset('assets/images/services_icon1h.png')}}" alt="#" />
                    <h3>Investments</h3>
                    <p>
                        Invest your money in the forex market with 0% risk. We will manage your account and deliver your
                        profit on a daily or a weekly basis with the possibility to get commission on your referals.
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="ho_color" class="services_main">
                    <i><img src="{{asset('assets/images/services_icon2.png')}}" alt="#" /></i>
                    <img class="ho" src="{{asset('assets/images/services_icon2h.png')}}" alt="#" />
                    <h3>Trading Signals</h3>
                    <p>
                        You will be able to enter our signal group on whatsapp and you will be able to do the same
                        trades that we do in order to get the same profit only for a small fee of 50$/month.
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="ho_color" class="services_main">
                    <i><img src="{{asset('assets/images/services_icon3.png')}}" alt="#" /></i>
                    <img class="ho" src="{{asset('assets/images/services_icon3h.png')}}" alt="#" />
                    <h3>1 Million Challenge</h3>
                    <p>Here you can invest your money for the long run. From 1 year to 2 years We will turn your 100$
                        into 1 million $ by "Copy
                        Trade", and you can see the results on the MetaTrader5 mobile app.
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="ho_color" class="services_main">
                    <i><img src="{{asset('assets/images/services_icon4.png')}}" alt="#" /></i>
                    <img class="ho" src="{{asset('assets/images/services_icon4h.png')}}" alt="#" />
                    <h3>Learn to Trade</h3>
                    <p>
                        Since the forex marketing is becoming a great opportunity to make money online, we can teach you
                        all about it with weekly calls with us and live demonstrations.
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end services section -->

<!-- wallet section -->
<div class="wallet">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <span class="yellow">Investing</span><br>
                        Get a very high profit on your invested money with 0% risk.
                    </h2>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="wallet_main">
                    <figure><img src="{{asset('assets/images/wallet.jpg')}}" alt="#" /></figure>
                    <a class="read_more" href="#">Start Investing</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wallet section -->

<!-- Subscribe section -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="subscribe_main">
                    <h3 class="text-yellow">Subscribe in our signals group</h3>
                    <p class="text-white my-3 font-size-md">Get access to our signals group on whatsapp and start
                        trading in
                        the
                        forex
                        marget and get very
                        high profit on your trades by copying our signals.</p>
                    <form class="news_form">
                        <input class="enter_form" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="subscribe_btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Subscribe section -->

<!-- testimonial -->
<div class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2> <span class="yellow">Testimonials</span><br>What our clients say about us</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="testimoni" class="carousel slide testimonial_Carousel " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#testimoni" data-slide-to="0" class="active"></li>
            <li data-target="#testimoni" data-slide-to="1"></li>
            <li data-target="#testimoni" data-slide-to="2"></li>
            <li data-target="#testimoni" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption ">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="test_box">
                                    <i><img src="{{asset('assets/images/test.png')}}"></i>
                                    <h3>Mr. Shaiban Hamad</h3>
                                    <p>
                                        اهلا
                                        كل الشكر والتقدم الخدمة رائعة وموفقة بأذن الله مع مزيد من التقدم والنجاح وزيادة
                                        الارباح
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="test_box">
                                    <i><img src="{{asset('assets/images/test.png')}}"></i>
                                    <h3>Mr. Ahmad Tarraf</h3>
                                    <p>
                                        نشكر لكم تعبكم ونسال الله الرزق لنا ولكم.
                                        الحمدلله معاملة جيدة
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="test_box">
                                    <i><img src="{{asset('assets/images/test.png')}}"></i>
                                    <h3>Mr. Mohammad Hamoudi</h3>
                                    <p>
                                        مرحبا الفترة يلي كنت مستثمر فيه كانت ممتازة وانا صار عندي ثقة كبيرة بشركتكن.
                                        وانا شخص بيفهم بالبوابة والاستثمار
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="test_box">
                                    <i><img src="{{asset('assets/images/test.png')}}"></i>
                                    <h3>Mr. Hassan Nasser</h3>
                                    <p>
                                        هلا كيفكن انا الي شهرين تقريبا مستثمر والحمدلله تمام عم استفاد وانشالله الى احسن
                                        معكن
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#testimoni" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#testimoni" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- end testimonial section -->
<!-- comments  section -->
<div class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <span class="yellow">Contact Us</span><br> Become VIP</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="contac_form" class="contac_form" action="/request/vip" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contac_control" placeholder="Name" type="text" name="name" required id="name"
                                value="{{old('name')}}">
                        </div>
                        <div class="col-md-12">
                            <input class="contac_control" placeholder="Phone Number" type="tel" name="phone" required
                                id="phone" value="{{old('phone')}}">
                        </div>
                        <div class="col-md-12">
                            <input class="contac_control" placeholder="Email Address" type="email" name="email" required
                                id="email" value="{{old('email')}}">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message" required name="message"
                                id="message">{{old('name')}}</textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact  section -->

@include('layouts._footer')
@endsection