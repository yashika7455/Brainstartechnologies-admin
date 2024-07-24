<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance'; // Specify the table name

    protected $fillable = [
        'user_id', 'date', 'punch_in', 'punch_out', 'total_hours' ,'break_in', 'break_out','total_break_hours'
    ];
}
