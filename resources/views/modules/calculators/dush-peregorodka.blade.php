<h4 class="title"><i class="fa fa-shopping-cart fa-lg text-primary"></i>  Заказать стеклянную перегородку для душевой</h4>
<div class="text-primary">* обязательное поле</div>


{!! Form::open(array('route' => 'order', 'class' => 'go-right calculator', 'files' => true)) !!}
@if(Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif
@if(Session::has('errors'))
	<div class="alert alert-info">@foreach($errors->all() as $error){{ $error }}<br>@endforeach
</div>
@endif

	<div class="form-group col-xs-12 col-sm-6"><h4>Размер стекла (в миллиметрах)</h4></div>

	<div class="form-group size col-xs-12 col-sm-6">
		<input name="size_b" type="text" class="form-control" required>
		<label for="size_b">Ширина, мм</label>
	</div>

	<div class="form-group size col-xs-12 col-sm-6">
		<input name="size_h" type="text" class="form-control" required>
		<label for="size_h">Высота, мм</label>
	</div>


	<div class="form-group glass col-xs-12 col-sm-6"><h4>Стекло</h4>

		<input type="radio" value="clear" data-price="3000" name="glass" class="radio" text="Прозрачное">
		<label for="glass" class="radio">Прозрачное (стандарт)</label>

		<input type="radio" value="matelux" data-price="4000" name="glass" class="radio" text="Матовое">
		<label for="glass" class="radio">Матовое</label>

		<input type="radio" value="bronza" data-price="5200" name="glass" class="radio" text="Бронза">
		<label for="glass" class="radio">Бронза</label>

		<input type="radio" value="bronza_matelux" data-price="6200" name="glass" class="radio" text="Матовая бронза">
		<label for="glass" class="radio">Матовая бронза</label>

	</div>
 

	<div class="form-group furnitura col-xs-12 col-sm-6"><h4>Фурнитура для крепления стекла</h4>

		<input type="radio" value="profil-10-anod" data-price="1500" name="furnitura" class="radio" text="П-образный профиль 10мм анодированный">
		<label for="furnitura" class="radio">П-образный профиль 10мм анодированный</label>

		<input type="radio" value="profil-10-nerzh" data-price="3000" name="furnitura" class="radio" text="П-образный профиль 10мм нержавеющий">
		<label for="furnitura" class="radio">П-образный профиль 10мм нержавеющий</label>

		<input type="radio" value="connectors" data-price="2600" name="furnitura" class="radio" text="Коннекторы (4шт)">
		<label for="furnitura" class="radio">Коннекторы (4шт)</label>

		<input type="radio" value="profil-30" data-price="9000" name="furnitura" class="radio" text="Зажимной профиль 30мм">
		<label for="furnitura" class="radio">Зажимной профиль 30мм</label>

		<input type="radio" value="profil-40" data-price="4400" name="furnitura" class="radio" text="Зажимной профиль 40мм">
		<label for="furnitura" class="radio">Зажимной профиль 40мм</label>

	</div>


	<div class="form-group verh-truba col-xs-12 col-sm-6">
		<input type="checkbox" data-price="3100" name="verh_truba" class="check" text="Штанга длиной 1м, коннектор штанга-стена, коннектор штанга-стекло">
		<label for="verh_truba" class="check">Доп крепление верхней штангой</label>
	</div>

	<div class="form-group uplotniteli col-xs-12 col-sm-6">
		<input type="checkbox" data-price="500" name="uplotniteli" class="check" text="2 шт по 2200мм">
		<label for="uplotniteli" class="check">Силиконовые уплотнители</label>
	</div>

	<div class="form-group dostavka col-xs-12 col-sm-6">
		<input type="checkbox" data-price="2000" name="dostavka" class="check" text="в пределах МКАД">
		<label for="dostavka" class="check">Доставка</label>
	</div>

	<div class="form-group montazh col-xs-12 col-sm-6">
		<input type="checkbox" data-price="1500" name="montazh" class="check" text="с монтажом">
		<label for="montazh" class="check">Монтаж</label>
	</div>


<div class="result col-xs-12 col-sm-6"><h4>Итоговая спецификация</h4>
Размер (в миллиметрах): <span class="razmer"></span><br />
Стекло: <span class="glass"></span><br />
Фурнитура: <span class="furnitura"></span><br />
Доп крепление верхней штангой: <span class="verh_truba"></span><br />
Силиконовые уплотнители: <span class="uplotniteli"></span><br />
Доставка: <span class="dostavka"></span><br />
Монтаж: <span class="montazh"></span><br />
<br />Стоимость двери: <span class="price"></span>
</div>


		<div class="form-group col-xs-12 col-sm-6">
			<input id="name" name="name" type="text" class="form-control" required>
			<label for="name">Ваше имя *</label>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<input id="phone" name="tel" type="tel" class="form-control" required>
			<label for="phone">Номер телефона *</label>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<input id="email" name="email" type="email" class="form-control" required>
			<label for="email">Адрес электронной почты *</label>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<textarea id="message" name="message" class="form-control"></textarea>
			<label for="message">Комментарии</label>
		</div>



  	  <div class="footer col-xs-12 col-sm-6">
        <button type="submit" class="btn btn-primary pull-right">Отправить заказ</button>
      </div>

{!! Form::close() !!}