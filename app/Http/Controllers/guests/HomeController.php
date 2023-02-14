<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a guests resource home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('guests.home');
    }
}
