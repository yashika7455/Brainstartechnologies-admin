@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <div class="content transition">
        <h2 class="mb-4 text-center">Daily Status Dashboard</h2>
        
        <div class="container-fluid">
            
            <!-- Daily Status Form Section -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #6f42c1; color: white;">
                            <h5>Submit Daily Status</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('daily_status.store') }}" class="daily-status-form" >
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="project-name">Project Name</label>
                                    <input type="text" id="project-name" name="project_name" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="" disabled selected>Select status</option>
                                        <option value="completed">Completed</option>
                                        <option value="in-progress">In Progress</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="progress">Progress (%)</label>
                                    <input type="number" id="progress" name="progress" class="form-control" required min="0" max="100">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="date">Date</label>
                                    <input type="date" id="date" name="date" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ProjectreportDetails">Project Report Detail</label>
                                    <input type="text" id="ProjectreportDetails" name="ProjectreportDetails" class="form-control" required>
                                </div>
                                <button type="submit" class="btn mt-3" style="background-color: #6f42c1; color: white;">Submit</button>
                            </form>
                            <!-- Display Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Status Charts Section -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #17a2b8; color: white;">
                            <h5>Project Overview</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="projectOverviewChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #28a745; color: white;">
                            <h5>Project Progress</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="projectProgressChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Daily Status Section -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #fd7e14; color: white;">
                            <h5>Detailed Daily Status</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered status-table">
                                    <thead style="background-color: #fd7e14; color: white;">
                                        <tr>
                                            <th>Index</th>
                                            <th>Project Name</th>
                                            <th>Status</th>
                                            <th>Progress</th>
                                            <th>Date</th>
                                            <th>Project Report Detail</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        @foreach($dailyStatuses as $data)
                                        <tr class="table-light">
                                            <td>{{ $data->id}}</td>
                                            <td>{{ $data->project_name}}</td>
                                            <td>{{ $data->status}}</td>
                                            <td>{{ $data->progress}}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>{{ $data->ProjectreportDetails }}</td>
                                           
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('styles')
<style>
    .content {
        padding: 20px;
    }
    .card {
        margin-bottom: 20px;
        border: none;
        border-radius: 10px;
    }
    .card-header {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .card-body {
        padding: 20px;
    }
    .card h5 {
        margin-bottom: 20px;
    }
    .daily-status-form .form-group {
        margin-bottom: 15px;
    }
    .daily-status-form label {
        font-weight: bold;
    }
    .daily-status-form .form-control {
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ddd;
    }
    .daily-status-form .btn {
        padding: 10px 20px;
    }
    .status-table th, .status-table td {
        padding: 10px;
        text-align: left;
    }
    .status-table th {
        background-color: #fd7e14; /* New specified color */
        color: #fff;
    }
    .status-table td {
        background-color: #f8f9fa;
    }
    .chart-container {
        position: relative;
        height: 300px;
    }
</style>
@endsection

@section('scripts')

@endsection
