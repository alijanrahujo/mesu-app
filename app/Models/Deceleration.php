<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deceleration extends Model
{
    use HasFactory;
    protected $fillable = [
        'therapist_name',
        'therapist_code',
        'question_one',
        'question_two',
        'start_date',
        'end_date',
        'status'
    ];
}
