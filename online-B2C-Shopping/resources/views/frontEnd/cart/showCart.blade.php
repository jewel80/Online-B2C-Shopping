@extends('frontEnd.master')
@section('title', 'B2C shop - Show cart')
@section('mainContent')
<hr><br>
<div class="container">  
  <h1 class="text-center"> MY SHOPPING</h1><br><br> 
  <div>   
  <table  class="table table-bordered table-inverse">
	<thead style="background: #FF9933; font-color: white;">
      <tr>
        <th>Remove</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Item Total Price</th>
      </tr>
    </thead>
    <tbody>

    <?php $total = 0 ?>
    @foreach($cartProducts as $cartProduct)
      <tr>
        <td>
        	<div class="rem">
                <a href="{{ url('/cart/delete/'.$cartProduct->rowId) }}" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
                </a>
            </div>
        </td>
        <td>{{ $cartProduct->name }}</td>
        <td>
        	<form>
                <div class="input-group">
                    <input type="number" name="qty" class="form-control" value="{{ $cartProduct->qty }}"/>
                    <span class="input-group-btn">
	                    <button type="submit" name="btn" class="btn btn-primary">
	                    	<span class="glyphicon glyphicon-upload"></span>
	                    </button>
                    </span>
                </div>
            </form>
        </td>
        <td class="invert">৳ {{ $cartProduct->price }}</td>
        <td class="invert">৳ {{ $itemTotal = $cartProduct->price*$cartProduct->qty }}</td>
      </tr>
      <input type="hidden" name="" value="{{ $total = $total + $itemTotal }}">
      @endforeach
    </tbody>
  </table>
  </div>

  	<br>
	  <div class="row">
	  <div class="col-12 col-md-4">
	  		<table  class="table table-bordered table-inverse">
				<thead style="background: #FF9933; font-color: white;">
			      <tr>
			        <th>SHOPPING BASKET</th>
			      </tr>
			    </thead>
			    <tbody>
				    <tr>
				    	<th>Total <i>-</i> <span class="text-right">TK.{{ $total }} </span></th>
              <?php Session::put('orderTotal',$total); ?>
				    </tr>
			    </tbody>
			</table>
	  </div>
	  <div class="col-6 col-md-6">
	  </div>
	  <div class="col-6 col-md-2">
	  	   
	  	   <a href="{{ url('/checkout') }}"><button type="button" class="btn btn-lg btn-warning" >Checkout<span class="glyphicon glyphicon-chevron-right"></span></button class=""></a>
	  </div>
	</div>

</div>
@endsection