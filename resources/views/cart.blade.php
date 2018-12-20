@extends('template.base')

@section('title')

@section('content')
<body>
    <h3>Cart </h3>
    <div class="table-responsive-sm">
	<table class="table">
		<tr>
			<td>Nombre</td>
			<td>Precio $</td>
			<td>Categoria</td>
			<td>Brand</td>
			{{-- <td>Descripción</td> --}}
	  </tr>

    @forelse ($products as $product)
      <tr>
        <td>{{$product->name }}</td>
  			<td>{{$product->price}}</td>
  			<td>{{$product->category->name}}</td>
  			<td>{{$product->brand->name}}</td>
      </tr>
  		{{-- <td>{{$product->description}}</td> --}}
    @empty
      <h4>No Tienes Productos en tu Carrito</h4>
    @endforelse

	</table>
</div>
</body>
@endsection
