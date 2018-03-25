<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;

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

        $formdata =  $request->all();

        echo "</pre>";  
        var_dump($formdata);
        Mail::send(['text'=>'mail'],['name','Sarthak'],function($messege){

                 $messege->to('mithilesh.tarkar@gmail.com','Hello Man')->subject('Test Email');
                 $messege->from('mythilmeshram@gmail.com','MV Tech');     

        });

    }
  
}
