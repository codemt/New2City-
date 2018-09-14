<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function index(){


            return view('home');


    }
    public function getform(){


            return view('guideform');


    }
    public function fetchdata(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'email' => 'required',
            'mobile' => 'required',
        ]);

       // $formdata =  $request->all();
       $name = $request->input('name');
       $email = $request->input('email');
       $message = $request->input('message');
      // $stringmessage = (string)$message;
       $mobile = $request->input('mobile');
       $reason = $request->input('reason');


           // $info = array($name,$email,$message,$mobile,$reason);
           $data = [

            'title'=>'New Inquiry Received',
            'name'=>$name,
            'email'=>$email,
            'message'=>$message,
            'mobile'=>$mobile,
            'reason'=>$reason

     ];
        echo "</pre>";  
        //var_dump($data);

        Mail::send('email.test',$data,function($message){


            $message->to('mithilesh.tarkar@gmail.com','Mithilesh')->subject('Hello From Team');

         });
        //   Mail::raw('Hi, We have received your inquiry and we will get back to you soon.',$email,$name, function ($message){

        //     $message->to($email,$name)->subject('Thank you for the Inquiry, We will Contact you Soon');
        // });

         return view('home');
       


    }
  
}
