<?php

namespace Elegant\Admin\Controllers\Auth;

use Auth;
use Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Validation\ValidatesRequests;

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

    use ResetsPasswords, ValidatesRequests;

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
        return view('admin::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    /**
     * @inheritdoc
     */
    protected function rules()
    {
        $rules = array_only(config('admin.users.rules', []), ['password']);
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
