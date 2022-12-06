<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;
    protected $table = 'art_tests';
    protected $fillable = [
        'test_status',
        'filename',
        'mesu_id',
    ];
}
