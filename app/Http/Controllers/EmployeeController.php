<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    protected $employee;

    public function __construct(){

        $this->employee = new Employee();

    }


    public function index()
    {
        $response['employees'] = $this->employee->all();
        return view('pages.index')->with($response);
    }



    public function store(Request $request)
    {
        if ($this->employee->create($request->only(['emp_name', 'dob', 'phone']))) {
            return redirect()->route('employee.index')
                 ->with('success', 'Employee created successfully!');

        }

    }


    public function edit(string $id)
    {
        $response['employees'] = $this->employee->find($id);
        return view('pages.edit')->with($response);
    }


    public function update(Request $request, string $id)
    {
        $employee = $this->employee->find($id);
        $employee->update($request->only(['emp_name', 'dob', 'phone']));
        return redirect('employee');
    }

    public function destroy(string $id)
    {
        $employee = $this->employee->find($id);
        $employee->delete();
        return redirect('employee');
    }
}
