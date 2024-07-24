<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function attendenceListing()
    {
        return view('admin.layouts.attendence');
    }
}
