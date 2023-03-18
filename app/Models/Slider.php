<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $guarded = [];



    ##  Mutators and Accessors
    public function getImageAttribute()
    {
        return getFile($this->attributes['image']);
    }


}
