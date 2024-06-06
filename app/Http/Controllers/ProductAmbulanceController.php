<?php

namespace App\Http\Controllers;

use App\Models\ProductAmbulance;
use Illuminate\Http\Request;

class ProductAmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("web.pages.products.index", [
            'title' => 'Products | Ambulance Pintar Indonesia'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAmbulance  $productAmbulance
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAmbulance $productAmbulance)
    {
//        return view("web.pages.products.show", [
//            'title' => 'Ambulance Suzuki | Ambulance Pintar Indonesia'
//        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAmbulance  $productAmbulance
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAmbulance $productAmbulance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductAmbulance  $productAmbulance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductAmbulance $productAmbulance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAmbulance  $productAmbulance
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAmbulance $productAmbulance)
    {
        //
    }
}
