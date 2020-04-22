<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Login Page</h1>
	<a href="http://localhost:8000/products">Home Page</a><br />
	@extends('layouts.master')
	@section('content')
	<div class="container">

		<form action="{{ url('/form')}}" method="post">
		@csrf
	<input type="text"name="name" placeholder="Name"><br />
	<input type="text"name="email"placeholder="E-mail"><br />
	<button type="submit">Submit</button>
		
	</div>
	@endsection
</body>
</html>