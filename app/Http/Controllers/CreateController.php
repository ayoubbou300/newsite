<?php

namespace App\Http\Controllers;

use App\Models\Create;
use App\Http\Requests\StoreCreateRequest;
use App\Http\Requests\UpdateCreateRequest;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $create = Create::all();
        return view('Create', ['create'=>$create]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function show(Create $create)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function edit(Create $create)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreateRequest  $request
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreateRequest $request, Create $create)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function destroy(Create $create)
    {
        //
    }
}