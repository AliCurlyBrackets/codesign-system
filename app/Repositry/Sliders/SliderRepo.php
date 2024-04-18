<?php

namespace App\Repositry\Sliders ;

use App\Interface\Sliders\SliderInterface;
use App\Models\Sliders;
use App\Traites\UploadImage;

class SliderRepo implements SliderInterface{

    use UploadImage ; 

    public function index()
    {
        $Sliders = Sliders::all() ; 
        return view("Dashboard.Pages.Sliders.index" , compact("Sliders")) ; 
    }

    public function store($request)
    { 

        try{
            if($request->hasfile("filename")){
             $Photo_name =   $this->SaveImage($request->filename , "Upload/Slider") ; 

             Sliders::create([
                "filename" => $Photo_name ,
                "title" => ["ar" => $request->title_slider_arabic , "en" => $request->title_slider_english] , 
                "desc" => ["ar"=>$request->desc_slider_arabic , "en" => $request->desc_slider_english] , 
             ]) ; 

             toastr()->success(__("message.Success_Add")) ;
            return redirect()->route("Sliders.index") ; 
            }  

            toastr()->error("message.Error_Add") ;
            return redirect()->route("Sliders.index") ;  

        }
        catch(\Exception $e){
            toastr()->error("") ; 
            return redirect()->back($e->getMessage()) ; 
        }

    }

    public function destroy($request)
    {
        Sliders::findOrFail($request->id)->delete() ; 
        toastr()->success(__("message.Success_Delete")) ; 
    }
}