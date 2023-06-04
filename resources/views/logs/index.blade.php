@extends('admin.app')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <form action="/app/logs" method="get">
                        <div class="input-group input-group-outline">
                            <label for="filter_start" class="mx-1 my-3">From:</label>
                            <input type="date" class="form-control mx-1" name="filter_start"
                                value="{{request()->query('filter_start')}}" placeholder="From...">
                            <label for="filter_end" class="mx-1 my-3">To:</label>
                            <input type="date" class="form-control mx-1" name="filter_end"
                                value="{{request()->query('filter_end')}}" placeholder="To...">
                            <input type="text" class="form-control mx-1" name="search"
                                value="{{request()->query('search')}}" placeholder="Type here...">
                            <button type="submit" class="btn btn-primary m-1 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-search mr-1" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- End Navbar -->
<div class="container-fluid py-4">
    <h2 class="mx-5 mb-5">Logs</h2>
    <div class="m-3 ">
        @forelse ($logs as $l)
        <div class="alert alert-primary text-dark">
            <span class="text-sm">{{$l->text}}</span>
        </div>
        @empty
        <div class="m-5 ">
            No Logs Found
        </div>
        @endforelse
        <div class="w-50">
            {{ $logs->appends(['search' => request()->query('search'), 'filter_start' =>
            request()->query('filter_start'), 'filter_end' => request()->query('filter_end')])->links() }}
        </div>
    </div>
</div>
@endsection