<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeRole = Role::Employee;
        $employees = User::where('Role_id', $employeeRole)->get();
        $layout = 'index';

        return view('employee', compact('employeeRole', 'employees', 'layout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeeRole = Role::Employee;
        $employees = $employees = User::where('Role_id', $employeeRole)->get();
        $layout = 'create';

        return view('employee', compact('employeeRole', 'employees', 'layout'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->Role_id = $request->input('Role_id');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        if (!empty($request->input('password'))) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();

        return redirect('/employee/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = User::find($id);
        $employeeRole = Role::Employee;
        $employees = $employees = User::where('Role_id', $employeeRole)->get();
        $layout = 'edit';

        return view('employee', compact('employeeRole', 'employees', 'employee', 'layout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->Role_id = $request->input('Role_id');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        if (!empty($request->input('password'))) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/employee/');
    }
}
