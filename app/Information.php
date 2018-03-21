<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = ['fb_id','tw_id','google_id','instagram_id','linked_id','address','title','phone'];
}
