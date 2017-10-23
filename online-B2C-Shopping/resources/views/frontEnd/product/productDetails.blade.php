@extends('frontEnd.master')
@section('title', 'B2C shop - Product Details')
@section('mainContent')
		<div class="banner1">
			<div class="container">
				<h3><a href="{{ url('/')}}">Home</a> / <span>Single</span></h3>
			</div>
		</div>
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-9 single-grid">
							<div clas="single-top">
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="images/si.jpg">
												<div class="thumb-image"> <img src="{{ asset($products->productImage)}}" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<h4>{{ $products->productName}}</h4>
									<p class="price item_price">Price: {{ $products->productPrice}} TK</p>
									
									<form action="{{ url('/cart/add')}}" method="POST">
									 {{ csrf_field() }}
										<div>
											<h4 class="price item_price">Quality :</h4>
											<input type="number" name="qty" value="1" min="1" class="form-control">
											<input type="hidden" name="productId" value="{{ $products->id }}"> 
										</div><br>
										<div class="women">
											<button type="submit" class="my-cart-b item_add">Add to cart</button>
										</div>
									</form>

								</div>
								<div class="clearfix"> </div>
							</div>
						</div>

						<div class="col-md-3 single-grid1">
							<h3>Products Description</h3>
							<div class="recent-grids">
								<div class="recent-right">
									{{ $products->productLongDescription}}
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h3 class="">Product Video</h3><br>
					<p><iframe src="https://www.youtube.com/embed/D8Ert5yjMV4" width="400" height="350" frameborder="0" allowfullscreen=""></iframe></p>
				</div>
			</div>
		</div>
@endsection
<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/D8Ert5yjMV4" frameborder="0" allowfullscreen></iframe> -->