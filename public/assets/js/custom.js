$(document).ready(function() {
    $('#email').on('blur', function() {
        let email = $(this).val();

        // Validate email format
        if (email === "") {
            $('#email_error').text('Email is required!');
        } else if (!/^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(email)) {
            $('#email_error').text('Email must be a valid @gmail.com address and contain only letters, numbers, dots, and underscores before @gmail.com.');
        } else {
            $('#email_error').text(''); // Clear error message

            // Check email uniqueness
            $.ajax({
                url: '/admin/check-email', // Define the route for checking email uniqueness
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { email: email },
                success: function(response) {
                    if (response.exists) {
                        $('#email_error').text('The email address is already taken. Please use a different email.');
                    } else {
                        $('#email_error').text('');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('AJAX Error: ' + xhr.responseText);
                    $('#email_error').text('An error occurred while checking the email.');
                }
            });
        }
    });



    $('#submitBtn').on('click', function(e) {
        e.preventDefault();

        // Collect form data
        let data = {
            name: $('#first_name').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            confirm_password: $('#confirm_password').val(),
            employee_id: $('#employee_id').val(),
            phone_number: $('#phone_number').val(),
            department: $('#department').val(),
            designation: $('#designation').val(),
        };

        // Validate fields
        let isValid = true;

        // Check field validations
        if (data.name === "") {
            $('#first_name_error').text('First name is required!');
            isValid = false;
        } else {
            $('#first_name_error').text('');
        }

        if (data.email === "" || $('#email_error').text() !== '') {
            isValid = false;
        } else if (!/^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(data.email)) {
            $('#email_error').text('Email must be a valid @gmail.com address and contain only letters, numbers, dots, and underscores before @gmail.com.');
            isValid = false;
        } else {
            $('#email_error').text('');
        }

        if (data.password === "") {
            $('#password_error').text('Password is required!');
            isValid = false;
        } else if (data.password.length !== 10) {
            $('#password_error').text('Password must be exactly 10 characters!');
            isValid = false;
        } else {
            $('#password_error').text('');
        }

        if (data.confirm_password === "") {
            $('#confirm_password_error').text('Confirm password is required!');
            isValid = false;
        } else {
            $('#confirm_password_error').text('');
        }

        if (data.employee_id === "") {
            $('#employee_id_error').text('Employee ID is required!');
            isValid = false;
        } else {
            $('#employee_id_error').text('');
        }

        if (data.phone_number === "") {
            $('#phone_number_error').text('Phone number is required!');
            isValid = false;
        } else if (data.phone_number.length !== 10) {
            $('#phone_number_error').text('Phone number must be exactly 10 digits!');
            isValid = false;
        } else {
            $('#phone_number_error').text('');
        }

        if (data.department === "") {
            $('#department_error').text('Department is required!');
            isValid = false;
        } else {
            $('#department_error').text('');
        }

        if (data.designation === "") {
            $('#designation_error').text('Designation is required!');
            isValid = false;
        } else {
            $('#designation_error').text('');
        }

        if (!isValid) {
            return; // Exit if validation fails
        }

        // Perform AJAX request to submit the form
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'company/store',
            data: data,
            success: function(response) {
                console.log(response);
                $('#userForm')[0].reset(); // Reset the form
                $('.save-message').text('Data submitted successfully!').show();
            },
            error: function(xhr, status, error) {
                console.log('AJAX Error: ' + xhr.responseText);
                $('.error-message').text('An error occurred while submitting the form.');
            }
        });
    });

    
});
