<form method="POST" action="{{ route('admin.login') }}">
    @csrf

    <div class="mb-3">
        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="{{ trans('admin::messages.email') }}" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="{{ trans('admin::messages.password') }}" required>
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-8">
            <div class="form-check">
                <input type="checkbox" id="remember" class="form-check-input" name="remember" @checked(old('remember'))>
                <label class="form-check-label" for="remember">{{ trans('admin::messages.rememeber_me') }}</label>
            </div>
        </div>
        <div class="col-4">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">{{ trans('admin::messages.login') }}</button>
            </div>
        </div>
    </div>
</form>
