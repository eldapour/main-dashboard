<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    use HasFactory;

    protected $table = 'setting';

    protected $fillable = [
        'id',
        'terms_ar',
        'terms_en',
    ];
    public $timestamps = false;

}
