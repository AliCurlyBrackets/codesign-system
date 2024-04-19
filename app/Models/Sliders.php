<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Sliders extends Model
{
    use HasFactory;
    use HasTranslations ;

    protected $translatable = ["title" , "desc"] ;

    protected $fillable = ["filename" , "title" , "desc" , "status"] ;
}
