@extends('layouts.app')

@section('content')

<table class="table">
<thead>
<a class="btn btn-primary float-left" href="/cities/new">New</a>
<tr>
<th scope="col">#</th>
<th scope="col">Code</th>
<th scope="col">Name</th>
</tr>
</thead>
<tbody>
@foreach ($cities as $city)
    <tr>
        <td><?= $city->id ?></td>
        <td><?= $city->city_name ?></td>
        <td><?= $city->county->county_name ?></td>
        <td><a href="/cities/delete/{{ $city->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
@endforeach
</tbody>
</table>

@endsection
