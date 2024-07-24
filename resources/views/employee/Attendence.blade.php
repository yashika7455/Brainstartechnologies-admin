@extends('layouts.app')
@section('content')
<main id="main" class="main">
    <!-- Page Content -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title">Attendance</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Attendance</li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-4">
                    <div class="card punch-status">
                        <div class="card-body">
                            <h5 class="card-title">Timesheet <small class="text-muted">{{ date('d M Y') }}</small></h5>
                            <div class="punch-det">
                                <h6>Punch In at</h6>
                                <p id="punch-in-time">{{ $attendance->punch_in ?? 'Not yet punched in' }}</p>
                            </div>
                            <div class="punch-info">
                                <div class="punch-hours">
                                    <span id="total-hours">{{ $attendance->total_hours ?? '0' }} hrs</span>
                                </div>
                            </div>
                            <div class="punch-btn-section">
    @if($attendance)
        <form action="{{ route('attendance.punch-out') }}" method="POST" id="punch-out-form">
            @csrf
            <button type="submit" class="btn btn-primary punch-btn" id="punch-out-btn" {{ $attendance->break_out ? '' : 'disabled' }}>Punch Out</button>
        </form>
    @else
        <!-- If $attendance does not exist, show the Punch In form -->
        <form action="{{ route('attendance.punch-in') }}" method="POST" id="punch-in-form">
            @csrf
            <button type="submit" class="btn btn-primary punch-btn" id="punch-in-btn">Punch In</button>
        </form>
    @endif
</div>

<div class="break_btn">
    @if($attendance)
        @if(!$attendance->break_in && !$attendance->break_out)
            <!-- If both break_in and break_out are null, show Start Break link -->
            <h6><a href="{{ route('attendance.break-in') }}">Start Break</a></h6>
        @elseif($attendance->break_in && !$attendance->break_out)
            <!-- If on a break (break_in is not null and break_out is null), show End Break link -->
            <h6><a href="{{ route('attendance.break-out') }}">End Break</a></h6>
        @endif
    @endif
</div>


                            <div class="statistics">
                                <div class="row">
                                    <div class="col-md-6 col-6 text-center">
                                        <div class="stats-box">
                                            <p>Break</p>
                                            <h6>{{ $attendance->total_break_hours ?? 0 }} hrs</h6>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 text-center">
                                        <div class="stats-box">
                                            <p>Overtime</p>
                                            <h6>{{ $record->overtime_hours ?? 0 }} hrs</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card att-statistics">
                        <div class="card-body">
                            <h5 class="card-title">Statistics</h5>
                            <div class="stats-list">
                                <div class="stats-info">
                                    <p>Today <strong id="today-total-hours">{{ $attendance->total_hours ?? '0' }} <small>/ 8 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width:{{ ($attendance->total_hours ?? 0) / 8 * 100 }}%" aria-valuenow="{{ ($attendance->total_hours ?? 0) / 8 * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>This Week <strong>28 <small>/ 40 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>This Month <strong>90 <small>/ 160 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width:56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Remaining <strong>70 <small>/ 160 hrs</small></strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width:44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="stats-info">
                                    <p>Overtime <strong>{{ $record->overtime_hours ?? 0 }}</strong></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card recent-activity">
                        <div class="card-body">
                            <h5 class="card-title">Today Activity</h5>
                            <ul class="res-activity-list">
                                @foreach($todayActivities as $activity)
                                    <li>
                                        <p class="mb-0">{{ $activity->action }} at</p>
                                        <p class="res-activity-time">
                                            <i class="fa-regular fa-clock"></i>
                                            {{ $activity->time }}.
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row filter-row">
                <div class="col-sm-3">
                    <div class="input-block mb-3 form-focus">
                        <div class="cal-icon">
                            <input type="date" class="form-control floating datetimepicker">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-block mb-3 form-focus select-focus">
                        <select class="select floating select-float">
                            <option>-</option>
                            @foreach(range(1, 12) as $month)
                                <option>{{ date('M', mktime(0, 0, 0, $month, 1)) }}</option>
                            @endforeach
                        </select>
                        <label class="focus-label">Select Month</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-block mb-3 form-focus select-focus">
                        <select class="select floating select-float">
                            <option>-</option>
                            @foreach(range(date('Y'), date('Y') - 5) as $year)
                                <option>{{ $year }}</option>
                            @endforeach
                        </select>
                        <label class="focus-label">Select Year</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-grid">
                        <a href="#" class="btn btn-success"> Search </a>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Punch In</th>
                                    <th>Punch Out</th>
                                    <th>Production</th>
                                    <th>Break</th>
                                    <th>Overtime</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendanceRecords as $record)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $record->date }}</td>
                                        <td>{{ $record->punch_in }}</td>
                                        <td>{{ $record->punch_out }}</td>
                                        <td>{{ $record->total_hours }} hrs</td>
                                        <td>{{ $record->total_break_hours ?? 0 }} hrs</td>
                                        <td>{{ $record->overtime_hours ?? 0 }} hrs</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var punchInBtn = document.getElementById('punch-in-btn');
    var punchOutBtn = document.getElementById('punch-out-btn');
    var punchInTime = document.getElementById('punch-in-time');
    var totalHours = document.getElementById('total-hours');
    var realTimeTimer = document.getElementById('real-time-timer');

    if (punchInBtn) {
        punchInBtn.addEventListener('click', function(e) {
            e.preventDefault();
            // Set the punch-in time and start the timer
            var currentTime = new Date();
            punchInTime.textContent = currentTime.toLocaleTimeString();

            startTimer(currentTime);

            document.getElementById('punch-in-form').submit();
        });
    }

    if (punchOutBtn) {
        punchOutBtn.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('punch-out-form').submit();
        });
    }

    function startTimer(startTime) {
        function updateTimer() {
            var currentTime = new Date();
            var timeDiff = (currentTime - startTime) / 1000; // Time difference in seconds

            var hours = Math.floor(timeDiff / 3600);
            var minutes = Math.floor((timeDiff % 3600) / 60);
            var seconds = Math.floor(timeDiff % 60);

            realTimeTimer.textContent = `${hours} hrs ${minutes} mins ${seconds} secs`;
        }

        setInterval(updateTimer, 1000); // Update every second
    }

    // If already punched in, start the timer
    if (punchInTime.textContent !== 'Not yet punched in') {
        var startTime = new Date();
        var punchInTimeValue = punchInTime.textContent.split(':');
        startTime.setHours(punchInTimeValue[0]);
        startTime.setMinutes(punchInTimeValue[1]);
        startTime.setSeconds(punchInTimeValue[2]);

        startTimer(startTime);
    }
});
</script>
@endsection