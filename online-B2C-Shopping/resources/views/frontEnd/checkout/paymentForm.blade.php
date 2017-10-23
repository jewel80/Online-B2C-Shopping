@extends('frontEnd.master')
@section('title', 'B2C shop - Payment Form')
@section('mainContent')
<br><br>
<hr/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well lead text-center text-success">You have to give us product payment information to complete your valuable order.</div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
         <h2 class="text-center">Payment Form </h2>
            <hr/>
        <div class="well box box-primary">
            <form action="{{ url('/checkout/save-order')}}" method="POST">
            {{ csrf_field() }}
	            <div class="box-body">
				   <div class="form-group">
	                    <label for="exampleInputEmail1"><input type="radio" name="paymentType" value="cashOnDelivery" > Cash On Delivery</label>
	                </div>
	            </div>
	            <div class="box-body">
				   <div class="form-group">
	                    <label for="exampleInputEmail1"><input type="radio" name="paymentType" value="paypal" > Paypal</label>
	                </div>
	            </div>
	            <div class="box-body">
				   <div class="form-group">
	                    <label for="exampleInputEmail1"><input type="radio" name="paymentType" value="bkash" > Bkash</label>
	                </div>
	            </div>
	            <!-- /.box-body -->
	            <div class="box-footer">
	                <button type="submit" class="btn btn-primary btn-block">Order Submit</button>
	            </div>
            </form>
        </div>
    </div>
</div>
</div><br><br>

@endsection