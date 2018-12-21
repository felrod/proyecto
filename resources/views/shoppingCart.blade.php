@extends('template.base')

@section('title')

@section('content')

<div class="container">
      @if(Session::has('cart'))
<div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                        <th> </th>
                    <th>Quantity</th>
                    <th class="text-center">Price</th>

                    <th> </th>
                </tr>
            </thead>
            <tbody>

                @foreach($products as $product)
                <tr>
                    <td class="col-sm-8 col-md-6">
                    <div class="media">
                        <a class="thumbnail pull-left" href="{{ route('products.show',$product['item']['id'])}}"> <img class="media-object" src="{{ Storage::url('products/' . $product['item']['img'])}}" style="width: 72px; "> </a>
                        <div class="media-body">
                            <h4 class="media-heading" style="margin-left:20px;">{{$product['item']['name'] }} </h4>
                        </div>
                    </div></td>
                    <td></td>
                    <td class="col-sm-1 col-md-1" style="text-align: center">
                      <h5>{{$product['qty'] }}</h5>
                    </td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>${{$product['price'] }}</strong></td>

                    <td class="col-sm-1 col-md-1">
                    <a href="{{route('removefromcart' ,['id' => $product['item']['id']])}}" class="btn btn-danger">
                      Remove  </a></td>
                </tr>
                @endforeach



            </tbody>
            <tfoot>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h3>Total</h3></td>
                    <td class="text-right"><h3>${{$totalPrice }}</h3></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                      <a href="{{url('products')}}" class="btn btn-primary">
                      Continue Shopping  </a>

                    </td>
                    <td>
                    <a href="{{url('checkout')}}" class="btn btn-primary" id='checking'>
                      Checkout  </a></td>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>
     @else
    <div class="col-sm-12 col-md-10 col-md-offset-1">
    <h2> No items in the cart </h2>
    </div>
     @endif
    </div>
@endsection
@section('custom-js')
<script src={{ asset('/js/details.js')}} ></script>
@endsection
