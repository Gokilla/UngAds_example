<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnimalResource;
use App\Models\Animals;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;

class AnimalsController extends Controller
{

    /**
     * @var Animals
     */
    protected $modelClass = Animals::class;

    /**
     * @var AnimalResource
     */
    protected $modelResourceClass = AnimalResource::class;

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     * 
     */
    public function index():AnonymousResourceCollection
    {
        $data = Animals::with('family')->get();
        return  AnimalResource::collection($data);
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
     * @param  \App\Models\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function show(Animals $animals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function edit(Animals $animals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animals $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animals $animals)
    {
        //
    }
}
