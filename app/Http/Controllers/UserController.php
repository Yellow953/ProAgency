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
        $this->middleware('admin')->only(['index', 'new', 'create', 'destroy']);
    }

    public function Edit()
    {
        return view('users.edit');
    }

    public function Update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

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
        $user = User::find(auth()->user()->id);

        if ($request->newpassword == $request->confirmpassword) {
            $user->password = Hash::make($request->newpassword);
            $user->save();
        }

        return redirect('/profile/' . auth()->user()->id)->with('success', 'Password Updated Successfully');
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
            'password' => 'required|confirmed',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/profiles/', $filename);
            $user->image = '/uploads/profiles/' . $filename;
        }

        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('/app/users')->with('success', 'User Created Successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/app/users')->with('danger', 'User Deleted Successfully');
    }

}