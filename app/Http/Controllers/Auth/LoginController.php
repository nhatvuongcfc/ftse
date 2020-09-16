<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getLogin(){
        return view('frontend.login');
    }
    public function postLogin(Request $request){
        $validate=$request->validate([
            'email'=>'bail|required|email|',
            'password'=>'bail|required',
        ]);
        // $validated = $request->validated();
        $login=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::attempt($login)) {
            $role = Auth::user()->roles()->first();
            if($role->name=='Student'){
                return redirect('/student'); 
            }
            else{
                return redirect('/admin');
            }
            // return redirect('admincp');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    // public function redirectPath(){
    //     $role = Auth::user()->roles()->first();
    //     if($role->name=='Student'){
    //     // dd($role->name);   
    //     return redirect('/'); 
    //         // return view('front-end.index');
    //     }
    //     else{
    //         return redirect('/admin');
    //     }
    // }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}
