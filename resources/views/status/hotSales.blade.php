@extends('template.base')

@section('title')
Hot Sales
@endsection
@section('content')
  {{-- @foreach ($products as $product)
    <li>{{ $product->name }} -- {{ $product->status->name }}</li>
  @endforeach --}}
  <div class="container">
    <br>
    <h1>HOTSALES !!</h1>
    <br>
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
            {{-- <a href="#" class="btn btn-primary">Comprar</a> --}}
            <a href="{{ route('products.show',$oneProduct->id)}}" class="btn btn-danger">Detalles</a>
          </div>
        </div>
      </div>
      @empty
      @endforelse
    </div>
    <!-- /.row -->
    {{-- <div class="pagination text-center">
      {{ $products->links() }}
    </div> --}}
  </div>
@endsection
