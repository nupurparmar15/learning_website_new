<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Feedback;
use Validator;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
// use Illuminate\Contracts\Encryption\Encrypter;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contactfeedback(Request $req)
    {

        $validator = Validator::make($req->all(), [
        'name' => 'required',
        'subject' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required',
        'contact' => 'required',    
        
    ]); 
         if ($validator->fails()) {
          Session::flash('error',$validator->messages()->first());
          return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

        $feedback_data = new Feedback;
        $feedback_data->name = $req->name;
        $feedback_data->subject = $req->subject;
        $feedback_data->email  = $req->email;
        $feedback_data->contact = $req->contact;
        $feedback_data->message = $req->message;

         $feedback_data->save();
         return redirect()->back()->with('success','Feedback successfully submitted ');
        }
    }

 

}
