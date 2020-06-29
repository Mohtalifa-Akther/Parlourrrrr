<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {

        $data['employees'] = Employee::orderBy('id', 'desc')->paginate(15);
        return view('admin.employee.index', $data);
    }

    public function create()
    {
        return view('admin.employee.create');
    }


    public function store(Request $request)
    {
        if (Employee::where('email', $request->email)->first() != null) {
           return redirect()->back()->with('mgs', ['Error', 'Email already exists!']);
        }
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->speciality = $request->speciality;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address1 = $request->address1;
        $employee->address2 = $request->address2;
        $employee->city = $request->city;
        $employee->country = $request->country;
        if($request->hasFile('avatar'))
            $employee->avatar = $request->file('avatar')->store('employees', 'public');
        $employee->description = $request->description;
        if($request->facebook != "")
            $employee->facebook = $request->facebook;
        if($request->twitter != "")
            $employee->twitter = $request->twitter;
        // dd($request->except('_token'));
        $employee->save();
        return redirect()->back()->with('mgs', ['Success', 'Employee Saved Successfully!']);
    }

    public function show(Employee $employee)
    {
        return view('admin.employee.show',compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('admin.employee.edit',compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
    $employee->name = $request->name;
        $employee->speciality = $request->speciality;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address1 = $request->address1;
        $employee->address2 = $request->address2;
        $employee->city = $request->city;
        $employee->country = $request->country;
        if($request->hasFile('avatar'))
            $employee->avatar = $request->file('avatar')->store('employees', 'public');
        $employee->description = $request->description;
        $employee->facebook = $request->facebook;
        $employee->twitter = $request->twitter;
        return redirect()->back()->with('mgs', ['Success', 'Employee Updated Successfully!']);
    }


    public function delete(Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->with('mgs', ['Success', 'Employee deleted Successfully!']);
    }
}
