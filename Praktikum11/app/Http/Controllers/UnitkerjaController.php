<?php

namespace App\Http\Controllers;

use App\Models\Unitkerja;
use Illuminate\Http\Request;

class UnitkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_unitkerja = Unitkerja::all();
        return view('unitkerja.index', compact('list_unitkerja'));
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
    public function show(Unitkerja $unitkerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unitkerja $unitkerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unitkerja $unitkerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unitkerja $unitkerja)
    {
        //
    }
}
