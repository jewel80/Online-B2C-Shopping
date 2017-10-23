@extends('frontEnd.master')
@section('title', 'B2C shop - Shipping Form')
@section('mainContent')
<hr/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well lead text-center text-success">Hello <b>{{ $customerById->lastName }}</b>. You have to give us product shipping information to complete your valuable order. If your product billing information & shipping information are same then just press on save shipping info button</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h3 class="text-center">Shipping Form </h3>
        <hr/>
        <div class="well box box-primary">
            <form action="{{ url('/checkout/save-shipping')}}" method="POST" name="shippingForm">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" name="fullName" value="{{ $customerById->firstName.' '.$customerById->lastName}}" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" value="{{ $customerById->emailAddress }}" name="emailAddress" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea name="address" class="form-control" placeholder="Enter Address">{{ $customerById->address }}</textarea>
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" name="phoneNumber" value="{{ $customerById->phoneNumber }}" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>Dist. Name</label>
                    <select class="form-control" name="districtName">
                        <option>---Select District Name---</option>
	                        <option value="Dhaka">Dhaka</option>
	                        <option value="nar">Narayanganj</option>
	                        <option value="Savar">Savar</option>
	                        <option value="Barisal">Barisal</option>
	                        <option value="Gazipur">Gazipur</option>
	                        <option value="Sirajgonj">Sirajgonj</option>
	                        <option value="Bogra">Bogra</option>
	                        <option value="Jamalpur">Jamalpur</option>
	                        <option value="Comilla">Comilla</option>
	                        <option value="Chandpur">Chandpur</option>
	                        <option value="Dinajpur">Dinajpur</option>
	                        <option value="CoxsBazar">Cox’s Bazar	</option>
	                        <option value="Nilfamari">Nilfamari</option>
	                        <option value="Netrokona">Netrokona</option>
	                        <option value="Natore">Natore</option>
	                        <option value="Meherpur">Meherpur</option>
	                        <option value="Narshingdi">Narshingdi</option>
	                        <option value="Madaripur">Madaripur</option>
	                        <option value="Kurigram">Kurigram</option>
	                        <option value="Kishoregonj">Kishoregonj</option>
	                        <option value="Shariatpur">Shariatpur</option>
	                        <option value="Sherpur">Sherpur</option>
	                        <option value="Shrimongal">Shrimongal</option>
	                        <option value="Sunamgonj">Sunamgonj</option>
	                        <option value="Sylhet">Sylhet</option>
	                        <option value="Tangail">Tangail</option>
	                        <option value="Thakurgaon">Thakurgaon</option>
                    </select>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block">Save Shipping Info</button>
            </div>
           </form>
        </div>
    </div>
</div>
</div>
    <script>
        document.forms['shippingForm'].elements['districtName'].value ='{{ $customerById->districtName }}';
    </script>

@endsection