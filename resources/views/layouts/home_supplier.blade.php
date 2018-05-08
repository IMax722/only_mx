<html>
	<head>
		<title>ONLY-MX Поставщик</title>
		<link rel="stylesheet" href="{{asset('css/ONLY-MX_lk_supplier.css') }}">
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
		  	<a class="navbar-brand" href="/D:/ONLY-MX/ONLY-MX_main.html">ONLY-MX Основной сайт</a>    
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
		</nav>

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Поставщикам</h5></span></nav>

		<div class="container text-about">
			<div class="row">
				<div class="col-9">
					<p align="justify">Компания «ONLY-MX» − это крупная компания, работающая на территории всей Московской области. Мы закупаем товары, необходимые для нашей деятельности, у лучших поставщиков. Мы заинтересованы в работе с самыми внимательными к нашим нуждам партнерами, готовыми выполнить наши требования эффективно и по оптимальной цене. Ниже приводится список регулярно приобретаемых нами товаров и актуальные тендеры, в которых могут принять участие все заинтересованные компании. Мы будем рады сотрудничеству с вами!</p>
				</div>
				<div class="col-3">
					<img class="img-fluid" src="images/tender.jpg">
				</div>
			</div>
		</div>	

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Потребности и тендеры</h5></span></nav>

		<div class="container table">
			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
					    		<th>Описание</th>
					    		<th>Контакты</th>
					    		<th>Период закупки</th>
					    		<th>Ориентировочная стоимость</th>
							</tr>
						</thead>
						<tbody>
							<tr>		    		
							@foreach ($needs as $need)
								<td>{{ $need->body }}</td>
								<td>{{ $need->contacts }}</td>
								<td>{{ $need->period }}</td>
								<td>{{ $need->cost }}</td>
								@endforeach
					    	</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Заявка на сотрудничество</h5></span></nav>

		<div class="card-block">
			<div class="container forms">
			<form method="POST" action="/supply">
			{{ csrf_field() }}
				<div class="row">
					<div class="col-md-12">
						<p align="justify">Хотите сотрудничать с нами? Мы будем рады рассмотреть ваше коммерческое предложение.</p>
						<p align="justify">Заполните простую форму и прикрепите коммерческое предложение. Оно должно содержать информацию с описанием продукта, ваши конкурентные преимущества и выгоду при сотрудничестве с вашей компанией. В случае заинтересованности коммерческим предложением с вами свяжется сотрудник компании.</p>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input name="name" type="text" class="form-control" id="usr" placeholder="Имя">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input name="company" type="text" class="form-control" id="company" placeholder="Компания">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон">
						</div>
					</div>
  					<div class="col-md-6">
						<div class="form-group">
							<input name="email" type="email" class="form-control" id="mail" placeholder="Email">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="comment" class="form-control" rows="5" id="comment" placeholder="Сопроводительный текст"></textarea>
						</div>
					</div>
					</div>
					<div class="col-md-12">
						<p align="justify">Нажимая кнопку «Отправить», вы даете согласие на обработку ваших персональных данных в соответствии с Политикой конфиденциальности.</p>
					</div>
					<input type="submit" class="btn btn-primary" style="margin-left: 15px;">
				</div>
			</div>
		</form>
		</div>
	</body>
</html>