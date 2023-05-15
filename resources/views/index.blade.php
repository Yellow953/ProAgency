@extends('layouts/app')

@section('content')
<!-- header -->
<header>
    <div class="header">
        <div class="white_bg">
            @include('layouts._header')

            <!-- banner -->
            <section class="banner_main">
                <div id="banner1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7">
                                            <div class="text-bg">
                                                <span>Pro Agency</span>
                                                <p>Trade Safe with Pro Agency</p>
                                                <a class="read_more" href="#"><img
                                                        src="{{asset('assets/images/btn_h.png')}}" alt="#" />
                                                    Action</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-5">
                                            <div class="text_img">
                                                <figure><img src="{{asset('assets/images/ban_img.png')}}" alt="#" />
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
<div class="about">
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit impedit consectetur sed iusto ea
                        accusantium, mollitia reprehenderit fugiat delectus natus quisquam assumenda hic provident
                        veritatis autem alias eaque recusandae quod?
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section -->

<!-- services section -->
<div class="services">
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
                        profit on a daily or a weekly schedule. And if you
                        want your money back you will get it within a week so we can close our long term trades.
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
                        trades that we do in order to get the same profit.
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="ho_color" class="services_main">
                    <i><img src="{{asset('assets/images/services_icon3.png')}}" alt="#" /></i>
                    <img class="ho" src="{{asset('assets/images/services_icon3h.png')}}" alt="#" />
                    <h3>1 Million Challenge</h3>
                    <p>We will turn your 100$ account into 1 million$ by linking all our accounts togetherby "Copy
                        Trade", and you will be able to see the result on the meta trader 5 mobile app.
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="ho_color" class="services_main">
                    <i><img src="{{asset('assets/images/services_icon4.png')}}" alt="#" /></i>
                    <img class="ho" src="{{asset('assets/images/services_icon4h.png')}}" alt="#" />
                    <h3>Commission</h3>
                    <p>
                        You will get a commission into your account when you refer us to your friends or family.
                    </p>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end services section -->

<!-- bitcoins section -->
<div class="bitcoins">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="titlepage">
                    <h2> <span class="yellow">Open an MT5 account with us</span><br>Why are so many people starting to
                        trade on the forex market </h2>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="bitcoins_main">
                    <figure><img src="{{asset('assets/images/bitcoins.jpg')}}" alt="#" /></figure>
                    <a class="read_more" href="#">Start now </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end bitcoins section -->

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
                    <h3>Subscribe in our signals group</h3>
                    <p>Get access to our signals group on whatsapp and start trading in the forex marget and get very
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
                    <h2> <span class="yellow">Testimonial</span><br>What is says our clients</h2>
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
                                    <h3>distracted by</h3>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. The point of using
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters,
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
                                    <h3>distracted by</h3>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. The point of using
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters,
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
                                    <h3>distracted by</h3>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. The point of using
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters,
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
                                    <h3>distracted by</h3>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. The point of using
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters,
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
<div class="contact ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <span class="yellow">Contact Us</span><br> Reqesute a call back</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="contac_form" class="contac_form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contac_control" placeholder=" Name" type="type" name="Name">
                        </div>
                        <div class="col-md-12">
                            <input class="contac_control" placeholder="Phone Number  " type="type"
                                name="Phone Number  ">
                        </div>
                        <div class="col-md-12">
                            <input class="contac_control" placeholder="Email Address" type="type" name="Email Address">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message" type="type"
                                Message="Name">Message </textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="map">
                    <figure><img src="{{asset('assets/images/map-(1).png')}}" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact  section -->

@include('layouts._footer')
@endsection