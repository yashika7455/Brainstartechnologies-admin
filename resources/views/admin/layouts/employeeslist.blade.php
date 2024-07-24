@extends('admin.layouts.app')
          <!-- Content wrapper -->
          @section('content')
          <div class="page-wrapper">

            <div class="content container-fluid pb-0">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Employee</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Employee</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_employee"><i class="fa-solid fa-plus"></i> Add Employee</a>                           
                        </div>
                    </div>
                </div>


                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Employee ID</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Employee Name</label>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus select-focus">
                            <select class="select floating">
                                <option>Select Designation</option>
                                <option>Web Developer</option>
                                <option>Web Designer</option>
                                <option>Android Developer</option>
                                <option>Ios Developer</option>
                            </select>
                            <label class="focus-label">Designation</label>
                        </div>
                    </div> -->
                    <div class="col-sm-6 col-md-3">
                        <div class="d-grid">
                            <a href="#" class="btn btn-success w-100"> Search </a>
                        </div>
                    </div>
                </div>

                <div class="row staff-grid-row">
                @foreach ($user_data as $user)
                    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                        <div class="profile-widget">
                            <div class="profile-img">
                                <a href="{{ url('admin/employeeprofile') }}" class="avatar"><img src="..\assets\img\profiles\avatar-02.jpg" alt="User Image"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">{{ $user->firstname }}</a></h4>
                            <div class="small text-muted">{{ $user->designation}}</div>
                        </div>
                    </div> 
                    @endforeach
                </div>

            </div>


<!-- add employeee -->

<div id="add_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Employee</h5>
                <h5 class="modal-title save-message" style="background:#ff902f; border-radius:10px; color:white; border:2px solid #e1dddd; font-weight:500; margin-left:5rem;"></h5>
                <h5 class="modal-title error-message" style="background:#ff902f; border-radius:10px; color:white; border:2px solid #e1dddd; font-weight:500; margin-left:5rem;"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="userForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="first_name" name="first_name">
                                <span class="text-danger" id="first_name_error"></span>
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" id="email" name="email">
                                <span class="text-danger" id="email_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Password</label>
                                <input class="form-control" type="password" id="password" name="password">
                                <span class="text-danger" id="password_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Confirm Password</label>
                                <input class="form-control" type="password" id="confirm_password" name="confirm_password">
                                <span class="text-danger" id="confirm_password_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="employee_id" name="employee_id">
                                <span class="text-danger" id="employee_id_error"></span>
                            </div>
                        </div>
                       
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Phone</label>
                                <input class="form-control" type="number" id="phone_number" name="phone_number">
                                <span class="text-danger" id="phone_number_error"></span>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                <select class="select form-control" id="department" name="department">
                                    <option>Select Department</option>
                                    <option>Web Development</option>
                                    <option>IT Management</option>
                                    <option>Marketing</option>
                                </select>
                                <span class="text-danger" id="department_error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Designation <span class="text-danger">*</span></label>
                                <select class="select form-control" id="designation" name="designation">
                                    <option>Select Designation</option>
                                    <option>Web Designer</option>
                                    <option>Web Developer</option>
                                    <option>Android Developer</option>
                                </select>
                                <span class="text-danger" id="designation_error"></span>
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary cst-addEmp-submit-btn submit-btn" id="submitBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="edit_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Employee</h5>
                <h5 class="modal-title save-message" style="background:#ff902f; border-radius:10px; color:white; border:2px solid #e1dddd; font-weight:500; margin-left:5rem;"></h5>
                <h5 class="modal-title error-message" style="background:#ff902f; border-radius:10px; color:white; border:2px solid #e1dddd; font-weight:500; margin-left:5rem;"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="userForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="first_name" name="first_name">
                                <span class="text-danger" id="first_name_error"></span>
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" id="email" name="email">
                                <span class="text-danger" id="email_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Password</label>
                                <input class="form-control" type="password" id="password" name="password">
                                <span class="text-danger" id="password_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Confirm Password</label>
                                <input class="form-control" type="password" id="confirm_password" name="confirm_password">
                                <span class="text-danger" id="confirm_password_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="employee_id" name="employee_id">
                                <span class="text-danger" id="employee_id_error"></span>
                            </div>
                        </div>
                       
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Phone</label>
                                <input class="form-control" type="number" id="phone_number" name="phone_number">
                                <span class="text-danger" id="phone_number_error"></span>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                <select class="select form-control" id="department" name="department">
                                    <option>Select Department</option>
                                    <option>Web Development</option>
                                    <option>IT Management</option>
                                    <option>Marketing</option>
                                </select>
                                <span class="text-danger" id="department_error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Designation <span class="text-danger">*</span></label>
                                <select class="select form-control" id="designation" name="designation">
                                    <option>Select Designation</option>
                                    <option>Web Designer</option>
                                    <option>Web Developer</option>
                                    <option>Android Developer</option>
                                </select>
                                <span class="text-danger" id="designation_error"></span>
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary cst-addEmp-submit-btn submit-btn" id="submitBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    


    <div class="modal custom-modal fade" id="delete_employee" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Employee</h3>
                        <p>Are you sure want to delete?</p>
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

          