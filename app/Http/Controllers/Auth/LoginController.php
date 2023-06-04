<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {

        if (auth()->user()->role == 'admin') {
            return '/app';
        } elseif (auth()->user()->role == 'client') {
            return '/profile';
        }

    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}