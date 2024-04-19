<?php

namespace App\Interface\Sliders ;

interface SliderInterface {
    public function index() ;
    public function store($request) ;
    public function destroy($request) ;
    public function update($request) ;
}
