
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="title" content="@yield('title')" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="2 days">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="{{ asset('js/bootstrap/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('js/toastr/toastr.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<script src="{{ asset('js/jquery/jquery.js') }}" ></script>
	<script src="{{ asset('js/bootstrap/bootstrap.js') }}" ></script>
	<script src="{{ asset('js/toastr/toastr.js') }}" ></script>
	<script src="https://kit.fontawesome.com/6a4e5ddf0a.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
	<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
	<script src="https://yastatic.net/share2/share.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=64c5ef00-3532-4089-8af6-0c1c153f8391&lang=ru_RU" type="text/javascript"></script>

	<script src="{{ asset('js/app.js') }}" defer></script>
	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>
</head>

<body class='d-flex flex-column min-vh-100 bg-light'>
	<div id="app">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			  	<a class="navbar-brand" href="#">
					<img class="_1n3zp94" src="https://s91588.cdn.ngenix.net/shared/static/images/design-system/sravni-logo-sign.png" alt="logo" width="35" height="35">
				</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="{{ url('/') }}"> Каталог </a>
				  </li>
				  <li class="nav-item">
						<a class="nav-link text-nowrap" aria-current="page" href="{{ url('/map/borehole/show') }}"> Карта скважин </a>
				  </li>
				  <!--li class="nav-item">
					<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#marketologModal">Маркетологам </a>
				  </li-->	
				  <li class="nav-item text-nowrap">
					<a class="nav-link text-nowrap" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">О нас</a>
				  </li>	
				  <li class="nav-item">
					<a class="nav-link" href="#block-contacts">Контакты </a>
				  </li>
				</ul>

				<form class="d-flex">
					
					@if (backpack_auth()->guest())
						<a class=" nav-item btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Войти</a>
					@endif
					@if (backpack_auth()->check())
						@php
							$user = backpack_auth()->user();
						@endphp

						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									{{ backpack_user()->name }}
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									@if ($user->hasRole('Пользователь') == true)

										<li><a class="dropdown-item" href="{{ url('/lk/user')}}">Личный кабинет </a></li> <!-- Пользователя -->

									@elseif ($user->hasRole('Подрядчик') == true)

										<li><a class="dropdown-item" href="{{ url('/lk/contractor')}}">Личный кабинет </a></li> <!-- Подрядчика -->

									@elseif ($user->hasRole('Администратор') == true)

										<li><a class="dropdown-item" href="{{ url('/admin/dashboard')}}">Личный кабинет </a></li> <!-- Админа -->

									@endif
									
									<li><a class="dropdown-item" href="#"></a></li>
									<li><hr class="dropdown-divider"></li>
									<li>
										<a class="dropdown-item" href="/auth/logout" >Выйти из аккаунта</a>
									</li>
								</ul>
							</li>
						</ul>
					@endif
				</form>
			  </div>
			</div>
		  </nav>
	</div>

	<br>

	@yield('content')

	@include('modal.about')
	@include('modal.marketolog')
	@include('modal.feedback')
	@include('modal.register')
	@include('modal.login')
	@include('modal.order')

	<div class="container">
		<footer class="row row-cols-5 py-5 my-5 border-top">
		  <!--div class="col">
			<a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
			  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
			</a>
			<p class="text-muted">© 2023</p>
		  </div-->
	  

		  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
			<h5>О проекте</h5>
			<ul class="nav flex-column">
			  <li class="nav-item mb-2"><a href="{{ url('/user-agreement')}}" class="nav-link p-0 text-muted">Пользовательское соглашение</a></li>
			  <li class="nav-item mb-2"><a href="{{ url('/privacy-policy')}}" class="nav-link p-0 text-muted">Политика конфиденциальности</a></li>
			  <li class="nav-item mb-2"><a href="{{ url('/offer')}}" class="nav-link p-0 text-muted">Оферта</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
			</ul>
		  </div>
	  
		  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
			<h5>Контакты</h5>
			<ul class="nav flex-column">
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
			</ul>
		  </div>
	  
		  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
			<h5>Для маркетологов</h5>
			<ul class="nav flex-column">
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
			  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
			</ul>
		  </div>
		</footer>
	  </div>


	@yield('before_scripts')

	@yield('after_scripts')

	<style>
		.header-baner-custom{
			margin-top:50px;
		}
		.for-header-baner-custom{

		}
		.nav-item{
			margin-left:8%;
			margin-top:10px;
		}
	</style>
</body>

</html>