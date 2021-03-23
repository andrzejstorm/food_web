<!DOCTYPE html>
<html lang="en">
<head>
<title>RestaurantAPP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="{{asset('css/reset.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('css/layout.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('css/zerogrid.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" media="all"> 
<link rel="stylesheet" href="{{asset('css/responsiveslides.css')}}" /> 
<script type="text/javascript" src="{{asset('js/jquery-1.6.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cufon-replace.js')}}"></script>  
<script type="text/javascript" src="{{asset('js/Forum_400.font.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tms-0.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tms_presets.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/atooltip.jquery.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/css3-mediaqueries.js')}}"></script>
<script src="{{asset('js/responsiveslides.js')}}"></script>
<script>
	$(function () {
	  $("#slidez").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		maxwidth: 960,
		namespace: "centered-btns"
	  });
	});
</script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
<!-- header -->
				<header>
					<h1><a href="index.html" id="logo"><img src="images/logo.png"/></a></h1>
					<nav>
						<ul id="top_nav">
							<li><a href="index.html"><img src="images/icon_1.gif" alt=""></a></li>
							<li><a href="#"><img src="images/icon_2.gif" alt=""></a></li>
							<li class="end"><a href="Contacts.html"><img src="images/icon_3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li class="active"><a href="{{route('home')}}">Restaurant</a></li>
							<li><a href="{{route('cuisine')}}">Cuisine</a></li>
							<li><a href="{{route('wine')}}">Wine List</a></li>
							<li><a href="{{route('cookbook')}}">CookBook</a></li>
							<li><a href="{{route('contact')}}">Contacts</a></li>
						</ul>
					</nav>
				</header>
<!-- / header -->

@yield('content')

<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col-2-3"><div class="wrap-col">
						<h3>Reservations: <span>1-800 123 45 67</span></h3>
						<!-- Designed by <a rel="nofollow" href="http://www.TemplateMonster.com/" target="_blank">TemplateMonster</a> | <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a> -->
					</div></section>
					<section class="col-1-3"><div class="wrap-col">
						<h3>Follow Us </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon4.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Technorati"><img src="images/icon5.gif" alt=""></a></li>
						</ul>
					</div></section>
				</div>
				<!-- {%FOOTER_LINK} -->
			</footer>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>