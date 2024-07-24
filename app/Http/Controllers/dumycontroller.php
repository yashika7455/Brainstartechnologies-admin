<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumyController extends Controller
{
    public function dumyListing()
    {
        return view('admin.layouts.dummy');
    }
}
