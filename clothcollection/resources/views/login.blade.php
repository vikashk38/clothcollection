@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
@if($errors->any())
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
	<div class="form-content">
		<form action="save_login" method="post">
			{{ csrf_field() }}
			<div class="input-contet">
				<label>Email:</label>
				<input type="text" name="v_email" class="email" id="email"/>
			</div>
			<div class="input-contet">
				<label>Password:</label>
				<input type="password" name="v_password" class="password" id="password">
			</div>
			<div class="input-contet">
				<input type="submit" name="submit" class="sumit" value="Login">
			</div>
		</form>
	</div>
	<a href="<?php echo url('/register')?>">Register</a>
@endsection