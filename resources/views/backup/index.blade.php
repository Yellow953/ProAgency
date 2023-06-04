@extends('admin.app')

@section('content')
<div class="container-fluid px-2 px-md-4">
    <h2 class="mx-5">Backup</h2>
    <div class="page-header mt-4"
        style="background-image: url({{asset('/admin/images/wallpaper.jpg')}}); min-height: 300px; border-radius: 25px">
    </div>
    <div class="card card-body mx-1 mx-md-4 mt-n6">
        <h5 class="text-secondary mt-2 text-decoration-underline">Users</h5>
        <small>ps: all the users password will reset to "password"</small>
        <div class="row my-2 ">
            <div class="col-md-6">
                <form action="/app/backup/import/users" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-row">
                        <input type="file" name="users" required class="form-control input-field border">
                        <button type="submit" class="btn btn-primary m-2">Import</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <a href="/app/backup/export/users" class="text-center btn btn-primary m-2">
                    Export
                </a>
            </div>
        </div>
        <hr>

        <h5 class="text-secondary mt-2 text-decoration-underline">Logs</h5>
        <div class="row my-2 ">
            <div class="col-md-6">
                <form action="/app/backup/import/logs" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-row">
                        <input type="file" name="logs" required class="form-control input-field border">
                        <button type="submit" class="btn btn-primary m-2">Import</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <a href="/app/backup/export/logs" class="text-center btn btn-primary m-2">
                    Export
                </a>
            </div>
        </div>

    </div>
</div>
</div>
@endsection