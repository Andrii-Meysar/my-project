@extends('layouts.app')

@section('title', 'User List')

@section('content')
<div class="container mt-5">
    <a href="{{ route('users.create') }}" class="btn btn-primary active float-right">
            <span >Create New User</span>
    </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" width="3%">#</th>
            <th scope="col" width="45%">Name</th>
            <th scope="col" width="45%">Email</th>
            <th scope="col" width="7%">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="link-primary">Edit</a>
                <a href="{{ route('users.show', ['user' => $user->id]) }}" class="link-info">Details</a>
                <form method="post" class="delete_form" action="{{ route('users.destroy', ['user' => $user->id]) }}" id="userDeleteForm_{{$user->id}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="d-flex">
        {{$users->links()}}
    </div>
</div>
@stop
