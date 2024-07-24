<?php

namespace App\Http\Controllers\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectReportController extends Controller
{
      // Display the form and list of daily statuses
      public function index()
      {
          $dailyStatuses = Project::all();
          return view('employee.Projectreport', compact('dailyStatuses'));
      }
  
      // Handle the form submission
      public function store(Request $request)
      {     
          $request->validate([
              'project_name' => 'required|string|max:255',
              'status' => 'required|string|max:255',
              'progress' => 'required|integer|min:0|max:100',
              'date' => 'required|date',
              'ProjectreportDetails' => 'required|string',

          ]);
  
        Project::create([
              'project_name' => $request->input('project_name'),
              'status' => $request->input('status'),
              'progress' => $request->input('progress'),
              'date' => $request->input('date'),
              'ProjectreportDetails' => $request->input('ProjectreportDetails'),
          ]);
  
          return redirect()->route('project-report')->with('success', 'Daily status submitted successfully!');
      }
  }