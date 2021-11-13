@extends('layout1.layout')

@section('title', 'Shopping Cart')

@section('css')

@endsection

@section('content')
@include ('/childview/header')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.mb-3{
	color:blue;
	font-weight: bold;
}
#exampleFormControlInput1{
	background-color: wheat;
}
</style>
</head>
<body>
	<div style="margin-top: 50px;"></div>
	<form method="POST" action="{{ route('product-store') }}">
	@csrf
	<div class="container">
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
		  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Product Name">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Price</label>
		  <input type = "number" class="form-control" id="exampleFormControlInput1" name="price"/>
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Image</label>
		  <input class="form-control" id="exampleFormControlInput1" name="image" placeholder="Upload image"/>
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
		  <input class="form-control" id="exampleFormControlInput1" name="description"  placeholder="Description about product"/>
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Rate</label>
		  <input class="form-control" id="exampleFormControlInput1" name="rate"/>
		</div>
		<input type="submit"/>
	</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection

@section('footer')
@include ('/childview/footer')
@endsection

@section('script')
@endsection