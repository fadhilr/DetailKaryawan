<?php

namespace Controller;

use App\Http\Controllers\Controller;
use Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function setDepartmentName(Department $department, Request $request)
    {
        $department->fill($request);
        $department->save();

        return $department;
    }

    public function getDepartmentName()
    {
        $department = DB::table('department')->select('name')->get();

        return $department;
    }
}
