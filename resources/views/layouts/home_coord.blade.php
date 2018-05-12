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
		<form method="POST" action="/updateorder">
								{{ csrf_field() }}<div class="row">
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
							<div class="form-group">
										<select name="status" class="form-control">
											<option>В процессе выполнения</option>
											<option>Выполнено</option>
										</select>
									</div>
								<input name="id" type="text">
								<input type="submit" class="btn btn-primary" style="margin-right: 1px;">	
						</thead>
						<tbody>
							@foreach ($orders as $order)
							<tr>
								<th scope="row">{{ $order->id }}</th>
					    		<td>{{ $order->sender }}</td>
					    		<td>{{ $order->lol1 }}</td>
					    		<td>{{ $order->phone1 }}</td>
					    		<td>{{ $order->type }}</td>
					    		<td>{{ $order->am }}</td>
					    		<td>{{ $order->taker }}</td>
								<td>{{ $order->lol2 }}</td>
								<td>{{ $order->phone2 }}</td>
								<td>{{ $order->status }}</td>
							</tr>
							@endforeach
								</td>
					    	</tr>
							
						</tbody>
					</table>	
				</div>
			</div>
		</form>
		</div>
	</body>
</html>