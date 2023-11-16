@extends('layouts.app')

@section('title', 'User Create')

@section('content')
@include('user_form', ['actionUrl' => route('users.store'), 'actionMethod' => 'POST', 'submitButtonText' => 'Save New User'])
@stop
