<h4 class="title google-alert alert-notice"><i class="fa fa-shopping-cart fa-lg text-primary"></i>  <span>Заказать стеклянный фартук для кухни</span></h4>
<div class="text-primary">* обязательное поле</div>



{!! Form::open(array('route' => 'order', 'class' => 'go-right calculator', 'files' => true)) !!}
@if(Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif
@if(Session::has('errors'))
	<div class="alert alert-info">@foreach($errors->all() as $error){{ $error }}<br>@endforeach
</div>
@endif

	<input name="calc" type="hidden" value="skinali">

<div class="row">
	<div class="form-group col-xs-6 col-sm-4"><h4>1-ое стекло</h4></div>
	<div class="form-group col-xs-3 col-sm-4">
		<input name="size_b1" type="text" class="form-control">
		<label for="size_b">Ширина, мм</label>
	</div>
	<div class="form-group col-xs-3 col-sm-4">
		<input name="size_h1" type="text" class="form-control">
		<label for="size_h">Высота, мм</label>
	</div>
</div>

	<div class="row field_wrapper"></div>
	<div class="row"><a href="javascript:void(0);" class="add_button" title="Add field">ещё стекло</a></div>


	<div class="form-group col-xs-6"><h4>Кол-во блоков розеток, шт.</h4></div>
	<div class="form-group col-xs-6">
		<input type="text" name="rozetki" class="form-control">
		<label for="rozetki">Кол-во блоков розеток, шт.</label>
	</div>
	<div class="row" style="width:100%;"></div>

	<div class="form-group col-xs-6"><h4>Кол-во отверстий, шт.</h4></div>
	<div class="form-group col-xs-6">
		<input type="text" name="otverstija" class="form-control">
		<label for="otverstija">Кол-во отверстий</label>
	</div>
	<div class="row" style="width:100%;"></div>

	<div class="form-group col-xs-6"><h4>Кол-во крепежей, шт. (винты с блестящей крышкой)</h4></div>
	<div class="form-group col-xs-6">
		<input type="text" name="krepej" class="form-control">
		<label for="krepej">Кол-во крепежей</label>
	</div>
	<div class="row" style="width:100%;"></div>



	<div class="col-xs-6"><h4>Стекло</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="glass custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="2200" value="Прозрачное" selected="selected">Прозрачное (стандарт)</option>
        	<option data-price="2800" value="Матовое">Matelux (Матовое)</option>
        	<option data-price="4000" value="Осветленное">Optiwhite (Осветленное)</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Подсветка</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="led custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="0" value="Нет" selected="selected">Нет</option>
        	<option data-price="2500" value="Однотонная">Однотонная</option>
        	<option data-price="3000" value="Цветная RGB">Цветная RGB</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Декор</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="dekor custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="0" value="Нет" selected="selected">Нет</option>
        	<option data-price="1500" value="Покраска одним цветом">Покраска одним цветом</option>
        	<option data-price="2500" value="Фотопечать">Фотопечать</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Доставка</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="dostavka custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="0" value="Нет" selected="selected">Нет</option>
        	<option data-price="1500" value="в пределах МКАД">в пределах МКАД</option>
        	<option data-price="1500" value="за МКАД">за МКАД</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Доставка</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="montazh custom-dropdown__select custom-dropdown__select--white">
        	<option data-price="0" value="Нет" selected="selected">Нет</option>
        	<option data-price="1500" value="на саморезы">на саморезы</option>
        	<option data-price="1800" value="на клей">на клей</option>
    	</select>
	</div></div>


	<div class="col-xs-6"><h4>Расстояние за МКАД, км</h4></div>
	<div class="form-group col-xs-6">
		<input type="text" name="zamkad" class="form-control">
		<label for="zamkad">Расстояние за МКАД</label>
	</div>
	<div class="row" style="width:100%;"></div>



<div class="result col-xs-12 col-sm-6"><h4>Итоговая спецификация</h4>
Стекло: <span class="glass"></span> <span class="razmer"></span><br />
Подсветка: <span class="led"></span><br />
Кол-во блоков розеток: <span class="rozetki"></span> шт.<br />
Кол-во отверстий: <span class="otverstija"></span> шт.<br />
Кол-во крепежей: <span class="krepej"></span> шт.<br />
Декор: <span class="dekor"></span><br />
Доставка: <span class="dostavka"></span><br />
Расстояние за МКАД: <span class="zamkad"></span>км<br />
Монтаж: <span class="montazh"></span><br />
<br />Стоимость фартука: <span class="price"></span>
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