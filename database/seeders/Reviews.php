<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Reviews extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Reviews = array(
            array(

                "customar_name" => '["en" => "Ali"  , "ar" => "علي"]',
                "filename" => "assets/images/users_photo_profile/user_avatar.png",
                "serv_id" => 1,
                "customar_review" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "created_at" => now() ,
                "updated_at" => now() , 
            ),

            array(

                "customar_name" => '["en" => "Mohmmed"  , "ar" => "محمد"]',
                "filename" => "assets/images/users_photo_profile/user_avatar.png",
                "serv_id" => 2,
                "customar_review" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "created_at" => now() ,
                "updated_at" => now() , 
            ),

            array(

                "customar_name" => '["en" => "Mona"  , "ar" => "منى"]',
                "filename" => "assets/images/users_photo_profile/user_avatar.png",
                "serv_id" => 3,
                "customar_review" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "created_at" => now() ,
                "updated_at" => now() , 
            ),

            array(

                "customar_name" => '["en" => "Ebrahim"  , "ar" => "ابراهيم"]',
                "filename" => "assets/images/users_photo_profile/user_avatar.png",
                "serv_id" => 4,
                "customar_review" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "created_at" => now() ,
                "updated_at" => now() , 
            ),

            array(

                "customar_name" => '["en" => "Sayed"  , "ar" => "سيد"]',
                "filename" => "assets/images/users_photo_profile/user_avatar.png",
                "serv_id" => 5,
                "customar_review" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "created_at" => now() ,
                "updated_at" => now() ,  
            ),
        );

        Review::insert($Reviews) ; 
    }
}
