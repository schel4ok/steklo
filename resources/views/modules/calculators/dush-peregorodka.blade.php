<h4 class="title google-alert alert-notice"><i class="fa fa-shopping-cart fa-lg text-primary"></i>  <span>Заказать стеклянную перегородку для душевой</span></h4>
<div class="text-primary">* обязательное поле</div>


{!! Form::open(array('route' => 'order', 'class' => 'go-right calculator', 'files' => true)) !!}
@if(Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif
@if(Session::has('errors'))
	<div class="alert alert-info">@foreach($errors->all() as $error){{ $error }}<br>@endforeach
</div>
@endif

	<input name="calc" type="hidden" value="dush-peregorodka">


	<div class="form-group col-xs-12 col-sm-6"><h4>Размер стекла (в миллиметрах)</h4></div>

	<div class="form-group size col-xs-12 col-sm-6">
		<input name="size_b" type="text" class="form-control" required>
		<label for="size_b">Ширина, мм</label>
	</div>

	<div class="form-group size col-xs-12 col-sm-6">
		<input name="size_h" type="text" class="form-control" required>
		<label for="size_h">Высота, мм</label>
	</div>


	<div class="col-xs-6"><h4>Стекло</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="glass custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="3000" value="Прозрачное" selected="selected">Прозрачное (стандарт)</option>
        	<option data-price="4000" value="Матовое">Матовое (Matelux)</option>
        	<option data-price="5200" value="Бронза">Бронза (Bronze)</option>
        	<option data-price="6200" value="Матовая Бронза">Матовая Бронза (Matelux Bronze)</option>
        	<option data-price="7500" value="Черное">Черное (Black pearl)</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Фурнитура для крепления стекла</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="furnitura custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="1500" value="П-образный профиль 10мм анодированный" selected="selected">П-образный профиль 10мм анодированный</option>
        	<option data-price="3000" value="П-образный профиль 10мм нержавеющий">П-образный профиль 10мм нержавеющий</option>
        	<option data-price="2600" value="Коннекторы (4шт)">Коннекторы (4шт)</option>
        	<option data-price="9000" value="Зажимной профиль 30мм">Зажимной профиль 30мм</option>
        	<option data-price="4400" value="Зажимной профиль 40мм">Зажимной профиль 40мм</option>
    	</select>
	</div></div>


	<div class="form-group verh-truba col-xs-12 col-sm-4">
		<input type="checkbox" data-price="3100" name="verh_truba" class="check" value="Штанга длиной 1м, коннектор штанга-стена, коннектор штанга-стекло">
		<label for="verh_truba" class="check">Доп крепление верхней штангой</label>
	</div>

	<div class="form-group uplotniteli col-xs-12 col-sm-4">
		<input type="checkbox" data-price="500" name="uplotniteli" class="check" value="2 шт по 2200мм">
		<label for="uplotniteli" class="check">Силиконовые уплотнители</label>
	</div>

	<div class="form-group montazh col-xs-12 col-sm-4">
		<input type="checkbox" data-price="1500" name="montazh" class="check" value="с монтажом">
		<label for="montazh" class="check">Монтаж</label>
	</div>

	<div class="col-xs-6"><h4>Доставка</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="dostavka custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="0" value="нет" selected="selected">нет</option>
        	<option data-price="1500" value="в пределах МКАД">в пределах МКАД</option>
        	<option data-price="1500" value="за МКАД">за МКАД</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Расстояние за МКАД, км</h4></div>
	<div class="form-group col-xs-6">
		<input type="text" name="zamkad" class="form-control">
		<label for="zamkad">Расстояние за МКАД</label>
	</div>
	<div class="row" style="width:100%;"></div>


<div class="result col-xs-12 col-sm-6"><h4>Итоговая спецификация</h4>
Размер (в миллиметрах): <span class="razmer"></span>  <br />
Стекло: <span class="glass">Прозрачное</span> <span class="GlassPrice">0</span>руб<br />
Фурнитура: <span class="furnitura">П-образный профиль 10мм анодированный</span> <span class="FurnituraPrice">0</span>руб<br />
Доп крепление верхней штангой: <span class="verh_truba">нет</span> <span class="VerhTrubaPrice">0</span>руб<br />
Силиконовые уплотнители: <span class="uplotniteli">нет</span> <span class="UplotniteliPrice">0</span>руб<br />
Доставка: <span class="dostavka">нет</span> <span class="DostavkaPrice">0</span>руб<br />
Расстояние за МКАД: <span class="zamkad">0</span>км <span class="ZamkadPrice">0</span>руб<br />
Монтаж: <span class="montazh">нет</span> <span class="MontazhPrice">0</span>руб<br />
<br />Стоимость перегородки: <span class="price">0</span>руб
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