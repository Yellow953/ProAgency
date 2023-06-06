@extends('admin.app')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text mb-3">
                                <h2>{{$user_count}}</h2>
                                <span>Users</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text mb-3">
                                <h2>{{$admin_count}}</h2>
                                <span>Admins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text mb-3">
                                <h2>{{$client_count}}</h2>
                                <span>Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                            <div class="text mb-3">
                                <h2>{{$capital}}</h2>
                                <span>Capital</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid my-5">
            <div class="card">
                <div class="row m-md-5">
                    <div class="col-4 my-auto">
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </div>
                    <div class="col-8 my-auto">
                        <h2 class="font-italic mb-4 text-warning">Pro Agency</h2>
                        <p>
                            Welcome to Pro Agency! The safest place to trade and invest in the stock market. With our
                            headquarters in the vibrant city of Mreijeh and a branch in the bustling city of Tripoli, we
                            are a leading provider of forex trading services in Lebanon.
                            Our services are many and all of them help you achieve financial freedom in the stock market
                            and get you an income plus profit from the forex market.
                            We also have great customer support with our WhatsApp groups and our numbers. Whether you
                            want to visit us at our branches or on WhatsApp we always welcome you and answer all of your
                            questions.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @include('admin._copyright')

    </div>
</div>
@endsection