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
		
		</nav>

		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Отзывы клиентов</h5></span></nav>

		<div class="container table">
		<form method="POST" action="/updateremark">
								{{ csrf_field() }}
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
								@foreach ($remarks as $remark)					    		
								<th name="id" scope="row">{{ $remark->id }}</th>
					    		<td>{{ $remark->name }}</td>
								<td>{{ $remark->problem }}</td>
								<td>{{ $remark->phone }}</td>
								<td>{{ $remark->email }}</td>
								<td>{{ $remark->sender }}</td>
								<td>{{ $remark->number }}</td>
								<td>{{ $remark->comment }}</td>
								<td>{{ $remark->status }}</td>
					    		<td>
								</td>
							</tr>
					    	@endforeach
						</tbody>
					</table>	
						    		<div class="form-group">
										<select name="status" class="form-control">
											<option>Ожидает ответа</option>
											<option>В работе</option>
											<option>Рассмотрено</option>
										</select>
									</div>
									<input name="id" type="text">
								<input type="submit" class="btn btn-primary" style="margin-right: 1px;">
				</div>
			</div>
		</form>
		</div>
	</body>
</html>