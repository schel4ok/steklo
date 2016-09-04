<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callback" aria-hidden="true">
  <div class="modal-dialog">

    <form name="callback" ng-controller="callbackController" role="form" class="" enctype="multipart/form-data">
      {{ csrf_field() }}


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="CallbackModalLabel"><i class="fa fa-envelope-o text-primary"></i>  Отправить письмо / Попросить перезвонить</h4>
      </div>
      <div class="modal-body">


    	 <div class="text-primary">* обязательное поле</div>



        <div class="col-sm-6">
          <div class="input" ng-class="{ 'has-error': callback.name.$touched && callback.name.$invalid, 'has-success': callback.name.$touched && callback.name.$valid }">
            <input id="name" name="name" ng-model="name" type="text" ng-minlength="3" ng-maxlength="20" required>
            <label for="name">Ваше имя *</label>
                <div class="help-block" ng-messages="callback.name.$error" ng-if="callback.name.$touched">
                  <p ng-message="minlength">Имя слишком короткое. Минимум 3 символа!</p>
                  <p ng-message="maxlength">Имя слишком длинное. Максимум 20 символов!</p>
                  <p ng-message="required">Введите имя!</p>
                </div>
          </div>

          <div class="input" ng-class="{ 'has-error': callback.tel.$touched && callback.tel.$invalid, 'has-success': callback.tel.$touched && callback.tel.$valid  }">
            <input id="phone" name="tel" ng-model="tel" type="text" ng-pattern="/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/" required>
            <label for="phone">Номер телефона *</label>
                <div class="help-block" ng-messages="callback.tel.$error" ng-if="callback.tel.$touched">
                  <p ng-message="pattern">Номер телефона должен иметь от 7 до 11 цифр!</p>
                  <p ng-message="required">Введите номер телефона!</p>
                </div>
          </div>

          <div class="input">
            <input id="time" name="time" ng-model="time" type="text">
            <label for="time">Желательное время звонка</label>
          </div>

          <div class="input">
            <input id="email" name="email" ng-model="email" type="email">
            <label for="email">Адрес электронной почты</label>
          </div>

        </div>


        <div class="col-sm-6">
          <div class="input">
            <textarea id="msg" name="msg" ng-model="msg"></textarea>
            <label for="message">Сообщение</label>
          </div>
        </div>
    
        <div class="clearfix"></div>



      </div>

  	  <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary pull-right" ng-click="submit(callback.$valid)" ng-bind="submittext" ng-class="{ 'btn-danger': callback.name.$touched && callback.name.$invalid || callback.tel.$touched && callback.tel.$invalid, 'btn-success': callback.name.$touched && callback.name.$valid && callback.tel.$touched && callback.tel.$valid, }">Отправить</button>
      </div>

     </div>
    </form>


  </div>
</div>