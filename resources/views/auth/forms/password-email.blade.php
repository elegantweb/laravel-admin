<form method="POST" action="{{ route('admin.password.email') }}">
    @csrf

    <div class="mb-3">
        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="{{ trans('admin::messages.email') }}" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-8 col-offset-4">
            <button type="submit" class="btn btn-primary">
                {{ trans('admin::messages.send_rest_password_link') }}
            </button>
        </div>
    </div>
</form>
