<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\guests\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index(){
        $comics = Comic::all();
        return view('guests.comics.index', compact('comics'));
    }

    public function show($id){
        $comic = Comic::findOrFail($id);
        return view('guests.comics.show', compact('comic'));
    }
}
