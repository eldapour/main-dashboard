<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    use HasFactory;

    protected $table = 'setting';

    protected $fillable = [
        'id',
        'privacy_ar',
        'privacy_en',
    ];
    public $timestamps = false;

}
