@extends('layout')

@section('title')
    All Users Data
@endsection

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-success btn-sm mb-3">Add New</a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($users as $user )
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->city }}</td>
                                <td> <a href="{{ route('users.show',$user->id) }}" class="btn btn-primary btn-sm">View</a></td>
                                <td> <a href="" class="btn btn-danger btn-sm">Delete</a></td>
                                <td> <a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                            </tr>
                    @endforeach
                </table>
@endsection