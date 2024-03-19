<html>
	<head>
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<title>@yield('title')</title>
		<meta name="description" content="Жалуйтесь на нарушения ПДД на официальном информационном портале ГИБДД Нарушениям.Нет. Ваше обращение будет быстро рассмотрено и принято в работу компетентными сотрудниками дорожно-постовой службы."/>
		<meta name="keywords" content="ПДД,нарушения,жалоба,ГИБДД,парковка,авария" />
	</head>
	<body class="container-fluid">
			<div class="row header">
				<nav class="navbar navbar-light bg-light">
					<div class="container-fluid">
						<a href="{{ route('index') }}" class="navbar-brand me-auto">Нарушениям.Нет</a>
						@guest
						<a href="{{ route('register') }}" class="nav-item nav-link">Регистрация</a>
						<a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
						@endguest
						@auth
						<a href="{{ route('home') }}" class="nav-item nav-link">Мои заявления</a>
							<form action="{{ route('logout') }}" method="POST" class="form-inline">
								@csrf
							<input type="submit" class="btn btn-danger" style="margin-top: 20px" value="Выход"/>
						</form>
						@endauth
					</div>
				</nav>
			</div>
			<div class="container content">
				@yield('content')
			</div>
			<div class="footer">
				<div class="col">
					<p>Петунин Иван Евгеньевич 2024</p>
				</div>
			</div>
	</body>
</html>