<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;
    protected $table = 'art_tests';
    protected $fillable = [
        'test_name',
        'start_date',
        'end_date',
        'test_status',
        'file',
        'mesu_id',
    ];
}
