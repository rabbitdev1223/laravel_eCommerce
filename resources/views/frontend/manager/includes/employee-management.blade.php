<div class="card card-xxl-stretch mb-5 mb-xxl-8">
    <div class="card-header border-0 pt-5 justify-content-md-between justify-content-start">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Employees</span>
        </h3>
        <div>

            <input type="search" name="" id="employee-filter-name" class="form-control" placeholder="Search Name">
        </div>
    </div>

    <div class="card-body py-3" id="employee-card-body">
        <div class="table-responsive">
            <table id="employees"
                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                <thead>
                    <tr class="fw-bolder text-muted">
                        <th id="employee-name-col" class="min-w-120px">Name</th>
                        <th id="employee-email-col" class="min-w-80px">Email</th>
                        <th id="employee-job-col" class="min-w-80px">Job</th>
                        <th id="employee-department-col" class="min-w-80px">Department</th>
                        <th id="employee-location-col" class="min-w-80px">Location</th>
                        {{-- <th class="min-w-100px text-center">Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script>
    employees = @json($employees);

    // loop through employees and concat first_name and last_name as name and include job.title if not null, department.title if not null, location_id if not null, and email
    for (var i = 0; i < employees.length; i++) {
        var employee = employees[i];
        employee.name = employee.first_name + ' ' + employee.last_name;
        employee.email = employee.email;
        if (employee.job) {
            employee.job = employee.job.title;
        } else {
            employee.job = '';
        }

        if (employee.department) {
            employee.department = employee.department.title;
        } else {
            employee.department = '';
        }

        if (employee.location) {
            employee.location = employee.location.code
        } else {
            employee.location = '';
        }
    }

    // create function to sort by name
    function sortByName(a, b) {
        if (a.last_name < b.last_name) {
            return -1;
        } else if (a.last_name > b.last_name) {
            return 1;
        } else {
            if (a.first_name < b.first_name) {
                return -1;
            } else if (a.first_name > b.first_name) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    // create function to reverse sortByName function
    function reverseSortByName(a, b) {
        if (a.last_name < b.last_name) {
            return 1;
        } else if (a.last_name > b.last_name) {
            return -1;
        } else {
            if (a.first_name < b.first_name) {
                return 1;
            } else if (a.first_name > b.first_name) {
                return -1;
            } else {
                return 0;
            }
        }
    }

    // create function to sort email
    function sortByEmail(a, b) {
        if (a.email < b.email) {
            return -1;
        } else if (a.email > b.email) {
            return 1;
        } else {
            return 0;
        }
    }

    // create function to reverse sortByEmail function
    function reverseSortByEmail(a, b) {
        if (a.email < b.email) {
            return 1;
        } else if (a.email > b.email) {
            return -1;
        } else {
            return 0;
        }
    }

    // create function to sort by job
    function sortByJob(a, b) {
        if (a.job < b.job) {
            return -1;
        } else if (a.job > b.job) {
            return 1;
        } else {
            return 0;
        }
    }

    // create function to reverse sortByJob function
    function reverseSortByJob(a, b) {
        if (a.job < b.job) {
            return 1;
        } else if (a.job > b.job) {
            return -1;
        } else {
            return 0;
        }
    }

    // create function to sort by department
    function sortByDepartment(a, b) {
        if (a.department < b.department) {
            return -1;
        } else if (a.department > b.department) {
            return 1;
        } else {
            return 0;
        }
    }

    // create function to reverse sortByDepartment function
    function reverseSortByDepartment(a, b) {
        if (a.department < b.department) {
            return 1;
        } else if (a.department > b.department) {
            return -1;
        } else {
            return 0;
        }
    }

    // create function to sort by location
    function sortByLocation(a, b) {
        if (a.location < b.location) {
            return -1;
        } else if (a.location > b.location) {
            return 1;
        } else {
            return 0;
        }
    }

    // create function to reverse sortByLocation function
    function reverseSortByLocation(a, b) {
        if (a.location < b.location) {
            return 1;
        } else if (a.location > b.location) {
            return -1;
        } else {
            return 0;
        }
    }

    // sort employees by last name
    // employees.sort(sortByName);

    let sortType = 'Name';
    let sortDirection = 'asc';

    // fill table with employees name and email
    $.each(employees, function (index, employee) {
        $('#employees').find('tbody').append('<tr>' +
            '<td class="text-dark fw-bolder employee-name">' + employee.name + '</td>' +
            '<td class="employee-email">' + employee.email + '</td>' +
            '<td class="employee-job">' + employee.job + '</td>' +
            '<td class="employee-department">' + employee.department + '</td>' +
            '<td class="employee-location">' + employee.location + '</td>' +
            // '<td class="text-center">' +
            //     '<button type="button" class=" btn btn-sm- btn-light-warning" data-bs-toggle="modal" data-bs-target="#show_order_modal">View</button>' +
            // '</td>' +
        '</tr>');
    });

    // create function to filter employees by name
    function filterByName(name) {
        var filteredEmployees = [];

        // loop through employees
        for (var i = 0; i < employees.length; i++) {
            var employee = employees[i];
            var nameMatch = employee.name.toLowerCase().indexOf(name.toLowerCase()) !== -1;

            // if name matches add employee to filtered array
            if (nameMatch) {
                filteredEmployees.push(employee);
            }
        }
        return filteredEmployees;
    }

    // when user types in the search field, filter the table
    $('#employee-filter-name').on('input', function () {
        var name = $(this).val();
        var filteredEmployees = filterByName(name);

        // if there are no results, hide the table and display "No Employees found with name: " in the element with id employee-card-body
        if (filteredEmployees.length === 0) {
            $('#employees').hide();
        } else {
            $('#employees').show();
            $('#employees').find('tbody').html('');
            $.each(filteredEmployees, function (index, employee) {
                $('#employees').find('tbody').append('<tr>' +
                    '<td class="text-dark fw-bolder employee-name">' + employee.first_name + ' ' + employee.last_name + '</td>' +
                    '<td class="employee-email">' + employee.email + '</td>' +
                    '<td class="employee-job">' + employee.job + '</td>' +
                    '<td class="employee-department">' + employee.department + '</td>' +
                    '<td class="employee-location">' + employee.location + '</td>' +
                    // '<td class="text-center">' +
                    //     '<button type="button" class=" btn btn-sm- btn-light-warning" data-bs-toggle="modal" data-bs-target="#show_order_modal">View</button>' +
                    // '</td>' +
                '</tr>');
            });
        }
    });

    const downCaret = '<i class="bi bi-caret-down"></i>';
    const upCaret = '<i class="bi bi-caret-up-fill"></i>';

    // when click column headers set sort type to column title
    $('#employees').find('thead').find('th').on('click', function () {

        // if sortType == column title then reverse sort direction
        if (sortType === $(this).text()) {
            sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            sortType = $(this).text();
            sortDirection = 'asc';
        }

        if (sortType === 'Name') {
            // sort by sortDirection
            employees.sort(sortDirection === 'asc' ? sortByName : reverseSortByName);
        } else if (sortType === 'Job') {
            employees.sort(sortDirection === 'asc' ? sortByJob : reverseSortByJob);
        } else if (sortType === 'Department') {
            employees.sort(sortDirection === 'asc' ? sortByDepartment : reverseSortByDepartment);
        } else if (sortType === 'Location') {
            employees.sort(sortDirection === 'asc' ? sortByLocation : reverseSortByLocation);
        } else if (sortType === 'Email') {
            employees.sort(sortDirection === 'asc' ? sortByEmail : reverseSortByEmail);
        }

        // clear table
        $('#employees').find('tbody').html('');

        // clear carets from header
        $('#employees').find('thead').find('th').find('i').remove();


        // append caret to column header with title that is the same as sortType
        $('#employees').find('thead').find('th').each(function () {
            if ($(this).text() === sortType) {
                $(this).append(sortDirection === 'asc' ? downCaret : upCaret);
            }
        });

        // render table
        $.each(employees, function (index, employee) {
            $('#employees').find('tbody').append('<tr>' +
                '<td class="text-dark fw-bolder employee-name">' + employee.name + '</td>' +
                '<td class="employee-email">' + employee.email + '</td>' +
                '<td class="employee-job">' + employee.job + '</td>' +
                '<td class="employee-department">' + employee.department + '</td>' +
                '<td class="employee-location">' + employee.location + '</td>' +
                // '<td class="text-center">' +
                //     '<button type="button" class=" btn btn-sm- btn-light-warning" data-bs-toggle="modal" data-bs-target="#show_order_modal">View</button>' +
                // '</td>' +
            '</tr>');
        });
    });

</script>
@endpush
