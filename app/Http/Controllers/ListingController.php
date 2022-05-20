<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function index() {
        return view('listings.index');
    }

    public function create() {
        return "Create listing";
    }
}
