<?php

namespace App\Http\Controllers;

use App\Models\Paldo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("paldo.index");
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
    public function show(Paldo $paldo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paldo $paldo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paldo $paldo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paldo $paldo)
    {
        //
    }
}
