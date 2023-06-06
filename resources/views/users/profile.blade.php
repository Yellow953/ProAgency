<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- profile --}}
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap4.min.css')}}">

    <!-- jQuery library -->
    <script src="{{asset('assets/js/jquery.slim.min.js')}}"></script>

    <!-- Popper JS -->
    <script src="{{asset('assets/js/popper2.min.js')}}"></script>

    <!-- Latest compiled JavaScript -->
    <script src="{{asset('assets/js/bootstrap2.bundle.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <div class="main-body">

            <a href="/" class="btn btn-secondary mb-3">Back</a>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{asset('assets/images/default_profile.png')}}" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{auth()->user()->name}}</h4>
                                    <p class="text-success">{{auth()->user()->role}}</p>
                                    <p class="text-secondary font-size-sm">{{auth()->user()->email}}</p>
                                    <p class="text-muted font-size-sm">{{auth()->user()->phone}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (auth()->user()->service_type)
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <h3>Service</h3>
                                <div class="mt-3">
                                    <h4>{{ucwords(auth()->user()->service_type)}}</h4>
                                    <p class="text-secondary font-size-sm">{{auth()->user()->amount}}</p>
                                    <p class="text-muted font-size-sm">{{auth()->user()->untill}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-md-8">
                    @include('layouts._flash')
                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="/profile/update" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" id="name" required name="name" class="form-control"
                                            value="{{auth()->user()->name}}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" id="email" required name="email" class="form-control"
                                            value="{{auth()->user()->email}}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" id="phone" required name="phone" class="form-control"
                                            value="{{auth()->user()->phone}}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info" type="submit">Update</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="/profile/savepassword" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">New Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" id="new_password" required name="new_password"
                                            class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Confirm Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" id="confirm_password" required name="confirm_password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info" type="submit">Change Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>