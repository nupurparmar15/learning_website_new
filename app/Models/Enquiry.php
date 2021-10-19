<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Enquiry extends Authenticatable
{
    protected $table = 'ol_enquiry';
    public $timestamps = false;
     protected $fillable = [
        'student_name', 
        'student_email',
        'student_contact',
        'student_course',
        'added_ip',
        'added_on', 
        'student_alternate_phone_no',
        'student_interested_area',
        'student_remark',
        'student_status',
        'student_next_follow_up_date', 
        'created_at',
        'updated_at'
    ];
}
