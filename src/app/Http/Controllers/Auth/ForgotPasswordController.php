<?php

namespace Digitlimit\Larastuffs\App\Http\Controllers\Auth;

use Digitlimit\Larastuffs\App\Http\Controllers\ApiController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends ApiController
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
