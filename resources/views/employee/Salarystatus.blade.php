@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <div class="content transition">
        <h2 class="mb-4 text-center">Salary Status Dashboard</h2>
        
        <div class="container-fluid">
            <!-- Search Form -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #4154f1; color: white;">
                            <h5>Search Salary Status</h5>
                        </div>
                        <div class="card-body">
                            <form method="GET" class="search-form">
                                <div class="form-group mb-3">
                                    <label for="month">Select Month</label>
                                    <input type="month" id="month" name="month" class="form-control" required>
                                </div>
                                <button type="submit" class="btn" style="background-color: #4154f1; color: white;">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display Salary Status -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #4154f1; color: white;">
                            <h5>Salary Status for <span id="selected-month">Selected Month</span></h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered salary-table">
                                    <thead style="background-color: #4154f1; color: white;">
                                        <tr>
                                            <th>Month</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Paid Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-light">
                                            <td>January 2023</td>
                                            <td>Paid</td>
                                            <td>$3000</td>
                                            <td>2023-01-31</td>
                                        </tr>
                                        <tr class="table-light">
                                            <td>February 2023</td>
                                            <td>Paid</td>
                                            <td>$3000</td>
                                            <td>2023-02-28</td>
                                        </tr>
                                        <tr class="table-light">
                                            <td>March 2023</td>
                                            <td>Pending</td>
                                            <td>$3000</td>
                                            <td>-</td>
                                        </tr>
                                        <tr class="table-light">
                                            <td>April 2023</td>
                                            <td>Paid</td>
                                            <td>$3000</td>
                                            <td>2023-04-30</td>
                                        </tr>
                                        <tr class="table-light">
                                            <td>May 2023</td>
                                            <td>Pending</td>
                                            <td>$3000</td>
                                            <td>-</td>
                                        </tr>
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
    .search-form .form-group {
        margin-bottom: 15px;
    }
    .search-form label {
        font-weight: bold;
    }
    .search-form .form-control {
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ddd;
    }
    .search-form .btn {
        padding: 10px 20px;
    }
    .salary-table th, .salary-table td {
        padding: 10px;
        text-align: left;
    }
    .salary-table th {
        background-color: #4154f1; /* New specified color */
        color: #fff;
    }
    .salary-table td {
        background-color: #f8f9fa;
    }
</style>
@endsection
