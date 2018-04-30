@extends('contacts.feedback_main')


@section('content')
    <div id="accordion" role="tablist" aria-multiselectable="true">
		  	<div class="card">
			    <div class="card-header" role="tab" id="headingOne">
			      <h5 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Обратный звонок</a>
			      </h5>
			    </div>
			    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
			    	<div class="card-block">
			    		<div class="container forms">
							<div class="row">
								<div class="col-md-12">
									<p align="justify">Заполните простую форму и ждите звонка нашего специалиста.</p>
									<p align="justify">Консультанты сервиса «Обратный звонок» обязательно ответят на ваш вопрос в указанное время или в течение 15 минут после отправки запроса. Сервис предоставляется в рабочие дни с 9:00 до 18:00 часов по московскому времени.</p>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<form method="POST" action="/feedback">
									{{ csrf_field() }}
										<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus Placeholder="Имя">
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <select name="time_to_recall" class="form-control" id="time_to recall" type="time_to recall">
									    	<option></option>
										    <option>9:00-10:00</option>
										    <option>10:00-11:00</option>
										    <option>11:00-12:00</option>
										    <option>12:00-13:00</option>
										    <option>13:00-14:00</option>
										    <option>14:00-15:00</option>
										    <option>15:00-16:00</option>
										    <option>16:00-17:00</option>
										    <option>17:00-18:00</option>
									    </select>
									</div>						
								</div>				
								<div class="col-md-6">
									<div class="form-group">
									  <input id="phone" type="phone" class="form-control" name="phone" placeholder="Телефон">
									</div>
								</div>
  								<div class="col-md-6">
									<div class="form-group">
									  <input id="email" type="email" class="form-control" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<p align="justify">Нажимая кнопку «Отправить», вы даете согласие на обработку ваших персональных данных в соответствии с Политикой конфиденциальности.</p>
								</div>
								<button type="submit" class="btn btn-primary" style="margin-left: 15px;">Отправить</button>
							</div>
						</div>
					</div>      
			    </div>
  			</div>
					</form>
@endsection