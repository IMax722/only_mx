<html>
	<head>
		<title>ONLY-MX Руководитель отдела сервиса</title>
		<link rel="stylesheet" href="{{asset('css/ONLY-MX_lk_head.serv.css') }}">
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
		</nav>

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Отзывы клиентов</h5></span></nav>

		<div class="container table">
			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
					    		<th>#</th>
					    		<th>Имя</th>
					    		<th>Тема</th>
					    		<th>Телефон</th>
					    		<th>Email</th>
					    		<th>Лицо</th>
					    		<th>Заявка</th>
					    		<th>Сообщение</th>
					    		<th>Статус</th>
							</tr>
						</thead>
						<tbody>
							<tr>
					    		<th scope="row">1</th>
					    		<td>Ольга</td>
					    		<td>Некорректное отношение</td>
					    		<td>89511928374</td>
					    		<td>olga.s.k@mail.ru</td>
					    		<td>Третье лицо</td>
					    		<td></td>
								<td>Здравствуйте! Звонила сегодня по телефону горячей линии. Консультант Светлана грубит, не дает четких ответов на вопросы! Разберитесь, пожалуйста! Сотрудников надо обучать!</td>
					    		<td>
						    		<div class="form-group">
										<select class="form-control">
											<option>Ожидает ответа</option>
											<option>В работе</option>
											<option>Рассмотрено</option>
										</select>
									</div>
								</td>
							</tr>
					    	<tr>
					    		<th scope="row">2</th>
					    		<td>Антон</td>
					    		<td>Другое</td>
					    		<td>89120901234</td>
					    		<td>anton_67@mail.ru</td>
					    		<td>Отправитель</td>
					    		<td>123456789</td>
								<td>Добрый день! Хочу выразить огромную благодарность вашей компании. Заказывал перевозку бытовой техники и мебели из квартиры загород. Машину подали вовремя, помогли с погрузкой и разгрузкой. Буду советовать вас знакомым! Спасибо!</td>
					    		<td>
						    		<div class="form-group">
										<select class="form-control">
											<option>Ожидает ответа</option>
											<option>В работе</option>
											<option>Рассмотрено</option>
										</select>
									</div>
								</td>
					    	</tr>
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</body>
</html>