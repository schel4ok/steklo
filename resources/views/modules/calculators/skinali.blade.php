<h4 class="title google-alert alert-notice"><i class="fa fa-shopping-cart fa-lg text-primary"></i>  <span>Заказать стеклянный фартук для кухни</span></h4>
<div class="text-primary">
	* обязательное поле<br />
	** введите общую ширину и высоту фартука для расчета стоимости
</div>



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
	<div class="form-group col-xs-6 col-sm-4"><h4>Размеры фартука</h4></div>
	<div class="form-group col-xs-3 col-sm-4">
		<input name="size_b1" type="text" class="form-control">
		<label for="size_b">Ширина, мм</label>
	</div>
	<div class="form-group col-xs-3 col-sm-4">
		<input name="size_h1" type="text" class="form-control">
		<label for="size_h">Высота, мм</label>
	</div>
</div>

	<!-- для добавления нескольких стекол
	<div class="row fieldwrapper"><div class="row"></div></div>
	<div class="row add_button"><a href="javascript:void(0);" title="ещё стекло">ещё стекло</a></div>
	-->

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
    	<select class="glass custom-dropdown__select custom-dropdown__select--white" name="glass">
        	<option data-price="2200" value="Прозрачное" selected="selected">Прозрачное (стандарт)</option>
        	<option data-price="2800" value="Матовое">Matelux (Матовое)</option>
        	<option data-price="4000" value="Осветленное">Optiwhite (Осветленное)</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Подсветка</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="led custom-dropdown__select custom-dropdown__select--white" name="led">
        	<option data-price="0" value="нет" selected="selected">нет</option>
        	<option data-price="2500" value="Однотонная">Однотонная</option>
        	<option data-price="3000" value="Цветная RGB">Цветная RGB</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Декор</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="dekor custom-dropdown__select custom-dropdown__select--white" name="dekor">
        	<option data-price="0" value="нет" selected="selected">нет</option>
        	<option data-price="1500" value="Покраска одним цветом">Покраска одним цветом</option>
        	<option data-price="2500" value="Фотопечать">Фотопечать</option>
    	</select>
	</div></div>

	<div class="col-xs-6"><h4>Доставка</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="dostavka custom-dropdown__select custom-dropdown__select--white" name="dostavka">
        	<option data-price="0" value="нет" selected="selected" data-text="нет">нет</option>
        	<option data-price="1500" value="в пределах МКАД" data-text="в пределах МКАД">в пределах МКАД</option>
        	<option data-price="1500" value="zamkad" data-text="за МКАД">за МКАД</option>
    	</select>
	</div></div>

	<div class="col-xs-6 zamkad"><h4>Расстояние за МКАД, км</h4></div>
	<div class="form-group zamkad col-xs-6">
		<input type="text" name="zamkad" class="form-control">
		<label for="zamkad">Расстояние за МКАД</label>
	</div>
	<div class="row" style="width:100%;"></div>

	<div class="col-xs-6"><h4>Монтаж</h4></div>
	<div class="col-xs-6"><div class="custom-dropdown custom-dropdown--white">
    	<select class="montazh custom-dropdown__select custom-dropdown__select--white" name="montazh">
        	<option data-price="0" value="нет" selected="selected">нет</option>
        	<option data-price="1500" value="на саморезы">на саморезы</option>
        	<option data-price="1800" value="на клей">на клей</option>
    	</select>
	</div></div>


<div class="result col-xs-12 col-sm-6"><h4>Итоговая спецификация</h4>
Стекло: <span class="glass">Прозрачное</span> <span class="razmer"></span>  <span class="GlassPrice">0</span>руб<br />
Кол-во блоков розеток: <span class="rozetki">0</span> шт. <span class="RozetkiPrice">0</span>руб<br />
Кол-во отверстий: <span class="otverstija">0</span> шт. <span class="OtverstijaPrice">0</span>руб<br />
Кол-во крепежей: <span class="krepej">0</span> шт. <span class="KrepejPrice">0</span>руб<br />
Подсветка: <span class="led">нет</span> <span class="LedPrice">0</span>руб<br />
Декор: <span class="dekor">нет</span> <span class="DekorPrice">0</span>руб<br />
Доставка: <span class="dostavka">нет</span> <span class="DostavkaPrice">0</span>руб<br />
Расстояние за МКАД: <span class="zamkad">0</span>км <span class="ZamkadPrice">0</span>руб<br />
Монтаж: <span class="montazh">нет</span> <span class="MontazhPrice">0</span>руб<br />
<br />Стоимость фартука: <span class="total">0</span>руб
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