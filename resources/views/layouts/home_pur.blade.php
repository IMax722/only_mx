<html>
	<head>
		<title>ONLY-MX Менеджер по закупкам</title>
		<link rel="stylesheet" href="{{asset('css/ONLY-MX_lk_pur.man.css') }}">
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

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Заявки на сотрудничество</h5></span></nav>

		<div class="container table">
			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
					    		<th>#</th>
					    		<th>Имя</th>
					    		<th>Компания</th>
					    		<th>Телефон</th>
					    		<th>Email</th>
					    		<th>Сопроводительный текст</th>
					    		<th>Вложение</th>
					    		<th>Статус</th>
							</tr>
						</thead>
						<tbody>
							<tr>
					    		<th scope="row">1</th>
					    		<td>Алексей</td>
					    		<td>ТК "Авторитет"</td>
					    		<td>89501234567</td>
					    		<td>authority@mail.ru</td>
					    		<td>Прошу рассмотреть коммерческое предложение. Файл со всеми подробностями прикрепляю.</td>
					    		<td>*файл*</td>
					    		<td>
						    		<div class="form-group">
										<select class="form-control">
											<option>Ожидает ответа</option>
											<option>На рассмотрении</option>
											<option>На согласовании</option>
											<option>Отклонено</option>
										</select>
									</div>
								</td>
							</tr>
					    	<tr>
					    		<th scope="row">2</th>
					    		<td>Виктор</td>
					    		<td>Логистика+</td>
					    		<td>89689876543</td>
					    		<td>logistika_plus@gmail.com</td>
					    		<td>Давайте посотрудничаем!</td>
					    		<td>*файл*</td>
					    		<td>
					    			<div class="form-group">
										<select class="form-control">
											<option>Ожидает ответа</option>
											<option>На рассмотрении</option>
											<option>На согласовании</option>
											<option>Отклонено</option>
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