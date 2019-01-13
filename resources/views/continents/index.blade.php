@extends('layouts.app')

@section('content')

<table class="table">
<thead>
<a class="btn btn-primary float-left" href="/continents/new">New</a>
<tr>
<th scope="col">Continent</th>
<th scope="col">Number</th>
<th scope="col">Native name</th>
</tr>
</thead>
<tbody>
@foreach ($continents as $continent)
<tr>
<td><?= $continent ->continent_name ?></td>
<td><?= $continent ->number_of_counties ?></td>
<td><?= $continent ->native_name ?></td>

</tr>
@endforeach
</tbody>
</table>

@endsection
