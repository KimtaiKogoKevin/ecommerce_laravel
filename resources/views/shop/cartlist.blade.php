@extends('master')

@section('content')
<div class=" custom-product ">
  <div class="col-sm-12">
    <div class="product-wrapper">
     <h3> Cart Items </h3>
     <a href="/checkout" class="btn btn-success">Check out</a> <br> <br>
      @foreach ($products as $item)
       <div class=" row searched-item  cart-list-divider">
           <div class="col-sm-4">
               <a href="detail/{{$item->id}}">
                <img class=" product-image" src="{{$item->gallery}}" alt="">
            </a>
        </div>
        <div class="col-sm-4">
                <div class="">
                     <h2>{{$item->name}}</h2>
                     <h5> {{$item->description}} </h5>
                 </div>
         </div>
         <div class="col-sm-4">
            <a href="{{ route('removecartitem',$item->cart_id)}}" class="btn btn-danger"> Remove From Cart </a> 
         </div>
        </div>
        @endforeach
   </div>
    
 </div>
</div>


@endsection
