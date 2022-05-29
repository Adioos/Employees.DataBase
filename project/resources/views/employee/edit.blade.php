@extends('layouts.main')
@section('shablon')
<div>
    <form action="{{route('employee.update', $employee->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="Full Name" class="form-label">Full Name</label>
            <input type="text" name="Full_name" class="form-control" id="Full Name" placeholder="Full Name" value="{{$employee->Full_name}}">
        </div>
        <div class="mb-3">
            <label for="Position" class="form-label">Position</label>
            <input type="text" name="Position" class="form-control" id="Position" placeholder="Position" value="{{$employee->Position}}">
        </div>
        <div class="mb-3">
            <label for="Age" class="form-label">Age</label>
            <input name="Age" class="form-control" id="Age" placeholder="Age" value="{{$employee->Age}}">
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
        <a href="{{route('employee.index')}}"class="btn btn-success">Back</a>
    </form>
</div>
@endsection