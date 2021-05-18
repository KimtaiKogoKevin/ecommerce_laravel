@extends('master')

@section('content')
<div class=" custom-product ">
  <div class="col-sm-12">
    <table class="table">
        
        <tbody>
          <tr>
            <td>Amount</td>
          <td>{{$total}}</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$0</td>
          </tr>
          <tr>
            <td>Deliver Charges</td>
            <td>$10</td>
          </tr>
          <tr>
            <td>Total Amount</td>
          <td>{{$total+10}}</td>
          </tr>

        </tbody>
      </table>

  <div>

    <form action="/placeorder" method="POST" >
      @csrf
        <div class="form-group">
         <textarea name="address" placeholder="Enter your address"></textarea>
        </div>
        <div class="form-group">
          <label for="pwd">Payement method</label><br> <br>
          <input type="radio" name="payment" value="cash" class="form-control"><span>Mpesa</span> <br> <br>
          <input type="radio" name="payment"  value="cash" class="form-control"><span>Payement on delivery</span><br> <br>

        </div>
        
        <button type="submit" class="btn btn-primary">Place Order</button>
      </form>

  </div>
    
 </div>
</div>


@endsection
