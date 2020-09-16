<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Model\Program;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['programs']=Program::status()->get();
        
        return view('frontend.index',$data);
    }
    
    public function about()
    {
        return view('frontend.about');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function event()
    {
        return view('frontend.event');
    }
    public function teacher()
    {
        return view('frontend.teacher');
    }
    public function teacherSingle()
    {
        return view('frontend.teacher-single');
    }
    public function sendMail(Request $request){
        $hername=$request->name;
        $data=array(
            // 'name'=>$request->name,
            'email'=>$request->email,
            'hername'=>'name',
        );
        // Mail::to($data)->send(new MailNotify($data));


        Mail::send('content_mail', $data, function ($message) use($data) {
            $message->from('nhatvuong0699@gmail.com', 'Nhất Vương');
            // $message->sender('john@johndoe.com', 'John Doe');
            $message->to($data['email'], 'Như Quỳnh');
            // $message->cc('john@johndoe.com', 'John Doe');
            // $message->bcc('john@johndoe.com', 'John Doe');
            // $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Anh nhớ em');
            // $message->priority(3);
            // $message->attach('pathToFile');
        });
        echo "ok";
    }
   
}
