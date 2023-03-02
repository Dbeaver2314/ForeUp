<?php

namespace App\Http\Controllers;

use App\Models\FavoriteItem;
use App\Http\Requests\StoreFavoriteItemRequest;
use App\Http\Requests\UpdateFavoriteItemRequest;

class FavoriteItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFavoriteItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FavoriteItem $favoriteItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FavoriteItem $favoriteItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoriteItemRequest $request, FavoriteItem $favoriteItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FavoriteItem $favoriteItem)
    {
        //
    }
}
