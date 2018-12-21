@extends('template.products.templateProducts')

{{-- @dd($productsCategory) --}}
@section('title')
{{'Buscar Producto'}}
{{-- <h1></h1> --}}
@endsection

@section('category')
  <h3>Estás buscando: "{{$find}}"</h3>
@endsection

@section('content')

  {{-- @dd($prodructsFind) --}}
  <div class="container_productos">
    @forelse ($prodructsFind as $oneProduct)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="{{ Storage::url('products/' . $oneProduct->img) }}" alt="image" style="width:100%">
          @if ($oneProduct->status_id=='2')
            <img src="/images/offer.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
          @elseif ($oneProduct->status_id=='3')
            <img src="/images/hot.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
          @elseif ($oneProduct->status_id=='4')
            <img src="/images/new.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">$ {{ $oneProduct->price }}</h4>
            <p class="card-text">{{ $oneProduct->name }}</p>
          </div>
          <div class="card-footer">
            {{-- <a href="#" class="btn btn-primary">Comprar</a> --}}
            <a href="{{ route('products.show',$oneProduct->id)}}" class="btn btn-danger">Detalles</a>
          </div>
        </div>
      </div>
    @empty
      <h2>No se ha encontrado ningun producto</h2>
    @endforelse
  </div>
  <br>
    {{-- Paginado --}}
  <div class="container_buttons">
    {{$prodructsFind->links()}}
  </div>

@endsection
