<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<!--css-->

<link href="{{ asset('forntEnd/css/bootstrap.css')}} " rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('forntEnd/css/style.css')}} " rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('forntEnd/css/table.css')}} " rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('forntEnd/css/font-awesome.css')}} " rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('forntEnd/')}}/css/jquery-ui.css">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }</script>
<script src="{{ asset('forntEnd/js/jquery.min.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>

<script src="{{ asset('forntEnd/js/main.js')}}"></script>
<script src="{{ asset('forntEnd/js/responsiveslides.min.js')}}"></script>
<script defer src="{{ asset('forntEnd/js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{ asset('forntEnd/css/flexslider.css')}}" type="text/css" media="screen" />
 
<script src="{{ asset('forntEnd/js/imagezoom.js')}}"></script>
<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<script src="{{ asset('forntEnd/js/jstarbox.js')}}"></script>

 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
<script type="text/javascript" src="{{ asset('forntEnd/js/bootstrap-3.1.1.min.js')}}"></script>
<script src="{{ asset('forntEnd/js/simpleCart.min.js')}}"></script>
	<link rel="stylesheet" href="{{ asset('forntEnd/css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
<link href="{{ asset('forntEnd/')}}/css/owl.carousel.css" rel="stylesheet">
<script src="{{ asset('forntEnd/')}}/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>

</head>
<body>
	<!--header-->
		@include('frontEnd.includes.header')
		<!--header-->
		<!--content-->
		@yield('mainContent')
		<!--content-->
		<!--footer-->
		@include('frontEnd.includes.footer')
		<!--footer-->
		

</body>
</html>