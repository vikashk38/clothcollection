@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
<div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
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
              <div class="form d-flex align-items-center">

                <div class="content">
                  <form action="save-vendor-login" id="login-form" method="post">
                  	{{ csrf_field() }}
                    <div class="form-group">
                      <input id="login-username" type="text" name="v_email" required="" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="v_password" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div><button class="btn btn-primary">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
//------------------------------------
<!-- 	<div class="form-content">
		<form action="save-vendor-login" method="post">
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
	<a href="<?php //echo url('/register')?>">Register</a> -->
@endsection