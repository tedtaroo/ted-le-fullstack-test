<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Enter the information of the new employee</h5>
        <form action="{{ url('/employee/store') }}" method="post">
            @csrf
            <input name="Role_id" type="hidden" class="form-control" value="<?php echo $employeeRole;?>">
            <div class="form-group">
                <label>First Name*</label>
                <input name="first_name" type="text" class="form-control"  placeholder="Enter First Name">
            </div>
            @error('first_name')
            <p style="color:red">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label>Last Name*</label>
                <input name="last_name" type="text" class="form-control"  placeholder="Enter Last Name">
            </div>
            @error('last_name')
            <p style="color:red">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label>Email*</label>
                <input name="email" type="text" class="form-control"  placeholder="Enter Email">
            </div>
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
            {{--
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input name="username" type="text" class="form-control"  placeholder="Enter User Name">
                                        </div>
                                        @error('username')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" type="text" class="form-control"  placeholder="Enter Password">
                                        </div>
                                        @error('password')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
            --}}
            <input type="submit" class="btn btn-info" value="Save">
            <input type="reset" class="btn btn-warning" value="Reset">

        </form>
    </div>
</div>