    @extends('layouts.app')
    @section('content')
    <main id="main" class="main">
    <section class="leave-form-section">
                <h1>Apply for Leave</h1>
                <form  method="POST" class="leave-form">
                @csrf
                    <div class="form-group">
                        <label for="employee-id">Employee ID</label>
                        <input type="text" id="employee-id" name="employee_id" placeholder="Enter your employee ID" required>
                    </div>
                    <div class="form-group">
                        <label for="leave-type">Leave Type</label>
                        <select id="leave-type" name="leave-type" required>
                            <option value="" disabled selected>Select leave type</option>
                            <option value="sick">Sick Leave</option>
                            <option value="vacation">Vacation Leave</option>
                            <option value="personal">Personal Leave</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="start-date">Start Date</label>
                        <input type="date" id="start_date" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="end-date">End Date</label>
                        <input type="date" id="end_date" name="end_date" required>
                    </div>
                    <div class="form-group">
                        <label for="reason">Reason for Leave</label>
                        <textarea id="reason" name="reason" rows="4" placeholder="Enter the reason for your leave" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                    <div class="save-message"></div>
                    <div class="error-message"></div>
                </form>
            </section>
    </main>
    @endsection