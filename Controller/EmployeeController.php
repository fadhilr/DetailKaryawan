<?php

namespace Controller;

use App\Http\Controllers\Controller;
use Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function detailEmployee(Employee $employee)
    {
        return $employee->load([
            'department',
            'department.company',
        ]);
    }

    public function setEmployeeName(Employee $employee, Request $request)
    {
        $employee->fill($request);
        $employee->save();

        return $employee;
    }

    public function getEmployeeTitle()
    {
        $employee = DB::table('employee')->select('title')->get();

        return $employee;
    }

    public function getEmployeeProfile()
    {
        $employee = DB::table('employee')->select('profile')->get();

        return $employee;
    }

    public function getEmployeeMonthlySalary(Request $day)
    {
        $employee = DB::table('employee')->select('salary')->where('Created_at', $day)->get();

        return $employee;
    }
}
