@extends('layouts.app')

@section('title', 'User Edit')

@section('content')
@include('user_form', ['actionUrl' => route('users.update', ['user' => $user->id]), 'actionMethod' => 'POST', 'isPut' => 1, 'submitButtonText' => 'Save User', 'user' => $user])
@stop
