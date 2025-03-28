<?php

namespace Elegant\Admin\Http\Controllers\Auth;

use Illuminate\Support\Facades\Password;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * @inheritdoc
     */
    public function showLinkRequestForm()
    {
        return view('admin::auth.password-email');
    }

    /**
     * @inheritdoc
     */
    public function broker()
    {
        return Password::broker(config('admin.auth.password'));
    }
}
