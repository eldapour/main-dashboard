<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'setting';

    protected $fillable = [
       'id',
        'about_ar',
        'about_en',
        ];
    public $timestamps = false;
}
