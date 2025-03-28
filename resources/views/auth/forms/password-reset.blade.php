<form method="POST" action="{{ route('admin.password.request') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="{{ trans('admin::messages.email') }}" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                {{ $errors->first('email') }}
            </span>
        @endif
    </div>

    <div class="mb-3">
        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="{{ trans('admin::messages.passowrd') }}" required>
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password" placeholder="{{ trans('admin::messages.password_confirmation') }}" required>
        @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback">
                {{ $errors->first('password_confirmation') }}
            </div>
        @endif
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            {{ trans('admin::messages.reset_password') }}
        </button>
    </div>
</form>
