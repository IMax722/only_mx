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
		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Создание тендера компании</h5></span></nav>
		<div class="col-md-6">

									<div class="form-group">
									<form method="POST" action="/insertneed">
									{{ csrf_field() }}
										<input id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ old('body') }}" required autofocus Placeholder="Описание">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<input id="contacts" type="text" class="form-control" name="contacts" placeholder="Контакты">
									</div>						
								</div>				
								<div class="col-md-6">
									<div class="form-group">
									  <input id="period" type="text" class="form-control" name="period" placeholder="Период закупки">
									</div>
								</div>
  								<div class="col-md-6">
									<div class="form-group">
									  <input id="cost" type="text" class="form-control" name="cost" placeholder="Ориентировочная стоимость">
									</div>
								</div>
								<div class="col-md-12">
								</div>
								<button type="submit" class="btn btn-primary" style="margin-left: 15px;">Отправить</button>
							</div>
						</div>
					</div>      
			    </div>
					</form>
  			</div>
		<nav class="navbar navbar-light bg-light"><span class="navbar-text"><h5>Заявки на сотрудничество</h5></span></nav>

		<div class="container table">
		<form method="POST" action="/updatecoop">
									{{ csrf_field() }}
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
					    		<th>Статус</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($coops as $coop)
							<tr>
					    		<th scope="row">{{ $coop->id }}</th>
					    		<td>{{ $coop->name }}</td>
					    		<td>{{ $coop->company }}</td>
								<td>{{ $coop->phone }}</td>
								<td>{{ $coop->email }}</td>
								<td>{{ $coop->comment }}</td>
								<td>{{ $coop->status }}</td>
					    		
							</tr>
					    	@endforeach
								<td>
						    		<div class="form-group">
										<select name="status" class="form-control">
											<option>Ожидает ответа</option>
											<option>На рассмотрении</option>
											<option>На согласовании</option>
											<option>Отклонено</option>
										</select>
										<input name="id" type="text">
								<input type="submit" class="btn btn-primary" style="margin-right: 1px;">	
									</div>
								</td>
						</tbody>
					</table>	
				</div>
			</div>
			</form>
		</div>
	</body>
</html>