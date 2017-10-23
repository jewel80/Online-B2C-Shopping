<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +880 1928-331238</a>
					</div>
					<div class="top-right">
					<ul>
						<li><a href="checkout.html"></a></li>
						<li><a href="{{ url('/checkout')}}"></a></li>
						<li><a href="{{ url('/checkout')}}">  </a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="{{url('/')}}">&nbsp;B2C Shop <span>automation</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 

							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{ url('/') }}" class="act">HOME</a></li>
									@foreach($categories as $categorys)
									<li class="dropdown">
										<a href="" class="dropdown-toggle" data-toggle="dropdown">{{ $categorys->categoryName }}<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-12">
													<ul class="multi-column-dropdown">
														@foreach($subcategory[$categorys->id] as $subcategorys)
														<li><a href="{{ url('/category-view/'.$subcategorys->id)}}"><strong>{{ $subcategorys->subcategoryName }}</strong></a></li>
														@endforeach
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>	
									@endforeach
								</ul>
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{ url('/mail-us') }}" class="act">CONTACT US</a></li>
								</ul>
							</div>
						</nav>
						</div>

						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search">
								<form action="{{url('/search')}}" method="POST">
									{{ csrf_field() }}
									<input name="q" type="search" placeholder="Search...">
								</form>
							</div>	
						</div>

						<div class="header-right2">
							<div class="cart box_1">
								
								<a href="{{ url('/cart/show') }}">
									<h3> <div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
										<img src="{{asset('forntEnd/images/bag.png')}}" alt="" />
									</h3>
								</a>

								<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>


