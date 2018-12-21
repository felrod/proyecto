@extends('template.base')

@section('title')
Productos
@endsection

@section('content')
    <div class="main row">
      <div class="col-md-3 filtrar">
        <h3>Filtrar por:</h3>
      </div>
      <div class="col-md-9 filtrar">
        <a href="/products?orderBy=categories"><button type="button" name="button" class="btn btn-primary bott">Category</button></a>
        <a href="/products?orderBy=brands"><button type="button" name="button" class="btn btn-info bott">Brands</button></a>
        <a href="/products?orderBy=status"><button type="button" name="button" class="btn btn-warning bott">Status</button></a>
        <a href="/products"><button type="button" name="button" class="btn btn-success bott">Price</button></a>
      </div>
    </div>
    <br>
    <div class="container">
      <!-- Page Features -->
      <div class="row text-center">
        @forelse ($products as $oneProduct)
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
              {{-- <a href="{{route('/addCart',$oneProduct->id)}}" class="btn btn-success">Comprar</a> --}}
              <a href="{{ route('products.show',$oneProduct->id)}}" class="btn btn-danger">Detalles</a>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
      <!-- /.row -->
      <div class="pagination text-center">
        {{ $products->links() }}
      </div>
    </div>

@endsection
