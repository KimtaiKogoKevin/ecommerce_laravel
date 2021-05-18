@extends('master')

@section('content')
<div class=" custom-product ">
   
 <div class="col-sm-4">
    <a href="#" > Filter </a>
 </div>

 <div class="col-sm-4">
    
    <div class="product-wrapper">
  <h3> Search Results </h3>
   @foreach ($products as $item)
       
  <div class="search-item">
     <a href="detail/{{$item['id']}}">
           
      <img class="product-image" src="{{$item['gallery']}}" alt="">
         <div class="">
        <h3>{{$item['name']}}</h3>
        <h2> {{$item['description']}} </h2>
        </div>
        </a>
   </div>
   @endforeach
   </div>
    
 </div>
</div>


@endsection
