<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only(['index', 'new', 'create', 'destroy']);
    }

    public function profile()
    {
        return view('users.profile');
    }

    public function profile_update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();
        return redirect('/profile')->with('success', 'Profile Updated Successfully');
    }

    public function SavePassword(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if ($request->newpassword == $request->confirmpassword) {
            $user->password = Hash::make($request->newpassword);
            $user->save();
        }

        return redirect('/profile')->with('success', 'Password Updated Successfully');
    }

    public function index()
    {
        $search = request()->query('search');
        if ($search) {
            $users = User::where('name', 'LIKE', "%{$search}%")->paginate(25);
        } else {
            $users = User::paginate(25);
        }

        return view('users.index', compact('users'));
    }

    public function new()
    {
        return view('users.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $user = new User();

        $user->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make('password'),
            'service_type' => $request->service_type,
            'amount' => $request->amount,
            'untill' => $request->untill,
        ]);

        $log = new Log();
        $log->text = Auth()->user()->name . " created new user : " . $user->name . " in " . Carbon::now()->toDateTimeString();
        $log->save();

        return redirect('/app/users')->with('success', 'User Created Successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'service_type' => $request->service_type,
            'amount' => $request->amount,
            'untill' => $request->untill,
        ]);

        $log = new Log();
        $log->text = Auth()->user()->name . " updated user : " . $user->name . " in " . Carbon::now()->toDateTimeString();
        $log->save();

        return redirect('/app/users')->with('success', 'User Updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $log = new Log();
        $log->text = Auth()->user()->name . " deleted user : " . $user->name . " in " . Carbon::now()->toDateTimeString();
        $log->save();

        $user->delete();

        return redirect('/app/users')->with('danger', 'User Deleted Successfully');
    }

}