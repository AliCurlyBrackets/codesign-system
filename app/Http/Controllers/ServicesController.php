<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Http\Controllers\Controller;
use App\Repositry\Services\ServicesRepo;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    private $ServicesRepo ;

    public function __construct(ServicesRepo $ServRepo)
    {
        $this->ServicesRepo = $ServRepo ;
    }
    public function index()
    {
        return $this->ServicesRepo->index() ;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        //
    }
}
