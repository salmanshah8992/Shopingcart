@extends('layout.app')
@yield('title','Cart')
@section('content')
<br>
<div class="container">
    <h1 class="text-center">Cart Page</h1>
<div class="row">
   
    <div class="table table-hover">
        <table>
            <thead>
                <tr>
                    <th width="50%">Product</th>
                    <th width="10%">Price</th>
                    <th width="8%">Quantity</th>
                    <th width="22%">Sub total</th>
                    <th width="10%">Sub total</th>
                </tr>
            </thead>
            <tbody>
              
               @php
                    $total=0;
               @endphp
               
               @if (session('cart'))
                @foreach ( session('cart') as $id=>$product )
                @php  
              
                $sub_total=$product['price']*$product['quantity'];
                $total+=$sub_total;
               @endphp
               <tr>
                <td><img src="{{ $product['image'] }}"
                     alt="{{ $product['name'] }}"
                    class="img-fluid">
                    <span>{{ $product['name'] }}</span>
                </td>
                <td>৳{{ $product['price'] }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>৳{{ $sub_total }}</td>
                <td>
                    <a href="{{ route('remove',[$id]) }}" class="btn btn-danger btn-sm">X</a></td>
                </tr>
                @endforeach
                    
                @endif
              
                  
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="{{ route('products') }}" class="btn btn-warning">Continue Shopping</a>
                     </td>
                    <td colspan="2"></td>
                    <td><strong> Total ৳{{ $total }}</strong>
                       </td>
                </tr>
            </tfoot>
        </table>
    </div>
        
    </div>
    


</div>


    
@endsection