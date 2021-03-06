<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'page_heading',
        'goal_content',
        'cover_image',
        'status',
    ];
}
