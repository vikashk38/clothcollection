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

	<div class="dashboard">
		<h1>DashBoard</h1>
		<p><?php echo $value = session('v_email'); ?></p>
	</div>
	<a href="<?php echo url('/logout'); ?>">Logout</a>
@endsection