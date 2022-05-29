@extends('layouts.main')
@section('shablon')
<div>
    <div>
        <a href="{{route('employee.create')}}"class="btn btn-success">Add one</a>
    </div>
    @foreach($employees as $employee)
    <div><a href="{{route('employee.show', $employee->id) }}"> {{ $employee->id }}. {{ $employee->Full_name }}</a></div>
    @endforeach
    <div>
        {{ $employees->links() }}
    </div>
</div>
@endsection