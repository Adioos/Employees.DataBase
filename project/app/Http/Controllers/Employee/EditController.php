<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }
}
