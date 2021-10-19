<?php

namespace App\Http\Controllers;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
class Index_controller extends Controller
{
    public function show()
    {
        return view('index');
    }    
    public function show_contact()
    {
        return view('contact');
    } 
    public function show_faq()
    {
        return view('faq');
    } 
    public function show_privacy()
    {
        return view('privacy');
    }
    public function show_term()
    {
        return view('terms');
    }
    public function show_refund()
    {
        return view('refund');
    }
    public function show_gallery()
    {
        return view('gallery');
    }
    public function show_internship()
    {
        return view('internship');
    }
    public function internship_enquiry(Request $req)
    {
        
        $validator = Validator::make($req->all(), [
        'name' => 'required',
        'course' => 'required',
        'email' => 'required|email',
        'mobile_no' => 'required',
        
    ]); 
         if ($validator->fails()) {
          Session::flash('error',$validator->messages()->first());
          return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

        $enquiry_data = new Enquiry;
        $enquiry_data->student_name = $req->name;
        $enquiry_data->student_course = $req->course;
        $enquiry_data->student_email  = $req->email;
        $enquiry_data->student_mobile = $req->mobile_no;
        $enquiry_data->added_ip = $req->getClientIp();
        $enquiry_data->added_on =NULL;
        $enquiry_data->student_alternate_phone_no = $req->mobile_no;
        $enquiry_data->student_interested_area = $req->interested_area;
        $enquiry_data->student_remark = 0;
        $enquiry_data->student_status = "NEW";
        $enquiry_data->	student_next_follow_up_date = date('Y-m-d H:i:s');
        $enquiry_data->created_at = date('Y-m-d H:i:s');
        $enquiry_data->updated_at = date('Y-m-d H:i:s');

         $enquiry_data->save();
         return redirect()->back()->with('success','Enquiry successfully submitted ');
        }
    }
}
?>