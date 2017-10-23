@extends('frontEnd.master')
@section('title', 'B2C shop - Login Registration form ')
@section('mainContent')
<hr/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div style="color: #1BA160;" class="well lead text-center">You have to login to complete your valuable order. If you are not registered then please Sign Up first.</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

    <div class="col-lg-6">
        <h3 class="text-center">Registration Form Here</h3>
        <hr/>
        <h4 class="text-center">{{ Session::get('message') }}</h4>
        <div class="well box box-primary">
            <form action="{{url('/checkout/sign-up')}}" method="POST">
            {{ csrf_field() }}
	            <div class="box-body">
	                <div class="form-group">
	                    <label for="exampleInputEmail1">First Name</label>
	                    <input type="text" name="firstName" class="form-control" placeholder="First Name">
	                    <span class="text-danger">{{ $errors->has('firstName') ? $errors->first('firstName'):''}}</span>
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Last Name</label>
	                    <input type="text" name="lastName" class="form-control" placeholder="Last Name">
	                    <span class="text-danger">{{ $errors->has('lastName') ? $errors->first('lastName'):''}}</span>
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Email Address</label>
	                    <input type="email" name="emailAddress" class="form-control" placeholder="Email Address">
	                    <span class="text-danger">{{ $errors->has('emailAddress') ? $errors->first('emailAddress'):''}}</span>
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputPassword1">Password</label>
	                    <input type="password" name="password" class="form-control" placeholder="Password">
	                    <span class="text-danger">{{ $errors->has('password') ? $errors->first('password'):''}}</span>
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Address</label>
	                    <textarea name="address" class="form-control" placeholder="Enter Address"></textarea>
	                </div>
	                 <div class="form-group">
	                    <label for="exampleInputEmail1">Phone Number</label>
	                    <input type="number" name="phoneNumber" class="form-control" placeholder="Enter Phone Number">
	                    <span class="text-danger">{{ $errors->has('phoneNumber') ? $errors->first('phoneNumber'):''}}</span>
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
	                <button type="submit" class="btn btn-success btn-block">Submit</button>
	            </div>
            </form>
        </div>
    </div>

    <div class="col-lg-6">
    	
        <h3 class="text-center">Login Form Here</h3>
        <hr/>
        <div class="well box box-primary">


            <form action="{{ url('/customer/login')}}" method="POST">
            {{ csrf_field() }}
	            <div class="box-body">
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Email Address</label>
	                    <input type="email" name="emailAddress" class="form-control" placeholder="Email Address">
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputPassword1">Password</label>
	                    <input type="password" name="password" class="form-control" placeholder="Password">
	                </div>
		            <div class="box-footer">
		                <button type="submit" class="btn btn-success btn-block">Submit</button>
		            </div>
		        </div>

           </form>
        </div>
        <h3 class="text-center">
        	<span class="text-danger">{{ Session::get('massege') }}</span>
        </h3>
    </div> 

</div>
</div>
@endsection