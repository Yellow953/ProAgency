<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VIPRequest;

class VipRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['index', 'accept', 'reject']);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        VIPRequest::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your Request has been sent! We will contact you soon...');
    }

    public function index()
    {
        $requests = VIPRequest::all();
        return view('vip_requests.index', compact('requests'));
    }

    public function accept()
    {

    }

    public function reject()
    {

    }

}