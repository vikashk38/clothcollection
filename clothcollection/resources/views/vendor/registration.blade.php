@extends('layouts.app')

@section('title', 'Registration Page')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <form action="save_register" method="post">
    	{{ csrf_field() }}
    	<label>Name</label>
    	<input type="text" name="v_name" value="{{ old('v_name') }}">
    	<label>Email</label>
    	<input type="text" name="v_email" value="{{ old('v_email') }}">
    	<label>Password</label>
    	<input type="password" name="v_password">
    	<input type="submit" name="submit" value="Submit">
    </form>
    <a href="<?php echo url('/login')?>">Login</a>
@endsection