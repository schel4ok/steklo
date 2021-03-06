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

<div class="col-md-4 col-xs-12 pull-left alert-message alert-message-danger margin-top-0">
	<h4>Адрес</h4>
	<p><i class="icon-fa fa fa-home fa-lg" data-toggle="tooltip" data-placement="top" title="Адрес склада" > </i> Московская область, Щелковский район, пос.Краснознаменский, дом 7</p>
	<p><i class="icon-fa fa fa-phone fa-lg" data-toggle="tooltip" data-placement="top" title="Телефон"> </i> +7 (495) 790-84-15</p>
	<p><i class="icon-fa fa fa-clock-o fa-lg" data-toggle="tooltip" data-placement="top" title="Время работы"> </i> Пн - Пт: с 9:00 до 18:00</p>
</div>


<div class="col-md-8 col-xs-12 pull-right">
<h2>Форма обратной связи</h2>
<p>Все поля формы обязательны (кроме файла).<br>
Разрешено прикреплять файлы размером не более 10 мегабайт.<br>
Разрешенные типы файлов jpeg, bmp, png, gif, zip, rar, pdf, psd, ai, cdr, rtf, doc, docx, xls, xlsx, ppt.
</p>






{!! Form::open(array('route' => 'sendmail', 'class' => 'go-right', 'files' => true)) !!}
@if(Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif
@if(Session::has('errors'))
	<div class="alert alert-info">@foreach($errors->all() as $error){{ $error }}<br>@endforeach
</div>
@endif


<div class="form-group">
    <input class="form-control" name="name" type="text" required maxlength="30" minlength="2">
    <label for="name">Ваше имя *</label>
</div>

<div class="form-group">
    <input class="form-control" name="tel" type="tel" required>
    <label for="tel">Ваш телефон в любом формате *</label>
</div>

<div class="form-group">
    <input class="form-control" name="email" type="email" required>
    <label for="email">Адрес электронной почты *</label>
</div>

<div class="form-group">
    <textarea class="form-control" name="message" rows="4" required></textarea>
    <label for="message">Ваше сообщение *</label>
</div>


	<div class="input-group margin-bottom-20">
        <span class="input-group-btn">
            <span class="btn btn-primary btn-file">
            <i class="fa fa-paperclip"> </i> Прикрепить файл 
            <input type="file" name="attachment" id="file">
            </span>
        </span>
        <input type="text" class="form-control filename" readonly="" value="не более 10мб">
        <span class="filesize padding-20" style="color: #9C27B0;"></span>
    </div>

<input class="btn btn-primary" type="submit" value="Отправить">

{!! Form::close() !!}

</div>


<div class="col-md-4 col-xs-12 pull-left alert-message alert-message-info">
    <h4>Дополнительная информация</h4>
	<p>Мы работаем по безналичному расчету. Отгрузка товара происходит после поступления оплаты на наш банковский счет. Любые другие условия отгрузки необходимо согласовывать заранее. Оставьте свой номер телефона или задайте свой вопрос при помощи формы и мы обязательно с вами свяжемся в удобное для вас время!</p>
</div>

<div class="clearfix"></div>
<h2>Схема проезда</h2>
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=rTSXMVcvJ6NGEZlHEe1QWmygMHrEt9jb&width=100%&height=450"></script>

@endsection
