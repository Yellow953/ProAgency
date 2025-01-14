{{-- header --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section my-auto">
            <div class="full">
                <div class="center-desk">
                    <div class="logo">
                        <a href="/" class="my-auto">>
                            <h1 class="text-yellow"><b>Pro Agency</b></h1>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                    aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        @guest
                        <li class="nav-item d_none le_co">
                            <a class="nav-link" href="/login">
                                Login</a>
                        </li>
                        @else
                        @if (auth()->user()->role == 'admin')
                        <li class="nav-item d_none le_co">
                            <a class="nav-link" href="/app">
                                App</a>
                        </li>
                        @endif
                        <li class="nav-item d_none le_co">
                            <a class="nav-link" href="/profile">
                                {{auth()->user()->name}}</a>
                        </li>
                        <li class="nav-item d_none le_co">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout</a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- end header  -->