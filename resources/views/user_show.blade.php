@extends('layouts.app')

@section('title', 'User Details')

@section('content')
<div class="mb-3">
    <label for="name">Name</label>
    <input type="text" disabled name="name" id="name" class="form-control" value="{{ $user->name }}">
</div>

<div class="mb-3">
    <label for="email">Email</label>
    <input type="text" disabled name="email" id="email" class="form-control" value="{{ $user->email }}">
</div>

<div class="mb-3">
    <label for="password">Password</label>
    <input type="password" disabled name="password" id="email" class="form-control" value="{{ $user->password }}">
</div>
@stop
