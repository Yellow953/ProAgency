@extends('admin.app')

@section('content')

<div class="container-fluid">
    <a href="/app/users" class="btn btn-secondary ml-5 mb-3">Back</a>
    <div class="card w-50 mx-auto p-5">
        <h2>Edit User</h2>
        <hr>
        <form action="/app/user/{{$user->id}}/update" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" name="name" id="name" required class="form-control rounded" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" required class="form-control rounded"
                    value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number*</label>
                <input type="text" name="phone" id="phone" required class="form-control rounded"
                    value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label for="role">Role*</label>
                <select name="role" id="role" required class="form-control">
                    <option value="client" {{$user->role == 'client' ? 'selected' : ''}}>Client</option>
                    <option value="admin" {{$user->role == 'admin' ? 'selected' : ''}}>Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="service_type">Service Type</label>
                <select name="service_type" id="service_type" class="form-control">
                    <option value="">Choose Option</option>
                    <option value="investment" {{$user->service_type == 'investment' ? 'selected' : ''}}>Investment
                    </option>
                    <option value="1 million challenge" {{$user->service_type == '1 million challenge' ? 'selected' :
                        ''}}>1 Million Challenge</option>
                    <option value="trading signals" {{$user->service_type == 'trading signals' ? 'selected' :
                        ''}}>Trading Signals</option>
                    <option value="learn forex" {{$user->service_type == 'learn forex' ? 'selected' : ''}}>Learn Forex
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control rounded" value="{{$user->amount}}">
            </div>
            <div class="form-group">
                <label for="untill">Untill</label>
                <input type="date" name="untill" id="untill" class="form-control rounded" value="{{$user->untill}}">
            </div>

            <div class="form-group mt-3 w-100 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection