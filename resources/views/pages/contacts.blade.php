@extends('layout.main')

@section('title')
{{ $category->title }}
@stop

@section('keywords')
{{ $category->title }}, стекло, фурнитура, изделия из стекла, Щёлково
@stop

@section('description')
{{ $category->title }}, стекло, фурнитура, изделия из стекла, Щёлково
@stop


@section('content')

<h1>{{ $category->title }}</h1>

<div class="col-md-4 pull-left alert-message alert-message-danger margin-top-0">
	<h4>Адрес склада</h4>
	<p>
	<i class="fa fa-home fa-lg" data-toggle="tooltip" data-placement="top" title="Адрес склада" > </i> Московская область, Щелково, Соколовская промзона<br>
	<i class="fa fa-phone fa-lg" data-toggle="tooltip" data-placement="top" title="Телефон"> </i> +7 (495) 790-84-15<br>
	<i class="fa fa-clock-o fa-lg" data-toggle="tooltip" data-placement="top" title="Время работы"> </i> Пн - Пт: с 9:00 до 18:00</p>
</div>


<div class="col-md-8 pull-right">
<h2>Форма обратной связи</h2>

@if(Session::has('errors'))
<div class="alert alert-info">
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
@endif


{!! Form::open(array('route' => 'sendmail', 'class' => 'form', 'files' => true)) !!}
			
			@if(Session::has('message'))
    			<div class="alert alert-info">
      			{{Session::get('message')}}
    			</div>
			@endif

	<div class="form-group">
    	<label for="Ваше имя *">Ваше имя *</label>
    	<input class="form-control" placeholder="введите имя" name="name" type="text" required maxlength="30" minlength="2">
	</div>


	<div class="form-group">
    	<label for="Ваш телефон *">Ваше телефон *</label>
    	<input class="form-control" placeholder="введите телефон" name="tel" type="tel" required>
	</div>

	<div class="form-group">
    	<label for="Адрес электронной почты *">Адрес электронной почты *</label>
    	<input class="form-control" placeholder="введите адрес электронной почты" name="email" type="email" required>
	</div>

	<div class="form-group">
    	<label for="Сообщение *">Сообщение *</label>
    	<textarea class="form-control" placeholder="введите сообщение" name="message" rows="4" required></textarea>
	</div>

	<div class="form-group">
    <label for="Прикрепить файл">Прикрепить файл</label>
    <input name="attachment" type="file">
	</div>

	<div class="form-group">
    	<input class="btn btn-primary" type="submit" value="Отправить">
	</div>

{!! Form::close() !!}

</div>

<div class="col-md-4 pull-left alert-message alert-message-info">
    <h4>Дополнительная информация</h4>
	<p>Мы работаем по безналичному расчету. Отгрузка товара происходит после поступления оплаты на наш банковский счет. Любые другие условия отгрузки необходимо согласовывать заранее. Оставьте свой номер телефона или задайте свой вопрос при помощи формы и мы обязательно с вами свяжемся в удобное для вас время!</p>
</div>

<div class="clearfix"></div>
<h2>Схема проезда на склад</h2>
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=rTSXMVcvJ6NGEZlHEe1QWmygMHrEt9jb&width=100%&height=450"></script>

@endsection
