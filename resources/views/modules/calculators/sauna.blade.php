
<h4 class="title google-alert alert-notice"><i class="fa fa-shopping-cart fa-lg text-primary"></i>  <span>Заказать стеклянную дверь для сауны</span></h4>
<div class="text-primary">* обязательное поле </div>


<form ng-controller="SaunaDoorCalcController" class="calculator" name="calculator">

<div class="row">
	<div class="col-xs-12 col-sm-6">Размер дверной коробки
		<div class='input' ng-repeat="a in sizeswitch">
			<input type="radio" name='sizeswitch' ng-model="$parent.selectedSizeSwitch" ng-value="a.label" id="@{{a.value}}">
			<label for="@{{a.value}}">@{{a.label}}</label>
		</div>
	</div>

   <div ng-switch on="selectedSizeSwitch">
	<div class="col-xs-12 col-sm-6" ng-switch-default>Стандартные размеры дверной коробки (мм)
		<div class="custom-dropdown custom-dropdown--white">
			<select ng-model="$parent.selectedStandardSize" ng-options="b.label for b in standardsizes" class="standard_sizes custom-dropdown__select custom-dropdown__select--white"></select>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6" ng-switch-when="Нестандартный">Нестандартные размеры дверной коробки
		<div class="input" ng-class="{ 'has-error': calculator.door_size_b.$touched && calculator.door_size_b.$invalid, 'has-success': calculator.door_size_b.$touched && calculator.door_size_b.$valid }">
			<input name="door_size_b" id="input1" type="text" ng-model="$parent.DoorSizeB" ng-pattern="/^[0-9]{1,4}$/" required>
			<label for="door_size_b">Ширина дверной коробки, мм</label>
		      <div class="help-block" ng-messages="calculator.door_size_b.$error" ng-if="calculator.door_size_b.$touched">
		        <p ng-message="pattern">Введите число от 0 до 9999мм</p>
		        <p ng-message="required">Введите размер</p>
		      </div>
		</div>

		<div class="input" ng-class="{ 'has-error': calculator.door_size_h.$touched && calculator.door_size_h.$invalid, 'has-success': calculator.door_size_h.$touched && calculator.door_size_h.$valid }">
			<input name="door_size_h" id="door_size_h" type="text" ng-model="$parent.DoorSizeH" ng-pattern="/^[0-9]{1,4}$/" required>
			<label for="door_size_h">Высота дверной коробки, мм</label>
		      <div class="help-block" ng-messages="calculator.door_size_h.$error" ng-if="calculator.door_size_h.$touched">
		        <p ng-message="pattern">Введите число от 0 до 9999мм</p>
		        <p ng-message="required">Введите размер</p>
		      </div>
		</div>
	</div>
   </div>

</div>


<div class="row">
	<div class="col-xs-12 col-sm-6"><span class="col-xs-6 col-sm-3">Стекло</span>
		<div class="custom-dropdown custom-dropdown--white">
			<select ng-model="selectedGlass" ng-options="c.label for c in glass" class="custom-dropdown__select custom-dropdown__select--white"></select>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6"><span class="col-xs-6 col-sm-3">Материал коробки</span>
		<div class="custom-dropdown custom-dropdown--white">
			<select ng-model="selectedKorobka" ng-options="d.label for d in korobka" class="custom-dropdown__select custom-dropdown__select--white"></select>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-xs-12 col-sm-6"><span class="col-xs-6 col-sm-3">Петли</span>
		<div class="custom-dropdown custom-dropdown--white">
			<select ng-model="selectedPetli" ng-options="e.label for e in petli" class="custom-dropdown__select custom-dropdown__select--white"></select>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6"><span class="col-xs-6 col-sm-3">Декор</span>
		<div class="custom-dropdown custom-dropdown--white">
			<select ng-model="selectedDekor" ng-options="f.label for f in dekor" class="custom-dropdown__select custom-dropdown__select--white"></select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6"><span class="col-xs-6 col-sm-3">Доставка</span>
		<div class="custom-dropdown custom-dropdown--white">
			<select ng-model="selectedDostavka" ng-options="g.label for g in dostavka" class="custom-dropdown__select custom-dropdown__select--white"></select>
		</div>
	</div>

	<div class='input col-xs-12 col-sm-6'>
  		<input type='checkbox' id='montazh' ng-model="montazh" ng-true-value="1500" ng-false-value="0"/>
  		<label for="montazh">Монтаж</label>
	</div>
</div>


<table class="result table table-hover table-striped table-bordered table-condensed"> 
	<caption>Итоговая спецификация</caption>
<tbody>
<tr><td>Опция</td>							<td>Значение</td>												<td>Цена, руб</td></tr>
<tr><td>Размер дверной коробки (мм):</td>	<td ng-bind="getDoorSize()">@{{selectedSizeSwitch}}, @{{selectedStandardSize.label}}</td>			<td ng-bind="getBasePrice()">@{{selectedStandardSize.price}}</td></tr>
<tr><td>Стекло</td>							<td>@{{selectedGlass.label}}</td>								<td>@{{selectedGlass.price}}</td></tr>
<tr><td>Материал дверной коробки:</td>		<td>@{{selectedKorobka.label}}</td>								<td>@{{selectedKorobka.price}}</td></tr>
<tr><td>Петли:</td>							<td>@{{selectedPetli.label}}</td>								<td>@{{selectedPetli.price}}</td></tr>
<tr><td>Декор:</td>							<td>@{{selectedDekor.label}}</td>								<td>@{{selectedDekor.price}}</td></tr>
<tr><td>Доставка:</td>						<td>@{{selectedDostavka.label}}</td>							<td>@{{selectedDostavka.price}}</td></tr>
<tr><td>Монтаж:</td>						<td>@{{montazh.label}}</td>										<td>@{{montazh}}</td></tr>
<tr><td>Стоимость двери:</td>				<td></td>  														<td ng-bind="getFullPrice()">  </td>
</tr>
</tbody>
</table>


<div class="col-sm-6">
    <div class="input" ng-class="{ 'has-error': calculator.name.$touched && calculator.name.$invalid, 'has-success': calculator.name.$touched && calculator.name.$valid }">
        <input id="name" name="name" ng-model="name" type="text" ng-minlength="3" ng-maxlength="20" required>
        <label for="name">Ваше имя *</label>
	        <div class="help-block" ng-messages="calculator.name.$error" ng-if="calculator.name.$touched">
		        <p ng-message="minlength">Имя слишком короткое. Минимум 3 символа!</p>
		        <p ng-message="maxlength">Имя слишком длинное. Максимум 20 символов!</p>
		        <p ng-message="required">Введите имя!</p>
	        </div>
    </div>

    <div class="input" ng-class="{ 'has-error': calculator.tel.$touched && calculator.tel.$invalid, 'has-success': calculator.tel.$touched && calculator.tel.$valid  }">
	    <input id="phone" name="tel" ng-model="tel" type="text" ng-pattern="/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/" required>
	    <label for="phone">Номер телефона *</label>
		    <div class="help-block" ng-messages="calculator.tel.$error" ng-if="calculator.tel.$touched">
			    <p ng-message="pattern">Номер телефона должен иметь от 7 до 11 цифр!</p>
			    <p ng-message="required">Введите номер телефона!</p>
		    </div>
    </div>

	<div class="input" ng-class="{ 'has-error': calculator.email.$touched && calculator.email.$invalid, 'has-success': calculator.email.$touched && calculator.email.$valid }">
		<input id="email" name="email" ng-model="email" type="email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required>
		<label for="email">Адрес электронной почты *</label>
	      <div class="help-block" ng-messages="calculator.email.$error" ng-if="calculator.email.$touched">
	        <p ng-message="pattern">Введите корректный email!</p>
	        <p ng-message="required">Введите email!</p>
	      </div>
	</div>

</div>

<div class="col-sm-6">
	<div class="input">
		<textarea id="msg" name="msg" ng-model="msg"></textarea>
		<label for="message">Комментарии</label>
	</div>
</div>


<div class="footer col-xs-12 col-sm-6">
    <button type="submit" class="btn btn-primary pull-right" ng-click="submit(calculator.$valid)" ng-class="{ 'btn-danger': calculator.name.$touched && calculator.name.$invalid || calculator.tel.$touched && calculator.tel.$invalid || calculator.email.$touched && calculator.email.$invalid || calculator.door_size_b.$touched && calculator.door_size_b.$invalid || calculator.door_size_h.$touched && calculator.door_size_h.$invalid, 'btn-success': calculator.name.$touched && calculator.name.$valid && calculator.tel.$touched && calculator.tel.$valid && calculator.email.$touched && calculator.email.$valid || calculator.door_size_b.$touched && calculator.door_size_b.$valid || calculator.door_size_h.$touched && calculator.door_size_h.$valid, }">Отправить заказ</button>
</div>


<div class="modal fade order-success" tabindex="-1" role="dialog" aria-labelledby="success" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Заказ отправлен. В ближайшее время мы с вами свяжемся
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


</form>