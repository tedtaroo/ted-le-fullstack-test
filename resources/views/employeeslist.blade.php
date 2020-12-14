<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">List of employees</h5>
        <p class="card-text">You can find here all the information about employees in the system</p>
        <a href="{{ url('/employee/create/') }}" class="btn btn-sm btn-success text-right">Add New</a>
        <br>
        <br>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">First name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>
                        <a href="{{ url("/employee/edit/$employee->id") }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ url("/employee/destroy/$employee->id") }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>