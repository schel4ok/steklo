<h4 class="title google-alert alert-notice"><i class="fa fa-shopping-cart fa-lg text-primary"></i>  <span>Заказать стеклянную дверь для сауны</span></h4>
<div class="text-primary">* обязательное поле</div>



{!! Form::open(array('route' => 'order', 'class' => 'go-right calculator', 'files' => true)) !!}
@if(Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif
@if(Session::has('errors'))
	<div class="alert alert-info">@foreach($errors->all() as $error){{ $error }}<br>@endforeach
</div>
@endif

	<input name="calc" type="hidden" value="saunadoor">


	<div class="form-group door_size_radio col-xs-12 col-sm-6" style="margin-bottom:67px;"><h4>Размер дверной коробки (в миллиметрах)</h4>
		<input type="radio" value="standard" name="door_size_radio" class="radio">
		<label for="door_size_radio" class="radio">Стандартный</label>

		<input type="radio" value="special" name="door_size_radio" class="radio">
		<label for="door_size_radio" class="radio">Ввести размер</label>
	</div>

	<div class="col-xs-6 standard_sizes"><h4>Стандартные размеры дверной коробки</h4></div>
	<div class="col-xs-6 standard_sizes"><div class="custom-dropdown custom-dropdown--white">
		<select class="standard_sizes custom-dropdown__select custom-dropdown__select--white"> 
			<option value="585х1880" data-price="5600" selected="selected">585х1880</option>
			<option value="685x1880" data-price="3600">685x1880</option>
			<option value="685x1980" data-price="5600">685x1980</option>
			<option value="685x2080" data-price="5600">685x2080</option>
			<option value="685x2180" data-price="6600">685x2180</option>
			<option value="785x1880" data-price="5600">785x1880</option>
			<option value="785x1980" data-price="5600">785x1980</option>
			<option value="785x2080" data-price="5600">785x2080</option>
			<option value="785x2180" data-price="6600">785x2180</option>
		</select>
	</div></div>

	<div class="form-group special_sizes col-xs-12 col-sm-6"><h4>Ввести свои размеры дверной коробки</h4>	</div>

	<div class="form-group special_sizes col-xs-12 col-sm-6">
		<input name="door_size_b" type="text" class="form-control" ng-model="DoorSizeB">
		<label for="door_size_b">Ширина, мм</label>
	</div>

	<div class="form-group special_sizes col-xs-12 col-sm-6">
		<input name="door_size_h" type="text" class="form-control">
		<label for="door_size_h">Высота, мм</label>
	</div>

	<div class="row" style="width:100%;"></div>


	<div class="col-xs-6"><h4>Стекло</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="glass custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="0" value="Прозрачное" selected="selected">Прозрачное (стандарт)</option>
        	<option data-price="1000" value="Матовое">Матовое (Matelux)</option>
        	<option data-price="1500" value="Бронза">Бронза (Bronze)</option>
        	<option data-price="2000" value="Матовая Бронза">Матовая Бронза (Matelux Bronze)</option>
        	<option data-price="4000" value="Черное">Черное (Black pearl)</option>
    	</select>
	</div></div>


	<div class="col-xs-6"><h4>Материал дверной коробки</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="korobka custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="1000" value="Липа" selected="selected">Липа (стандарт)</option>
        	<option data-price="2000" value="Лиственница">Лиственница</option>
        	<option data-price="3000" value="Бук">Бук</option>
        	<option data-price="6000" value="Дуб">Дуб</option>
    	</select>
	</div></div>


	<div class="col-xs-6"><h4>Петли</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="petli custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="900" value="Хром" selected="selected">Хром (стандарт)</option>
        	<option data-price="1900" value="Бронза">Бронза</option>
        	<option data-price="1900" value="Золото">Золото</option>
    	</select>
	</div></div>


	<div class="col-xs-6"><h4>Декор</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="dekor custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="0" value="Нет" selected="selected">Нет</option>
        	<option data-price="1000" value="Пескоструйный рисунок">Пескоструйный рисунок</option>
        	<option data-price="1500" value="Лазерная гравировка">Лазерная гравировка</option>
        	<option data-price="2000" value="Фотопечать">Фотопечать</option>
        	<option data-price="3000" value="Пескоструйный рисунок с фьюзингом">Пескоструйный рисунок с фьюзингом</option>
    	</select>
	</div></div>


	<div class="form-group dostavka col-xs-12 col-sm-6">
		<input type="checkbox" data-price="2000" name="dostavka" class="check" value="в пределах МКАД">
		<label for="dostavka" class="check">Доставка</label>
	</div>


	<div class="form-group montazh col-xs-12 col-sm-6">
		<input type="checkbox" data-price="1500" name="montazh" class="check" value="с монтажом">
		<label for="montazh" class="check">Монтаж</label>
	</div>


<div class="result col-xs-12 col-sm-6"><h4>Итоговая спецификация</h4>
Размер дверной коробки (в миллиметрах): <span class="razmer"></span> {{DoorSizeB}} <br />
Стекло: <span class="glass"></span><br />
Материал дверной коробки: <span class="korobka"></span><br />
Петли: <span class="petli"></span><br />
Декор: <span class="dekor"></span><br />
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