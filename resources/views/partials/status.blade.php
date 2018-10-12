@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('status:success'))
    <div class="alert alert-success">
        {{ session('status:success') }}
    </div>
@endif

@if (session('status:error'))
    <div class="alert alert-danger">
        {{ session('status:error') }}
    </div>
@endif
