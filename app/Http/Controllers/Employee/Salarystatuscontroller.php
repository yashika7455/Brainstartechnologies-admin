<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Salarystatuscontroller extends Controller
{
    public function salarystatus()
    {
        return view('employee.Salarystatus');
    }
}
