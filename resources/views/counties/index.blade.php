@extends('layouts.app')

@section('content')

<table class="table">
<thead>
<a class="btn btn-primary float-left" href="/counties/new">New</a>
<tr>
<th scope="col">#</th>
<th scope="col">Code</th>
<th scope="col">Name</th>
</tr>
</thead>
<tbody>
@foreach ($counties as $county)
<tr>
<td><?= $county ->id ?></td>
<td><?= $county ->county_code ?></td>
<td><?= $county ->county_name ?></td>
<td><a href="/counties/delete/{{ $county->id }}" class="btn btn-sm btn-danger">X</a></td>
</tr>
@endforeach
</tbody>
</table>

@endsection
