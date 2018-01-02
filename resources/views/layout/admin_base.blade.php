<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{URL::asset("css/base.css")}}">
	<link rel="stylesheet" href="{{URL::asset("css/lightweight.min.css")}}">
	<link rel="stylesheet" href="{{URL::asset("css/custom.css")}}">
</head>

<body>
	<nav role="header" class="site__header header" id="home">
		<div class="header__wrapper">

			<div class="header__brand">
				<img src="./images/brand.png" />
				<div class="header__title">
					Support-System
				</div>
			</div>

			<div class="header__account account account--has-login">
				<div class="account__wrapper">
					<img class="account__img" src="./images/irfan-maulana.jpg" />
					<span class="account__name">{{ Auth::user()->name }}</span>
				</div>
				<i class="account__arrow fa fa-angle-down js--show-dropdown-menu"></i>

				<div class="account__menu">
					<ul class="account__menu-wrapper">
						<li class="account__menu-item">
							<a href="#profil">Profile</a>
						</li>
						<li class="account__menu-item">
							<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
									Logout
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</div>

			</div>

			<div class="header__nav--mobile">
				<div class="header__nav-btn" id="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

		</div>
	</nav>
	<main role="main" class="site__main main">
		<nav class="main__nav nav">

			<ul class="nav__wrapper">
				<li class="nav__item nav__item--active">
					<a href="index.html">
						<i class="nav__icon fa fa-dashboard"></i> Dashboard
					</a>
				</li>
				<li class="nav__item">
					<a href="">
						<i class="nav__icon fa fa-dashboard"></i> Pending
					</a>
				</li>
				<li class="nav__item">
					<a href="index.html">
						<i class="nav__icon fa fa-dashboard"></i> Opened
					</a>
				</li>
				<li class="nav__item">
					<a href="index.html">
						<i class="nav__icon fa fa-dashboard"></i> Closed
					</a>
				</li>

			</ul>

			<div class="footer__wrapper">



				<ul class="footer__list">
					<li class="footer__icon footer__icon--facebook">
						<a rel="nofollow" href="https://www.facebook.com/mazipanneh">
							<i class="fa fa-facebook-square"></i>
						</a>
					</li>
					<li class="footer__icon footer__icon--twitter">
						<a rel="nofollow" href="https://twitter.com/Maz_Ipan">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="footer__icon footer__icon--instagram">
						<a rel="nofollow" href="https://instagram.com/maz_ipan">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li class="footer__icon footer__icon--linkedin">
						<a rel="nofollow" href="https://id.linkedin.com/in/irfanmaulanamazipan">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
					<li class="footer__icon footer__icon--slideshare">
						<a rel="nofollow" href="https://www.slideshare.net/IrfanMaulana21">
							<i class="fa fa-slideshare"></i>
						</a>
					</li>
					<li class="footer__icon footer__icon--github">
						<a rel="nofollow" href="https://github.com/mazipan">
							<i class="fa fa-github"></i>
						</a>
					</li>
					<li class="footer__icon footer__icon--wordpress">
						<a rel="nofollow" href="https://mazipanneh.wordpress.com/">
							<i class="fa fa-wordpress"></i>
						</a>
					</li>
					<li class="footer__icon footer__icon--paypal">
						<a rel="nofollow" href="https://www.paypal.me/mazipan">
							<i class="fa fa-paypal"></i>
						</a>
					</li>
				</ul>
			</div>

		</nav>

		@yield('content')
	</main>
	<script src="{{URL::asset("js/base.min.js")}}"></script>
	<script src="{{URL::asset("js/lightweight.min.js")}}"></script>


</body>

</html>
