@extends('master')

@section('content')
<div class=" container ">
 <div class="row">
     <div class="col-sm-6">
     <img class="detail-img" src="{{$details['gallery']}}" />
    </div>

    <div class="col-sm-6">
    <a href="/"> Go Back </a>
    <h2> {{$details->name}} </h2>
    <h3> KSH: {{$details->price}} </h3>
    <h3> Description: {{$details->description}} </h3>

    <h4> Category: {{$categories->name}} </h4>
    <br> <br>
  <form action="/add_to_cart" method="POST" >
        @csrf 
     <input type="hidden" name="product_id" value={{$details['id']}}>

    <button class="btn btn-primary"> Add to Cart </button>
     
          
      </form>
     <br> <br>
    <button class="btn btn-success"> Buy now </button>


    </div>
    </div>
    

</div>


@endsection
