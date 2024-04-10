<?php

namespace App\Repositry\Sliders ;

use App\Interface\Sliders\SliderInterface;
use App\Models\Sliders;

class SliderRepo implements SliderInterface{

    public function index()
    {
        $Sliders = Sliders::all() ; 
        return view("Dashboard.Pages.Sliders.index" , compact("Sliders")) ; 
    }
}