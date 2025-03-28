<?php

namespace Elegant\Admin\Http\Controllers\Auth;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @return string
     */
    public function redirectTo()
    {
        return route('admin.dashboard');
    }

    /**
     * @inheritdoc
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('admin::auth.password-reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    /**
     * @inheritdoc
     */
    protected function rules()
    {
        $rules = Arr::only(config('admin.users.rules', []), ['password']);
        $rules += parent::rules();
        return $rules;
    }

    /**
     * @inheritdoc
     */
    public function broker()
    {
        return Password::broker(config('admin.auth.password'));
    }

    /**
     * @inheritdoc
     */
    protected function guard()
    {
        return Auth::guard(config('admin.auth.guard'));
    }
}
