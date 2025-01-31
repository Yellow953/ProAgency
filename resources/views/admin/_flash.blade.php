@if ($message = Session::get('success'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show mx-5 mb-3">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($message = Session::get('danger'))
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show mx-5 mb-3">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show mx-5 mb-3">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($message = Session::get('info'))
<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show mx-5 mb-3">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show mx-5 mb-3">
    Please check the form below for errors...
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif