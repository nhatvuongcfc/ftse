<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Advisory;
use App\Model\User;
use App\Notifications\NewAdvisory;
use Notification;

class AdvisoryController extends Controller
{
    public function index(){
        return view('front-end.advisory');
    }
    public function store(Request $request){
        Advisory::create($request->all());
        // auth()->user()->notify(new NewAdvisory());
        Notification::send(User::all(), new NewAdvisory());

        // return response()->json(array('success' => true));  

        
    }
}
