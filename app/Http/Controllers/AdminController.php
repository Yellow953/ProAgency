<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $user_count = User::count();
        $admin_count = User::where('role', 'admin')->get()->count();
        $client_count = User::where('role', 'client')->get()->count();

        $users = User::all();
        $capital = 0;
        foreach ($users as $user) {
            if ($user->amount != 0 || $user->amount != null) {
                $capital += $user->amount;
            }
        }

        return view('admin.index', compact('user_count', 'admin_count', 'client_count', 'capital'));
    }

}