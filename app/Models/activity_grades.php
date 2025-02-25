<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_grades extends Model
{
    use HasFactory;

    protected $fillable = [
        'percentage',
        'grade_acquired',
        'activity_type',
        'grade_id',
        'activity_id'
    ];
}
