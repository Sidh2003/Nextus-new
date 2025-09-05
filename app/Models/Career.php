<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Career extends BaseModel
{
    protected $fillable = ['full_name', 'email', 'mobile', 'function', 'location', 'portfolio_link', 'upload_resume', 'upload_portfolio', 'message'];
}
