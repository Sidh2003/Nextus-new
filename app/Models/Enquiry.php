<?php

namespace App\Models;

use App\Models\BaseModel;

class Enquiry extends BaseModel
{
    protected $fillable = ['full_name','email','subject','message','remark'];

}
