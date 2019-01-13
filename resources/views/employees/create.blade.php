@extends('layouts.app')

@section('content')

<form method="post" action="/employees">
@csrf

<div class="form-group">
    <input class="form-control" name="id" type="text" placeholder="Id">
</div>
<div class="form-group">
    <input class="form-control" name="employee" type="text" placeholder="Employee">
</div>
<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Name">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="Last name">
</div>
<div class="form-group">
    <input class="form-control" name="date_of_birth" type="text" placeholder="Date of birth">
</div>
<div class="form-group">
    <input class="form-control" name="sex" type="text" placeholder="Sex">
</div>
<div class="form-group">
    <select class="form-control" name="city_id">
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}">{{ $employee->employee_name }}</option>
        @endforeach
    </select>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection