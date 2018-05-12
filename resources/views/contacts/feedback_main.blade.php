<html>
	<head>
		<title>ONLY-MX Услуги</title>
		<link rel="stylesheet" href="{{asset('css/ONLY-MX_contacts.css') }}" >
		<link rel="stylesheet" href="{{asset('/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script type="text/javascript" src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
		<script src="{{ asset('/js/buttonup.js') }}"></script>
	</head>
	<body>
		<header id="header">
			<div class="container-fluid">
			  <div class="row">
			  	<div class="col-12">
			  		<i class="fa fa-phone" aria-hidden="true"></i>
			  		<div class="hdr">8 (495) 772-95-90</div>
			  		<i class="fa fa-map-marker" aria-hidden="true"></i>
			  		<div class="hdr">Москва, Таллинская ул., д. 34</div>
			  		<i class="fa fa-envelope-o" aria-hidden="true"></i>
			  		<div class="hdr">miem@hse.ru</div>
			  	</div>
			  </div>
			</div>
		</header>

		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
		  	<a class="navbar-brand" href="/">ONLY-MX</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
			      <li class="nav-item active"><a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#">О нас</a></li>
					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" href="/services" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
					    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						    <a class="dropdown-item" href="/services">Грузоперевозки</a>
						    <a class="dropdown-item" href="/services">Упаковка грузов</a>
						    <a class="dropdown-item" href="/services">Консолидация и хранение</a>
						    <a class="dropdown-item" href="/services">Страхование грузов</a>
					    </div>
					</li>
					<li class="nav-item"><a class="nav-link" href="#">Тарифы</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Расчет</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Отзывы</a></li>
					<li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Новости</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Онлайн заказ</a></li>
					<li class="nav-item"><a class="nav-link" href="/contacts">Обратная связь</a></li>
			    </ul>
			    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a></li>
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
                    </ul>
		  	</div>
		</nav>
		
		@section('feedback_form')
			
		@show
					
            @yield('content')
			
				<div class="card">
		    	<div class="card-header" role="tab" id="headingTwo">
		    		<h5 class="mb-0">
		        		<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Email консультант</a>
		    		</h5>
		    	</div>
		    	<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
								<form method="post" action="/emailfeedback">
								{{ csrf_field() }}
			    	<div class="card-block">
			    		<div class="container forms">
							<div class="row">
								<div class="col-md-12">
									<p align="justify">Для консультации по электронной почте заполните форму, отправьте запрос и ждите ответа.</p>
									<p align="justify">Консультанты сервиса «Email консультант» обязательно ответят на ваш вопрос в течение 1 часа после отправки запроса. Сервис предоставляется в рабочие дни с 9:00 до 18:00 часов по московскому времени.</p>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <input name="name"type="text" class="form-control" id="usr" placeholder="Имя">
									</div>
								</div>
  								<div class="col-md-6">
									<div class="form-group">
									  <input name="email"type="email" class="form-control" id="mail" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="body" class="form-control" type="text" rows="5" id="comment" placeholder="Текст вопроса"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<p align="justify">Нажимая кнопку «Отправить», вы даете согласие на обработку ваших персональных данных в соответствии с Политикой конфиденциальности.</p>
								</div>
								<input type="submit" class="btn btn-primary" style="margin-left: 15px;">
							</div>
						</div>
			    	</div>
		    	</div>
			</div>
</form>

			<div class="card">
			    <div class="card-header" role="tab" id="headingThree">
					<h5 class="mb-0">
			        	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Пожелания и замечания</a>
			    	</h5>
			    </div>
			    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
				<form method="post" action="/remark">
								{{ csrf_field() }}
			    	<div class="card-block">
			    		<div class="container forms">
							<div class="row">
								<div class="col-md-12">
									<p align="justify">В этом разделе вы можете оставить свои пожелания и замечания о работе компании и качестве предоставляемых услуг.</p>
									<p align="justify">Мы ценим своих клиентов и дорожим мнением каждого из вас, поэтому мы постараемся учесть все ваши пожелания, и ни одно из ваших замечаний не останется без внимания.</p>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <input name="name" type="text" class="form-control" id="usr" placeholder="Имя">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <select name="problem" class="form-control" id="exampleSelect1">
										    <option>Проблемы с перевозкой</option>
										    <option>Проблемы с грузом</option>
										    <option>Документы</option>
										    <option>Проблемы с сайтом</option>
										    <option>Некорректное отношение</option>
										    <option>Другое</option>
									    </select>
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
								<div class="col-md-6">
									<div class="form-group">
									    <select name="sender" class="form-control" id="exampleSelect2">
										    <option>Отправитель</option>
										    <option>Получатель</option>
										    <option>Третье лицо</option>
									    </select>
									</div>						
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <input name="number" type="text" class="form-control" id="number" placeholder="Номер квитанции/заявки">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="comment" class="form-control" rows="5" id="comment" placeholder="Текст сообщения"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<p align="justify">Нажимая кнопку «Отправить», вы даете согласие на обработку ваших персональных данных в соответствии с Политикой конфиденциальности.</p>
								</div>
								<input type="submit" class="btn btn-primary" style="margin-left: 15px;">
							</div>
						</div>
			    	</div>
			    </div>
			</div>
		</form>

			<div class="card">
		    	<div class="card-header" role="tab" id="headingFour">
		    		<h5 class="mb-0">
		        		<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Предложения о сотрудничестве</a>
		    		</h5>
		    	</div>
		    	<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
				<form method="post" action="/coop">
								{{ csrf_field() }}
					<div class="card-block">
			    		<div class="container forms">
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
									  <input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон">
									<div class="form-group">
									</div>
								</div>
  								<div class="col-md-6">
									  <input name="email" type="email" class="form-control" id="mail" placeholder="Email">
									<div class="form-group">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="comment" class="form-control" rows="5" id="comment" placeholder="Сопроводительный текст"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<p align="justify">Нажимая кнопку «Отправить», вы даете согласие на обработку ваших персональных данных в соответствии с Политикой конфиденциальности.</p>
								</div>
								<input type="submit" class="btn btn-primary" style="margin-left: 15px;">
							</div>
						</div>
			    	</div>
		    	</div>
			</div>
		</div>
		</form>

		<footer><center>Алла Кравченко © 2017 ONLY-MX</center></footer>
	</body>
</html>