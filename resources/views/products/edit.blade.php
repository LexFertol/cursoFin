@extends('layout')

@section('content')

<div class = "col-sm-8">
	<HR>
	<h2>
		Editar producto
		<a href="{{route ('products.index')}}" class = "btn btn-defaul pull-right">Listado </a>
	</h2>

	@include ('products.fragment.error')
	
		{!! Form::model($product,['route' =>['products.update', $product->id] , 'method' => 'PUT' ]) !!}
		@include('products.fragment.form')
</div>

<div class = "col-sm-4">
	@include('products.fragment.aside')
</div>
@endsection