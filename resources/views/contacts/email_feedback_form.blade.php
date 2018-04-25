@extends('contacts.main')


@section('form_1')
    @parent
<div class="card">
		    	<div class="card-header" role="tab" id="headingTwo">
		    		<h5 class="mb-0">
		        		<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Обратная связь через Email</a>
		    		</h5>
		    	</div>
		    	<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <form method="POST" action="/feedback">
			    	<div class="card-block">
			    		<div class="container forms">
							<div class="row">
								<div class="col-md-12">
									<p align="justify">Для консультации по электронной почте заполните форму, отправьте запрос и ждите ответа.</p>
									<p align="justify">Консультанты сервиса «Email консультант» обязательно ответят на ваш вопрос в течение 1 часа после отправки запроса. Сервис предоставляется в рабочие дни с 9:00 до 18:00 часов по московскому времени.</p>
								</div>
								<div class="col-md-6">
                                    <div class="form-group">
									  <input type="text" class="form-control" id="usr" placeholder="Имя">
									</div>
								</div>
  								<div class="col-md-6">
									<div class="form-group">
									  <input type="email" class="form-control" id="mail" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" rows="5" id="comment" placeholder="Текст вопроса"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
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