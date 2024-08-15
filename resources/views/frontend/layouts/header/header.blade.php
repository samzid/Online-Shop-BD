
<!DOCTYPE HTML>
{{-- head section Start  --}}
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('frontend') }}/css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="{{ asset('frontend') }}/js/jquerymain.js"></script>
<script src="{{ asset('frontend') }}/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/nav.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/move-top.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/easing.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>

{{-- head section  End --}}


<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="{{ route('home') }}"><img src="{{ asset('frontend') }}/images/logo.png" alt="Online shop BD LOGO" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div>
		   <div class="login"><a href="{{ route('login') }}">Login</a></div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="{{ route('home') }}">Home</a></li>
	  <li><a href="{{ route('product') }}">Products</a> </li>
	  <li><a href="{{ route('top-brand') }}">Top Brands</a></li>
	  <li><a href="{{ route('cart') }}">Cart</a></li>
	  <li><a href="{{ route('contact') }}">Contact</a> </li>
	  <div class="clear"></div>
	</ul>
</div>
