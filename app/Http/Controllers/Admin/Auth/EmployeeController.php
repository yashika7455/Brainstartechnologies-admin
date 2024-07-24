<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
       // return response()->json($request->all());
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
         
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Create a new User instance
            $user = new User();
            $user->employee_id = $request->employee_id;
            $user->phone_number = $request->phone_number;
            $user->department = $request->department;
            $user->designation = $request->designation;
            $user->firstname = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password); // Encrypt the password
            $user->save();

            // Return success response
            return response()->json(['success' => 'Data saved successfully!']);
            alert("Data saved successfully!");
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database query exceptions
            return response()->json(['error' => 'Database error: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            // Handle general exceptions
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }
    // email 

    public function checkEmail(Request $request)
    {
    $exists = User::where('email', $request->input('email'))->exists();
    return response()->json(['exists' => $exists]);
   }

// data from databse



}
