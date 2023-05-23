<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProAgency | Login</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <style>
        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
            border: none;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Login</h2>
                <div class="card my-5" style="background-image: url({{asset('assets/images/service.jpg')}});">

                    <form method="POST" action="{{ route('login') }}" class="card-body cardbody-color p-lg-5">
                        @csrf

                        <div class="text-center">
                            <img src="{{asset('assets/images/logo.png')}}"
                                class="img-fluid profile-image-pic img-thumbnail bg-transparent my-3" width="200px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                value="{{ old('password') }}" required autocomplete="password" autofocus>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-warning px-5 mb-5 w-100">Login</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
</body>

</html>