<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\VIPRequest;
use Illuminate\Support\Facades\Hash;

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
            'service_type' => 'required',
            'amount' => 'required|numeric',
        ]);

        VIPRequest::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'service_type' => $request->service_type,
            'amount' => $request->amount,
            'message' => $request->message,
        ]);

        $log = new Log();
        $log->text = $request->name . " sent a request in " . Carbon::now()->toDateTimeString();
        $log->save();

        return redirect()->back()->with('success', 'Your Request has been sent! We will contact you soon...');
    }

    public function index()
    {
        $requests = VIPRequest::paginate(25);
        return view('vip_requests.index', compact('requests'));
    }

    public function accept($id)
    {
        $vip_request = VIPRequest::find($id);

        $user = new User();

        $user->create([
            'name' => $vip_request->name,
            'phone' => $vip_request->phone,
            'email' => $vip_request->email,
            'role' => 'client',
            'password' => Hash::make('password'),
            'service_type' => $vip_request->service_type,
            'amount' => $vip_request->amount,
            'untill' => ($vip_request->service_type == 'trading signal' ? Carbon::now()->addMonth() : null),
        ]);

        $log = new Log();
        $log->text = Auth()->user()->name . " accepted request from user : " . $vip_request->name . " in " . Carbon::now()->toDateTimeString();
        $log->save();

        $vip_request->delete();
        return redirect()->back()->with('success', 'Request Accepted, User Created Successfully');
    }

    public function decline($id)
    {
        $vip_request = VIPRequest::find($id);

        $log = new Log();
        $log->text = Auth()->user()->name . " declined request from user : " . $vip_request->name . " in " . Carbon::now()->toDateTimeString();
        $log->save();

        $vip_request->delete();
        return redirect()->back()->with('danger', 'Request Rejected');
    }

}