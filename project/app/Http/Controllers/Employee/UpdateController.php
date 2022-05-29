<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\UpdateRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Employee $employee)
    {
        $data = $request->validated();
        $this->service->update($employee, $data);
        return redirect()->route('employee.show', $employee->id);
    }
}
