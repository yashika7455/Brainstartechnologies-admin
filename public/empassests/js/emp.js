$(document).ready(function() {
    $('.submit-btn').on('click', function(e) {
        e.preventDefault();

        
        let start_date= $('#start_date').val();
        let end_date= $('#end_date').val();
        let reason= $('#reason').val();
        let employee_id= $('#employee-id').val(); // Ensure this field is included
      

        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/leave/store',
            data: {
                DATA1:start_date,
                data2:end_date,
                data3:reason,
                data4:employee_id,
               
            },
            success: function(response) {
                console.log(response);
                $('.save-message').text('Leave application submitted successfully!');
            }
            
        });
    });
});



    // Project Overview Chart
    var ctx = document.getElementById('projectOverviewChart').getContext('2d');
    var projectOverviewChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Completed', 'In Progress', 'Pending'],
            datasets: [{
                label: 'Project Overview',
                data: [4, 3, 2],
                backgroundColor: ['#28a745', '#17a2b8', '#dc3545'],
            }]
        },
        options: {
            responsive: true,
        }
    });

    // Project Progress Chart
    var ctx2 = document.getElementById('projectProgressChart').getContext('2d');
    var projectProgressChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Project Alpha', 'Project Beta', 'Project Gamma', 'Project Delta', 'Project Epsilon'],
            datasets: [{
                label: 'Progress (%)',
                data: [90, 85, 80, 75, 70],
                backgroundColor: '#6f42c1',
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });

