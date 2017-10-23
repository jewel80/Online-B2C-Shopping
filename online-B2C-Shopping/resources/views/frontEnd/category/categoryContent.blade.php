@extends('frontEnd.master')
@section('title', 'B2C shop - Category Content')
@section('mainContent')
<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Products</span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<div class="products-agileinfo">
						<h2 class="tittle">Products</h2>
					<div class="container">
						<div class="product-agileinfo-grids w3l">
							<!-- <div class="col-md-3 product-agileinfo-grid">
								
							</div> -->
							
							
							
							<div class="col-md-12 product-agileinfon-grid1 w3l">
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
										<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="{{ asset('forntEnd/')}}/images/menu1.png"></a></li>
									
									</ul>
									
									
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
											<div class="product-tab">
											@foreach($productCategory as $productCategorys)	 
												<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="{{url('/product/details/'.$productCategorys->id)}}">
																	<div class="grid-img">
																		<img  src="{{ asset($productCategorys->productImage)}}" class="" alt="" height="200" width="200">
																	</div>
																	<div class="grid-img">
																		<img  src="{{ asset($productCategorys->productImage)}}" class="" alt="" height="200" width="200">
																	</div>			
																</a>		
															</figure>	
														</div>
														<div class="block">
															<div class="starbox small ghosting"> </div>
														</div>
														<div class="women">
															<h6><a href="{{url('/product/details/'.$productCategorys->id)}}">{{$productCategorys->productName}}</a></h6>
															<p ><em class="item_price">BDT. {{$productCategorys->productPrice}}</em></p>
															<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
														</div>
													</div><br>
												</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		<!--content-->
@endsection