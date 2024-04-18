<?php

namespace Database\Seeders;

use App\Models\Sliders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Sliders = array(
            array(
                "filename" => "Slide1.png" , 
                "title" =>"" , 
                "desc" => "" , 
                "created_at" => now() ,
                "updated_at" => now() , 
                ) ,
            array(
                "filename" => "Slide2.png" , 
                "title" =>"" , 
                "desc" => "" ,
                "created_at" => now() ,
                "updated_at" => now() , 
                ) ,
            array(
                "filename" => "Slide3.png" , 
                "title" =>"" , 
                "desc" => "" , 
                "created_at" => now() ,
                "updated_at" => now() ,  
                ) ,
        ) ; 

        Sliders::insert($Sliders) ; 
    }
}
