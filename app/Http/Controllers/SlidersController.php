<?php

namespace App\Http\Controllers;

use App\Models\Sliders;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderValidation;
use App\Repositry\Sliders\SliderRepo;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private $SliderRepo ;

     public function __construct(SliderRepo $repo)
     {
        $this->SliderRepo  = $repo ;
     }
    public function index()
    {
      return $this->SliderRepo->index() ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderValidation $request)
    {
      return $this->SliderRepo->store($request) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sliders $sliders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return $this->SliderRepo->update($request) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $this->SliderRepo->destroy($request) ;
    }
}
