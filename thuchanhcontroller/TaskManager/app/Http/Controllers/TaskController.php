<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo __METHOD__ ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo __METHOD__ ;
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo __METHOD__ ;
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo __METHOD__ ;
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo __METHOD__ ;
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo __METHOD__ ;
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo __METHOD__ ;
        //
    }
}
