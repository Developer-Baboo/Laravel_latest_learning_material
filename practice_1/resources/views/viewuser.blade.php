@extends('layout')

@section('title')
    User Records Details
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th width="80px">Name: </th>
        <td> {{ $users->name }} </td>
    </tr>
    <tr>
        <th>Email: </th>
        <td>{{ $users->email }}</td>
    </tr>
    <tr>
        <th>Age: </th>
        <td>{{ $users->age }}</td>
    </tr>
    <tr>
        <th>City: </th>
        <td>{{ $users->city }}</td>
    </tr>
</table>
<a href="{{ route('users.index') }}" class="btn btn-danger btn-sm">Back</a>
@endsection