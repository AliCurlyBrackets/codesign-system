<?php

namespace App\Traites ; 

trait UploadImage{
    function SaveImage($Photo , $Folder){
            $photo = $Photo->getClientOriginalExtension() ; 
            $Photo_name = time() . "." . $photo ; 
            $path = $Folder; 
            $Photo->move($path , $Photo_name) ; 

            return $Photo_name ; 
    }
}