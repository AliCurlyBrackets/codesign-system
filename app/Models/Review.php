<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Review extends Model
{
    use HasFactory;
    use HasTranslations ; 

    protected $translatable = ["customar_name" , "customar_review"] ; 

    protected $fillable = ["customar_name"  , "filename" , "serv_id" , "customar_review"] ; 
}
