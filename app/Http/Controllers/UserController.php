<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function Update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/profiles/', $filename);
            $user->image = '/uploads/profiles/' . $filename;
        }

        $user->save();
        return redirect('/profile/' . auth()->user()->id)->with('success', 'Profile Updated Successfully');
    }

    public function SavePassword(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->newpassword == $request->confirmpassword) {
            $user->password = Hash::make($request->newpassword);
            $user->save();
        }

        return redirect('/profile/' . auth()->user()->id)->with('success', 'Password Updated Successfully');
    }

}