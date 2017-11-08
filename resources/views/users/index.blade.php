@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Users</h3>
        <a href="{{ route('users.create') }}" class="btn btn-default">New User</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-default btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection