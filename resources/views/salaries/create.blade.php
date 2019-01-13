@extends('layouts.app')

@section('content')

<form method="post" action="/employees">
@csrf

<div class="form-group">
    <input class="form-control" name="id" type="text" placeholder="Id">
</div>
<div class="form-group">
    <input class="form-control" name="salary_date" type="text" placeholder="salary date">
</div>
<div class="form-group">
    <input class="form-control" name="gross_salary" type="text" placeholder="gross salary">
</div>
<div class="form-group">
    <input class="form-control" name="net_salary" type="text" placeholder="net salary">
</div>
<div class="form-group">
    <input class="form-control" name="tax" type="text" placeholder="tax">
</div>
<div class="form-group">
    <input class="form-control" name="surtax" type="text" placeholder="surtax">
</div>
<div class="form-group">
    <input class="form-control" name="health_insurance" type="text" placeholder="health insurance">
</div>
<div class="form-group">
    <input class="form-control" name="pension" type="text" placeholder="pension">
</div>
<div class="form-group">
    <select class="form-control" name="employee_id">
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}">{{ $employee->employee_name }}</option>
        @endforeach
    </select>
<div class="form-group">
    <input class="form-control" name="employee" type="text" placeholder="employee">
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection