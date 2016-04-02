<h4 class="title"><i class="fa fa-shopping-cart fa-lg text-primary"></i>  Заказать стеклянную дверь для сауны</h4>
<div class="text-primary">* обязательное поле</div>


<form role="form" class="go-right calculator" action="" method='post' enctype="multipart/form-data">
{{ csrf_field() }}


	<div class="form-group door_size_radio col-xs-12 col-sm-6" style="margin-bottom:67px;"><h4>Размер дверной коробки (в миллиметрах)</h4>
		<input type="radio" value="standard" name="door_size_radio" class="radio">
		<label for="door_size_radio" class="radio">Стандартный</label>

		<input type="radio" value="special" name="door_size_radio" class="radio">
		<label for="door_size_radio" class="radio">Ввести размер</label>
	</div>

	<div class="form-group standard_sizes col-xs-12 col-sm-6" style="margin-bottom:94.5px;"><h4>Стандартные размеры дверной коробки</h4>
		<select class="select door_size_standard" name="door_size_standard"> 
			<option value="1" data-price="5600" selected="selected">585х1880</option>
			<option value="2" data-price="3600">685x1880</option>
			<option value="3" data-price="5600">685x1980</option>
			<option value="4" data-price="5600">685x2080</option>
			<option value="5" data-price="6600">685x2180</option>
			<option value="6" data-price="5600">785x1880</option>
			<option value="7" data-price="5600">785x1980</option>
			<option value="8" data-price="5600">785x2080</option>
			<option value="9" data-price="6600">785x2180</option>
		</select>
	</div>

	<div class="form-group special_sizes col-xs-12 col-sm-6"><h4>Ввести свои размеры дверной коробки</h4>	</div>

	<div class="form-group special_sizes col-xs-12 col-sm-6">
		<input name="door_size_b" type="text" class="form-control" required>
		<label for="door_size_b">Ширина, мм</label>
	</div>

	<div class="form-group special_sizes col-xs-12 col-sm-6">
		<input name="door_size_h" type="text" class="form-control" required>
		<label for="door_size_h">Высота, мм</label>
	</div>

	<div class="row" style="width:100%;"></div>

	<div class="form-group glass col-xs-12 col-sm-6"><h4>Стекло</h4>

		<input type="radio" value="clear" data-price="0" name="glass" class="radio" text="Прозрачное">
		<label for="glass" class="radio">Прозрачное (стандарт)</label>

		<input type="radio" value="matelux" data-price="1000" name="glass" class="radio" text="Матовое">
		<label for="glass" class="radio">Матовое</label>

		<input type="radio" value="bronza" data-price="1500" name="glass" class="radio" text="Бронза">
		<label for="glass" class="radio">Бронза</label>

		<input type="radio" value="bronza_matelux" data-price="2000" name="glass" class="radio" text="Матовая бронза">
		<label for="glass" class="radio">Матовая бронза</label>

	</div>



	<div class="form-group korobka col-xs-12 col-sm-6"><h4>Материал дверной коробки</h4>

		<input type="radio" value="lipa" data-price="1000" name="korobka" class="radio" text="Липа">
		<label for="korobka" class="radio">Липа (стандарт)</label>

		<input type="radio" value="listvennica" data-price="2000" name="korobka" class="radio" text="Лиственница">
		<label for="korobka" class="radio">Лиственница</label>

		<input type="radio" value="buk" data-price="3000" name="korobka" class="radio" text="Бук">
		<label for="korobka" class="radio">Бук</label>

		<input type="radio" value="dub" data-price="6000" name="korobka" class="radio" text="Дуб">
		<label for="korobka" class="radio">Дуб</label>

	</div>



	<div class="form-group petli col-xs-12 col-sm-6"><h4>Петли</h4>

		<input type="radio" value="chrom" data-price="900" name="petli" class="radio" text="Хром">
		<label for="petli" class="radio">Хром (стандарт)</label>

		<input type="radio" value="bronza" data-price="1900" name="petli" class="radio" text="Бронза">
		<label for="petli" class="radio">Бронза</label>

		<input type="radio" value="gold" data-price="1900" name="petli" class="radio" text="Золото">
		<label for="petli" class="radio">Золото</label>

	</div>


	<div class="form-group dekor col-xs-12 col-sm-6"><h4>Декор</h4>

		<input type="radio" value="no" data-price="0" name="dekor" class="radio" text="Нет">
		<label for="dekor" class="radio">Нет</label>

		<input type="radio" value="pesok" data-price="1000" name="dekor" class="radio" text="Пескоструйный рисунок">
		<label for="dekor" class="radio">Пескоструйный рисунок</label>

		<input type="radio" value="gravirovka" data-price="1500" name="dekor" class="radio" text="Лазерная гравировка">
		<label for="dekor" class="radio">Лазерная гравировка</label>

		<input type="radio" value="foto" data-price="2000" name="dekor" class="radio" text="Фотопечать">
		<label for="dekor" class="radio">Фотопечать</label>

		<input type="radio" value="fusing" data-price="3000" name="dekor" class="radio" text="Пескоструйный рисунок с фьюзингом">
		<label for="dekor" class="radio">Пескоструйный рисунок с фьюзингом</label>

	</div>


<div class="result col-xs-12 col-sm-6"><h4>Итоговая спецификация</h4>
Размер дверной коробки (в миллиметрах): <span class="razmer"></span><br />
Стекло: <span class="glass"></span><br />
Материал дверной коробки: <span class="korobka"></span><br />
Петли: <span class="petli"></span><br />
Декор: <span class="dekor"></span><br />
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

</form>
