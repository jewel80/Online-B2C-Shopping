@extends('frontEnd.master')
@section('title', 'B2C shop - Contact Us')
@section('mainContent')
<hr>
<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="{{url('/')}}">Home</a> / <span>Mail Us</span></h3>
			</div>
		</div>
		<!--banner--><br><br><hr>
	<h2 class="text-center"><span class=" text-success">{{ Session::get('message') }}</span></h2>
	
		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">Contact Us</h2>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
										<h5>Address</h5>
										<p>9th floor - Palace Building - Dhaka - Bangladesh</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
										<h5>Phone</h5>
										<p>Telephone:  +1 800 603 6035</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5>E-mail</h5>
										<p>E-mail:<a href="mailto:example@mail.com"> example@mail.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="map-w3">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d673607.6340751307!2d-104.44001811743372!3d48.738351336759585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5321f600f5170943%3A0x94f2e8e71e1dfc7a!2sE+Comertown+Rd%2C+Westby%2C+MT+59275%2C+USA!5e0!3m2!1sen!2sin!4v1467080368135"  allowfullscreen></iframe>
								</div>
								<div class="mail-bottom">
									<h4>Get In Touch With Us</h4>
									<form action="{{url('mail-us/save')}}" method="post">
										{{ csrf_field() }}
										<input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
										<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
										<input type="text" value="Telephone" name="telephon" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
										<textarea name="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
										<input type="submit" value="Submit" >
										<input type="reset" value="Clear" >

									</form>
								</div>
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->
@endsection