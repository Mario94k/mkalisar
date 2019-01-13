@extends('layouts.app')

@section('content')

<table class="table">
<thead>
<a class="btn btn-primary float-left" href="/salaries/new">New</a>
<tr>
<th scope="col">#</th>
<th scope="col">Salary Date</th>
<th scope="col">Gross Salary</th>
<th scope="col">Net Salary</th>
<th scope="col">Tax</th>
<th scope="col">Surtax</th>
<th scope="col">Health Insurance</th>
<th scope="col">Pension</th>
<th scope="col">Employee ID</th>

</tr>
</thead>
<tbody>
@foreach ($salaries as $salary)
<tr>
<td><?= $salary ->id ?></td>
<td><?= $salary ->salary_date ?></td>
<td><?= $salary ->gross_salary ?></td>
<td><?= $salary ->net_salary ?></td>
<td><?= $salary ->tax ?></td>
<td><?= $salary ->surtax ?></td>
<td><?= $salary ->health_insurance ?></td>
<td><?= $salary ->pension ?></td>
<td><?= $salary ->employee_id ?></td>
<td><a href="/salaries/delete/{{ $salary->id }}" class="btn btn-sm btn-danger">X</a></td>
</tr>
@endforeach
</tbody>
</table>

@endsection
