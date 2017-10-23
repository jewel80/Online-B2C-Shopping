@extends('frontEnd.master')
@section('title', 'Online B2C Shopping Automotion')
@section('mainContent')

<div class="banner-w3">
			<div class="demo-1">            
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">
							<div class="core-slider_item">
								<img src="{{asset('forntEnd/images/b1.jpg')}}" class="img-responsive" alt="">
							</div>
							 <div class="core-slider_item">
								 <img src="{{asset('forntEnd/images/b2.jpg')}}" class="img-responsive" alt="">
							 </div>
							<div class="core-slider_item">
								  <img src="{{asset('forntEnd/images/b3.jpg')}}" class="img-responsive" alt="">
							</div>
							<div class="core-slider_item">
								  <img src="{{asset('forntEnd/images/b4.jpg')}}" class="img-responsive" alt="">
							</div>
							<div class="core-slider_item">
								  <img src="{{asset('forntEnd/images/b5.jpg')}}" class="img-responsive" alt="">
							</div>
						 </div>
					</div>
					<div class="core-slider_nav">
						<div class="core-slider_arrow core-slider_arrow__right"></div>
						<div class="core-slider_arrow core-slider_arrow__left"></div>
					</div>
					<div class="core-slider_control-nav"></div>
				</div>
			</div>
			<link href="{{asset('forntEnd/css/coreSlider.css')}}" rel="stylesheet" type="text/css">
			<script src="{{asset('forntEnd/js/coreSlider.js')}}"></script>
			<script>
			$('#example1').coreSlider({
			  pauseOnHover: false,
			  interval: 3000,
			  controlNavEnabled: true
			});

			</script>

		</div>	
<div class="content">
			
			<!--Latest Products-->
			<div class="latest-w3">
				<div class="container">
					<h3 class="tittle1">Latest Product </h3>
					<div class="latest-grids">
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('forntEnd/images/a1.jpg')}}" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Headphone</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-50%</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('forntEnd/images/.jpg')}}" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Mobile</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-20%</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('forntEnd/images/a3.jpg')}}" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Computer</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-50%</h4>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					
				</div>
			</div>
			
			<!--Real dynamic Products-->
				<div class="product-agile">
					<div class="container">
						<h3 class="tittle1"> New Products</h3>
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>
										<div class="caption">
										@foreach($products as $product)	 
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="{{url('/product/details/'.$product->id)}}">
																<div class="grid-img">
																	

																	<img src="{{ asset($product->productImage) }}" alt="" class="" height="200" width="200">
																</div>
																<div class="grid-img">
																	<img src="{{ asset($product->productImage) }}" alt="" class="" height="200" width="200">
																</div>			
															</a>		
														</figure>	
													</div>
													<div class="women">
														<h6><a href="{{url('/product/details/'.$product->id)}}">{{ $product->productName }}</a></h6>
														<p ><em class="item_price">BDT. {{ $product->productPrice }}</em></p>

														<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
														
													</div>
												</div><br>
											</div>
											@endforeach

										</div><br>
									</li>
								</ul>
							</div>
							{{ $products->links() }}
						</div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
@endsection

