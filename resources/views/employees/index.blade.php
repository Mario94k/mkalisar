@extends('layouts.app')

@section('content')

<table class="table">
<thead>
<a class="btn btn-primary float-left" href="/employees/new">New</a>
<tr>
<th scope="col">ID</th>
<th scope="col">Employee</th>
<th scope="col">Last Name</th>
<th scope="col">Date Of Birth</th>
<th scope="col">Sex</th>
<th scope="col">City ID</th>
</tr>
</thead>
<tbody>
@foreach ($employees as $employee)
<td><?= $employee->id ?></td>
<td><?= $employee->employee ?></td>
<td><?= $employee->last_name ?></td>
<td><?= $employee->date_of_birth ?></td>
<td><?= $employee->sex ?></td>
<td><?= $employee->city->city_name ?></td>
<td><a href="/employees/delete/{{ $employee->id }}" class="btn btn-sm btn-danger">X</a></td>
</tr>
@endforeach
</tbody>
</table>

@endsection
