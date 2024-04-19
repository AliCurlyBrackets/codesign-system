<?php

namespace App\Repositry\Services ;

use App\Interface\Services\ServicesInterface;
use App\Models\Services;

class ServicesRepo implements ServicesInterface {
    public function index(){
        $Services = Services::all() ;
        return view("Dashboard.Pages.Services.index" , compact('Services')) ;
    }
}
