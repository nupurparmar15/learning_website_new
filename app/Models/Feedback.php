<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Feedback extends Authenticatable
{
    protected $table = 'feedback';
    public $timestamps = false;
     protected $fillable = [
        'name', 
        'email',
        'contact',
        'message',
        'subject'];
}
