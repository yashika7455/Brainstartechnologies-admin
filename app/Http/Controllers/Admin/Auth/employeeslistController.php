<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class employeeslistController extends Controller
{
    
    public function employeeListing()
    {
      $user_data= User::all();
    //   dd($user_data);
        return view('admin.layouts.employeeslist',compact('user_data'));
    }
}
