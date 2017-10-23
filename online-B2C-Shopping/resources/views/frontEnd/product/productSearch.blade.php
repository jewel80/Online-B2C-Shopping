@extends('frontEnd.master')
@section('title', 'B2C shop - Product Searching Page')
@section('mainContent')

	
<div class="content">
			
			
			
			
			<!--Real dynamic Products-->
				<div class="product-agile">
					<div class="container">
						<h3 class="tittle1"> Searching products....</h3>
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
																	<!-- <img  src="{{asset($product->productImage)}}" class="img-responsive" pro-image-front  alt="" width="200" height="200"> -->
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

