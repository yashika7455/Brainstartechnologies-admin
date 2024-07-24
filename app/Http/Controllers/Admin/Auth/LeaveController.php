<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function LeaveListing()
    {
        return view('admin.layouts.leaves');
    }
}
