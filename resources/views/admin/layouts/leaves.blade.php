@extends('admin.layouts.app')
          <!-- Content wrapper -->
          @section('content')

          <div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Leaves</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Leaves</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leave"><i class="fa-solid fa-plus"></i> Add Leave</a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="stats-info w-100">
                    <h6>Today Presents</h6>
                    <h4>12 / 60</h4>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="stats-info w-100">
                    <h6>Planned Leaves</h6>
                    <h4>8 <span>Today</span></h4>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="stats-info w-100">
                    <h6>Unplanned Leaves</h6>
                    <h4>0 <span>Today</span></h4>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="stats-info w-100">
                    <h6>Pending Requests</h6>
                    <h4>12</h4>
                </div>
            </div>
        </div>


        <div class="row filter-row">
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="input-block mb-3 form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Employee Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="input-block mb-3 form-focus select-focus input-leave">
                    <select class="select floating">
                        <option> -- Select -- </option>
                        <option>Casual Leave</option>
                        <option>Medical Leave</option>
                        <option>Loss of Pay</option>
                    </select>
                    <label class="focus-label">Leave Type</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="input-block mb-3 form-focus select-focus input-leave">
                    <select class="select floating">
                        <option> -- Select -- </option>
                        <option> Pending </option>
                        <option> Approved </option>
                        <option> Rejected </option>
                    </select>
                    <label class="focus-label">Leave Status</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">    
                <div class="input-block mb-3 form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="date">
                    </div>
                    <label class="focus-label label-date">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="input-block mb-3 form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="date">
                    </div>
                    <label class="focus-label label-date">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <a href="#" class="btn btn-success w-100"> Search </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Leave Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>No of Days</th>
                                <th>Reason</th>
                                <th class="text-center">Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-02.jpg" alt="User Image"></a>
<a href="#">Richard Miles <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>8 Mar 2019</td>
                                <td>9 Mar 2019</td>
                                <td>2 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-purple"></i> New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" ><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-02.jpg" alt="User Image"></a>
                                        <a> John Doe <span>Web Designer</span></a>
                                        </h2>
                                </td>
                                <td>Medical Leave</td>
                                <td>27 Feb 2019</td>
                                <td>27 Feb 2019</td>
                                <td>1 day</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-10.jpg" alt="User Image"></a>
<a>John Smith <span>Android Developer</span></a>
</h2>
                                </td>
                                <td>LOP</td>
                                <td>24 Feb 2019</td>
                                <td>25 Feb 2019</td>
                                <td>2 days</td>
                                <td>Personnal</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-05.jpg" alt="User Image"></a>
<a>Mike Litorus <span>IOS Developer</span></a>
</h2>
                                </td>
                                <td>Paternity Leave</td>
                                <td>13 Feb 2019</td>
                                <td>17 Feb 2019</td>
                                <td>5 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-danger"></i> Declined
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-24.jpg" alt="User Image"></a>
<a>Richard Parker <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>30 Jan 2019</td>
                                <td>31 Jan 2019</td>
                                <td>2 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-purple"></i> New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-08.jpg" alt="User Image"></a>
<a>Catherine Manseau <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Maternity Leave</td>
                                <td>5 Jan 2019</td>
                                <td>15 Jan 2019</td>
                                <td>10 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-15.jpg" alt="User Image"></a>
<a>Buster Wigton <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Hospitalisation</td>
                                <td>15 Jan 2019</td>
                                <td>25 Jan 2019</td>
                                <td>10 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-20.jpg" alt="User Image"></a>
<a>Melita Faucher <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>13 Jan 2019</td>
                                <td>14 Jan 2019</td>
                                <td>2 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-danger"></i> Declined
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-03.jpg" alt="User Image"></a>
<a>Tarah Shropshire <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>10 Jan 2019</td>
                                <td>10 Jan 2019</td>
                                <td>1 day</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-purple"></i> New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-20.jpg" alt="User Image"></a>
<a>Domenic Houston <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>10 Jan 2019</td>
                                <td>11 Jan 2019</td>
                                <td>2 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-02.jpg" alt="User Image"></a>
<a>John Doe <span>Web Designer</span></a>
</h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>9 Jan 2019</td>
                                <td>10 Jan 2019</td>
                                <td>2 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
<a href="profile.html" class="avatar"><img src="..\assets\img\profiles\avatar-25.jpg" alt="User Image"></a>
<a>Rolland Webber <span>Web Developer</span></a>
</h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>7 Jan 2019</td>
                                <td>8 Jan 2019</td>
                                <td>2 days</td>
                                <td>Going to Hospital</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-circle-dot text-danger"></i> Declined
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="add_leave" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Leave</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Leave Type</option>
                                <option>Casual Leave 12 Days</option>
                                <option>Medical Leave</option>
                                <option>Loss of Pay</option>
                            </select>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">From <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">To <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Number of days <span class="text-danger">*</span></label>
                            <input class="form-control" readonly type="text">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
                            <input class="form-control" readonly value="12" type="text">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="edit_leave" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Leave</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Leave Type</option>
                                <option>Casual Leave 12 Days</option>
                            </select>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">From <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" value="01-01-2019" type="text">
                            </div>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">To <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" value="01-01-2019" type="text">
                            </div>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Number of days <span class="text-danger">*</span></label>
                            <input class="form-control" readonly type="text" value="2">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
                            <input class="form-control" readonly value="12" type="text">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control">Going to hospital</textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="approve_leave" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Leave Approve</h3>
                        <p>Are you sure want to approve for this leave?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Approve</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="modal custom-modal fade" id="delete_approve" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Leave</h3>
                        <p>Are you sure want to delete this leave?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop