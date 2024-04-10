<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CompanyAdvantages extends Model
{ 
    use HasFactory;
    use HasTranslations ; 

    protected $translatable = ["name" , "desc"] ; 

    protected $fillable = ["name" , "desc"  , "icon"] ; 
}
