@extends('layouts.main')
@section('shablon')
<div>
    <div> {{ $employee->id }}. {{ $employee->Full_name }}</div>
    <div> {{ $employee->Position }}</div>
    <div> {{ $employee->Age }}</div>
</div>
<a href="{{route('employee.edit', $employee->id)}}" class="btn btn-success">Edit</a>
<form action="{{route('employee.delete', $employee->id)}}" method="post">
    @csrf
    @method('delete')
    <div> <button type="submit" class="btn btn-outline-danger">Delete</button></div>
</form>
<a href="{{route('employee.index')}}" class="btn btn-success">Back</a>
@endsection