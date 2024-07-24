<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpProfileController extends Controller
{
    public function empprofileListing()
    {
        return view('admin.layouts.employeeprofile');
    }
}
