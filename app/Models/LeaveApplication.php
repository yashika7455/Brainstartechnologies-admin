<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LeaveApplication extends Model
{
    use HasFactory, Notifiable;
    protected $guard= 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
        protected $fillable = [
            'employee_id', // Add this field
            'start_date',
            'end_date',
            'reason',
        ];


   
}
