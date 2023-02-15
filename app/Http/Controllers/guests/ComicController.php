<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('guests.comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('guests.comics.show', compact('comic'));
    }
}