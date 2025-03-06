<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    // fillables uses protcted property to define the columns that can be filled
    // $fillable is an array that contains the names of the columns that can be filled using mass assignment
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];
}
