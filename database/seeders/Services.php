<?php

namespace Database\Seeders;

use App\Models\Services as ModelsServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Services extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Services = array(
            array(
                "filename" => "assets/images/serv_icon/programming.png" , 
                "serv_title" => '["en" => "programming" , "ar" => "البرمجه" ]' , 
                "serv_desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]' ,
                "created_at" => now() , 
                "updated_at" => now() ,  
            )  ,  

            array(
                "filename" => "assets/images/serv_icon/Ads.png" , 
                "serv_title" => '["en" => "Ads" , "ar" => "حملات اعلانيه"]' ,
                "serv_desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]' ,
                "created_at" => now() , 
                "updated_at" => now() , 
            )  , 

            array(
                "filename" => "assets/images/serv_icon/seo.png" , 
                "serv_title" => '["en" => "SEO" , "ar" => "سيو"]' ,
                "serv_desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]' ,
                "created_at" => now() , 
                "updated_at" => now() , 
            )  , 

            array(
                "filename" => "assets/images/serv_icon/graphic.png" , 
                "serv_title" =>' ["en" => "Graphic Design" , "ar" => "تصميمات"]' ,
                "serv_desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]' ,
                "created_at" => now() , 
                "updated_at" => now() , 
            )  , 

            array(
                "filename" => "assets/images/serv_icon/content.png" , 
                "serv_title" =>' ["en" => "Content" , "ar" => "كتابه محتوي"]' ,
                "serv_desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]' ,
                "created_at" => now() , 
                "updated_at" => now() , 
            )  , 
        ) ; 

        ModelsServices::insert($Services) ; 
    }
}
