@extends('master')

@section('content')
{{-- <div class=" custom-product ">
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
</div> --}}



 <!-- Cart Items -->
 <div class="container-md cart">
  @foreach ($products as $item)

  <table>
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Subtotal</th>
    </tr>
    <tr>
      <td>
        <div class="cart-info">
          <a href="detail/{{$item->id}}">
            <img class=" product-image" src="{{$item->gallery}}" alt="">
        </a>
          <div>
            <p>{{$item->name}}</p>
            <span>{{$item->price}} </span>
            <br />
            <a href="{{ route('removecartitem',$item->cart_id)}}" class="btn btn-danger"> Remove From Cart </a> 

          </div>
        </div>
      </td>
      <td><input type="number" value="1" min="1"></td>
      <td>{{$item->price}}</td>
    </tr>
  
    
    
    <tr>
      <td>
        <div class="cart-info">
          <img src="./images/pic5.jpg" alt="">
          <div>
            <p>Boy’s T-Shirt</p>
            <span>Price: $60.00</span>
            <br />
            <a href="#">remove</a>
          </div>
        </div>
      </td>
      <td><input type="number" value="1" min="1"></td>
      <td>$60.00</td>
    </tr>
  </table>

  <div class="total-price">
    <table>
      <tr>
        <td>Subtotal</td>
        <td>$200</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$50</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>$250</td>
      </tr>
      @endforeach

    </table>
    <a href="/checkout" class="checkout btn">Proceed To Checkout</a>

  </div>

</div>



@endsection
