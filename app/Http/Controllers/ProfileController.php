<?php

namespace App\Http\Controllers;

use App\Models\Project; // Add this line to import the Project model
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the project report dashboard.
     */
    public function edit(Request $request): View
    {
        // Fetch projects data. Replace this with your actual data fetching logic.
        $projects = Project::all(); 
        
        return view('employee.project-report', [
            'user' => $request->user(),
            'projects' => $projects,
        ]);
    }
}
