<html>
	<head>
		<title>ONLY-MX Координатор перевозок</title>
		<link rel="stylesheet" href="{{asset('css/ONLY-MX_lk_coord.css') }}">
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

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Заявки клиентов</h5></span></nav>

		<div class="container table">
			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
					    		<th>#</th>
					    		<th>ФИО отправителя</th>
					    		<th>Адрес отправителя</th>
					    		<th>Телефон отправителя</th>
					    		<th>Способ перевозки</th>
					    		<th>Количество предметов</th>
					    		<th>ФИО получателя</th>
					    		<th>Адрес получателя</th>
					    		<th>Телефон получателя</th>
					    		<th>Статус</th>
							</tr>
						</thead>
						<tbody>
							<tr>
					    		<th scope="row">1</th>
					    		<td>Иванова Светлана Игоревна</td>
					    		<td>Одинцово, ул.Д.Давыдова, д.1</td>
					    		<td>89041230987</td>
					    		<td>сборный груз</td>
					    		<td>4</td>
					    		<td>Соловьев Константин Петрович</td>
								<td>Мытищи, ул.Индустриальная, д.7, к.1</td>
								<td>89045649320</td>
					    		<td>
						    		<div class="form-group">
										<select class="form-control">
											<option>Ожидает ответа</option>
											<option>В работе</option>
											<option>Выполнено</option>
										</select>
									</div>
								</td>
							</tr>
					    	<tr>
					    		<th scope="row">2</th>
					    		<td>Сидоров Антов Евгеньевич</td>
					    		<td>Орехово-Зуево, ул.Матросова, д.23</td>
					    		<td>89024601221</td>
					    		<td>выделенный транспорт</td>
					    		<td>12</td>
					    		<td>Карпов Николай Федорович</td>
								<td>Чехов, ул.Товарная, д.2</td>
								<td>89012340912</td>
					    		<td>
						    		<div class="form-group">
										<select class="form-control">
											<option>Ожидает ответа</option>
											<option>В работе</option>
											<option>Выполнено</option>
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