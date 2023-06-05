@extends('admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Users</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <form action="/app/users" method="get" class="d-flex">
                        @csrf
                        <input type="text" name="search" class="form-control" placeholder="Type here to search ...">

                        <button class="d-flex align-center btn-primary btn" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search mr-2 my-auto" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>Search</button>
                    </form>
                </div>
                <div class="table-data__tool-right">
                    <a href="/app/user/new" class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add user</a>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>phone number</th>
                            <th>role</th>
                            <th>service</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr class="tr-shadow">
                            <td>
                                <div class="d-flex">
                                    <img src="{{asset('assets/images/default_profile.png')}}" alt=""
                                        class="profile-table">
                                    <span class="my-auto mx-2">{{$user->name}}</span>
                                </div>
                            </td>
                            <td>
                                <span class="block-email">{{$user->email}}</span>
                            </td>
                            <td class="desc">{{$user->phone}}</td>
                            <td>
                                <span class="status--process">{{$user->role}}</span>
                            </td>
                            <td>
                                {{$user->service_type}} <br>
                                {{$user->amount}} <br>
                                {{$user->untill}}
                            </td>
                            <td>
                                <div class="table-data-feature">
                                    <a class="item" href="/app/user/{{$user->id}}/edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>

                                    <form method="GET" action="/app/user/{{$user->id}}/destroy">
                                        @csrf
                                        <button type="submit" class="item show_confirm" data-toggle="tooltip"
                                            title='Delete'>
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        @empty
                        <tr class="tr-shadow">
                            <td colspan="5" class="text-center">No users Yet ...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
</div>
@endsection