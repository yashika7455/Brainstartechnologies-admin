<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveApplication; // Make sure this class exists

class EmployeeleaveController extends Controller
{

    public function create()
    {
        // Return view for applying leave
        return view('employee.applyleaves'); // Ensure this view exists
    }

    public function store(Request $request)
    {
   
       // return response()->json($request->all());
       // Handle database query exceptions
    

        // // Validate the request
        // $validatedData = $request->validate([
        //     'start_date' => 'required|date',
        //     'end_date' => 'required|date',
        //     'reason' => 'required|string',
        // ]);

        // Create a new leave application (assuming LeaveApplication model exists)
       $LeaveApplication = new  LeaveApplication();
       $LeaveApplication->employee_id=$request->data4;
       $LeaveApplication->leave_type="kjhgf";
       $LeaveApplication->start_date=$request->DATA1;
        $LeaveApplication->end_date=$request->data2;
       $LeaveApplication->reason=$request->data3;
       $LeaveApplication->save();

        return response()->json(['message' => 'Leave application submitted successfully!']);
    }
}


