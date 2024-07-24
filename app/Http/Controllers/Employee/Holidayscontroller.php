<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Holidayscontroller extends Controller
{
    public function holidays()
    {
        return view('employee.Holidays');
    }
}
