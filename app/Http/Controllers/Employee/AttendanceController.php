<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
{
    $user = auth()->user();
    $today = Carbon::today('Asia/Kolkata')->toDateString();
    $attendance = Attendance::where('user_id', $user->id)->where('date', $today)->first();

    $todayActivities = [];
    $totalHours = 0;
    $totalBreakHours = 0;
    $overtimeHours = 0;

    if ($attendance) {
        if ($attendance->punch_in) {
            $punchIn = Carbon::parse($attendance->punch_in, 'Asia/Kolkata');
            $punchOut = $attendance->punch_out ? Carbon::parse($attendance->punch_out, 'Asia/Kolkata') : null;
            $endTime = $punchOut ?: Carbon::now('Asia/Kolkata');

            $totalMinutes = $punchIn->diffInMinutes($endTime);
            $totalHours = round($totalMinutes / 60, 2);

            // Calculate total break hours
            if ($attendance->break_in && $attendance->break_out) {
                $breakIn = Carbon::parse($attendance->break_in, 'Asia/Kolkata');
                $breakOut = Carbon::parse($attendance->break_out, 'Asia/Kolkata');
                $totalBreakMinutes = $breakIn->diffInMinutes($breakOut);
                $totalBreakHours = round($totalBreakMinutes / 60, 2);

                $attendance->total_break_hours = $totalBreakHours;
            }

            // Adjust total_hours by subtracting total_break_hours
            $totalHours -= $attendance->total_break_hours ?? 0;

            // Calculate overtime_hours if totalHours is greater than 8
            if ($totalHours > 8) {
                $overtimeHours = $totalHours - 8;
            }

            $attendance->total_hours = $totalHours;
            $attendance->overtime_hours = $overtimeHours;
            $attendance->save();
        }

        $todayActivities = [
            (object) ['action' => 'Punched in', 'time' => $attendance->punch_in],
            (object) ['action' => 'Punched out', 'time' => $attendance->punch_out],
            (object) ['action' => 'Break in', 'time' => $attendance->break_in],
            (object) ['action' => 'Break out', 'time' => $attendance->break_out],
        ];
    }

    $attendanceRecords = Attendance::where('user_id', $user->id)->orderBy('date', 'desc')->get();

    return view('employee.attendence', compact('attendance', 'todayActivities', 'attendanceRecords'));
}


    public function punchIn(Request $request)
    {
        $indiaTime = Carbon::now('Asia/Kolkata');

        $existingAttendance = Attendance::where('user_id', auth()->user()->id)
            ->where('date', $indiaTime->toDateString())
            ->first();

        if ($existingAttendance && !$existingAttendance->punch_out) {
            return redirect()->route('attendance.index')->with('error', 'Already punched in.');
        }

        Attendance::updateOrCreate(
            ['user_id' => auth()->user()->id, 'date' => $indiaTime->toDateString()],
            ['punch_in' => $indiaTime->toTimeString()]
        );

        return redirect()->route('attendance.index')->with('success', 'Punched in successfully!');
    }

    public function punchOut(Request $request)
    {
        $indiaTime = Carbon::now('Asia/Kolkata');
    
        $attendance = Attendance::where('user_id', auth()->user()->id)
            ->where('date', $indiaTime->toDateString())
            ->first();
    
        if ($attendance) {
            if ($attendance->punch_out) {
                return redirect()->route('attendance.index')->with('error', 'Already punched out.');
            }
    
            // Convert punch_in time into minutes
            $punchIn = Carbon::parse($attendance->punch_in, 'Asia/Kolkata');
            $punchInMinutes = $punchIn->hour * 60 + $punchIn->minute; 
    
            // Convert current time (punch_out) into minutes
            $punchOutMinutes = $indiaTime->hour * 60 + $indiaTime->minute;
    
            // Calculate total_hours by subtracting punch_in minutes from punch_out minutes
            $totalMinutes = $punchOutMinutes - $punchInMinutes;
            $totalHours = round($totalMinutes / 60, 2);
    
            // Subtract total_break_hours from totalHours (use 0 if total_break_hours is null)
            $totalBreakHours = $attendance->total_break_hours ?? 0;
            $totalHours -= $totalBreakHours;
    
            // Calculate overtime_hours if totalHours is greater than 8
            $overtimeHours = 0;
            if ($totalHours > 8) {
                $overtimeHours = $totalHours - 8;
            }
    
            // Store total_hours and overtime_hours into the database
            $attendance->punch_out = $indiaTime->toTimeString();
            $attendance->total_hours = $totalHours;
            $attendance->overtime_hours = $overtimeHours;
            $attendance->save();
    
            return redirect()->route('attendance.index')->with('success', 'Punched out successfully!');
        }
    
        return redirect()->route('attendance.index')->with('error', 'No punch-in record found for today.');
    }
    

    public function breakIn(Request $request)
    {
        $indiaTime = Carbon::now('Asia/Kolkata');

        $attendance = Attendance::where('user_id', auth()->user()->id)
            ->where('date', $indiaTime->toDateString())
            ->first();

        if ($attendance) {
            if ($attendance->break_in && !$attendance->break_out) {
                return redirect()->route('attendance.index')->with('error', 'Already on a break.');
            }

            $attendance->break_in = $indiaTime->toTimeString();
            $attendance->break_out = null; // Reset break_out when starting a new break
            $attendance->save();

            return redirect()->route('attendance.index')->with('success', 'Break started successfully!');
        }

        return redirect()->route('attendance.index')->with('error', 'No punch-in record found for today.');
    }

    public function breakOut(Request $request)
    {
        $indiaTime = Carbon::now('Asia/Kolkata');
    
        $attendance = Attendance::where('user_id', auth()->user()->id)
            ->where('date', $indiaTime->toDateString())
            ->first();
    
        if ($attendance) {
            if (!$attendance->break_in || $attendance->break_out) {
                return redirect()->route('attendance.index')->with('error', 'No ongoing break found.');
            }
    
            $breakIn = Carbon::parse($attendance->break_in, 'Asia/Kolkata');
            
            // Convert break_in time into minutes
            $breakInMinutes = $breakIn->hour * 60 + $breakIn->minute;
    
            // Convert current time into minutes
            $currentMinutes = $indiaTime->hour * 60 + $indiaTime->minute;
    
            // Calculate the difference in minutes
            $totalBreakMinutes = $currentMinutes - $breakInMinutes;
    
            // Convert the difference into hours
            $totalBreakHours = round($totalBreakMinutes / 60, 2);
    
            $attendance->break_out = $indiaTime->toTimeString();
    
            // Add the current break hours to the total break hours
            if ($attendance->total_break_hours) {
                $attendance->total_break_hours += $totalBreakHours;
            } else {
                $attendance->total_break_hours = $totalBreakHours;
            }
    
            $attendance->save();
    
            return redirect()->route('attendance.index')->with('success', 'Break ended successfully!');
        }
    
        return redirect()->route('attendance.index')->with('error', 'No punch-in record found for today.');
    }

}
    
?>
