<?php

namespace App\Http\Controllers;

use App\Monitor;
use App\Pingrecord;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SampleController extends Controller
{

    function getusermonitor(Request $request)
    {
        $email = $request->email;
        $monitor = Monitor::where('alertemail', $email)->get();
        return response()->json(['monitor'=> $monitor  ] , 200);
    }

}
