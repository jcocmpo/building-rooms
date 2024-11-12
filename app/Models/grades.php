<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'final_grade',
        'final_point',
        'term',
        'year',
        'employee_id'
    ];
}
