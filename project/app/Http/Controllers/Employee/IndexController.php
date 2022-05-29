<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $employees = Employee::paginate(10);
        return view('employee.index', compact('employees'));
    }
}
