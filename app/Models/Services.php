<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Services extends Model
{
    use HasFactory;
    use HasTranslations ; 

    protected $translatable = ["serv_tite" , "serv_desc"] ; 

    protected $fillable = ["filename" , "serv_title" , "serv_desc"] ; 
}