<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('pages/employee/index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/employee/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Employee created successfully.';


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee=Employee::find($id);
        return view('pages/employee/show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee=Employee::find($id);
        return view ('pages/employee./edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        return 'Employee updated successfully.';

        //    $employee = Employee::find($id);
        //    if ($employee) {
        //     $employee->first_name = $request->input('first_name');
        //     $employee->last_name = $request->input('last_name');
        //     $employee->save();
        //     return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
        //   } else {
        //     return redirect()->route('employees.index')->with('error', 'Employee not found.');
        //   }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        return 'deleted successfully.';
        // $employee = Employee::find($id);
        // if ($employee) {
        //     $employee->delete();
        //     return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
        // } else {
        //     return redirect()->route('employees.index')->with('error', 'Employee not found.');
        // }
    }
}
