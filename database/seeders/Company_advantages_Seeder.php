<?php

namespace Database\Seeders;

use App\Models\CompanyAdvantages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Company_advantages_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Company_advantages = array(
            array(
                "name" => '["en" => "Technical support" , "ar" => "دعم فني"]' ,
                "desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "icon" => "assets/images/meza/support.png"  , 
                "created_at" => now() , 
                "updated_at" => now() , 
            ) , 

            array(
                "name" => '["en" => "Innovative solutions" , "ar" => "حلول مبتكره"]' ,
                "desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "icon" => "assets/images/meza/Helol.png"  , 
                "created_at" => now() , 
                "updated_at" => now() , 
            ) ,

            array(
                "name" => '["en" => "Speed of performance" , "ar" => "سرعه الاداء"]' ,
                "desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "icon" => "assets/images/meza/speed.png"  , 
                "created_at" => now() , 
                "updated_at" => now() , 
            ) ,

            array(
                "name" => '["en" => "Guaranteed SSL protection" , "ar" => " حمايه مضمونه SSL"]' ,
                "desc" => '["en" => "Add_Description.." , "ar" => "اضافه وصف.."]',
                "icon" => "assets/images/meza/ssl.png"  , 
                "created_at" => now() , 
                "updated_at" => now() , 
            ) ,
            
        ) ; 
        
        CompanyAdvantages::insert($Company_advantages) ; 
    }
}
