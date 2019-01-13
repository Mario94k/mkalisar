@extends('layouts.app')

@section('content')

<form method="post" action="/continents">
@csrf

<div class="form-group">
    <input class="form-control" name="continent_name" type="text" placeholder="continent_name">
</div>
<div class="form-group">
    <input class="form-control" name="number_of_counties" type="text" placeholder="number_of_counties">
</div>
<div class="form-group">
    <input class="form-control" name="native_name" type="text" placeholder="native_name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection