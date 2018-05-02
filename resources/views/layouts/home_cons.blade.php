<html>
	<head>
		<title>ONLY-MX Личный кабинет</title>
		<link rel="stylesheet" href="{{asset('css/ONLY-MX_lk_cons.css') }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script type="text/javascript" src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
		<script src="{{ asset('/js/buttonup.js') }}"></script>
	</head>
	<body>
	
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
		  	<a class="navbar-brand" href="/D:/ONLY-MX/ONLY-MX_main.html">ONLY-MX</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
			      <li class="nav-item active"><a class="nav-link" href="/D:/ONLY-MX/ONLY-MX_main.html">Главная<span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#">О нас</a></li>
					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
					    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#fs">Грузоперевозки</a>
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#ss">Упаковка грузов</a>
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#ts">Консолидация и хранение</a>
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#fos">Страхование грузов</a>
					    </div>
					</li>
					<li class="nav-item"><a class="nav-link" href="#">Тарифы</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Расчет</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Отзывы</a></li>
					<li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Новости</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Онлайн заказ</a></li>
					<li class="nav-item"><a class="nav-link" href="/D:/ONLY-MX/ONLY-MX_contacts.html">Обратная связь</a></li>
			    </ul>
				<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
			</div>
		</nav>

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Заявка на грузоперевозку</h5></span></nav>

		<div class="card-block">
			<div class="container forms">
				<div class="row">
					<div class="col-md-12">
						<p align="justify">Для заказа грузоперевозки заполните форму. Наши специалисты свяжутся с вами в ближайшее время для уточнения деталей.</p>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="usr1" placeholder="Отправитель">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="address1" placeholder="Откуда">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="phone" class="form-control" id="phone1" placeholder="Телефон">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="usr2" placeholder="Получатель">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="address2" placeholder="Куда">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="phone" class="form-control" id="phone2" placeholder="Телефон">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="form-control" id="transport">
								<option>сборный груз</option>
								<option>выделенный транспорт</option>
								<option>контейнер</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="quantity" placeholder="Количество">
						</div>
					</div>
					<div class="col-md-12">
						<p align="justify">Нажимая кнопку «Отправить», вы даете согласие на обработку ваших персональных данных в соответствии с Политикой конфиденциальности.</p>
					</div>
					<button type="submit" class="btn btn-primary" style="margin-left: 15px;">Отправить</button>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Мои заказы</h5></span></nav>

		<div class="container table">
			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
					    		<th>#</th>
					    		<th>ФИО получателя</th>
					    		<th>Адрес получателя</th>
					    		<th>Телефон получателя</th>
					    		<th>Статус</th>
							</tr>
						</thead>
						<tbody>
							<tr>
					    		<th scope="row">1</th>
					    		<td>Соловьев Константин Петрович</td>
								<td>Мытищи, ул.Индустриальная, д.7, к.1</td>
								<td>89045649320</td>
					    		<td>В обработке</td>
							</tr>
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</body>
</html>