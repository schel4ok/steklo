<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callback" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="CallbackModalLabel"><i class="fa fa-envelope-o text-primary"></i>  Отправить письмо / Попросить перезвонить</h4>
      </div>
      <div class="modal-body">


    	<div class="text-primary">* обязательное поле</div>


		<form role="form" class="go-right" action="" method='post' enctype="multipart/form-data">
      {{ csrf_field() }}
			<div class="form-group">
			<input id="name" name="name" type="text" class="form-control" required>
			<label for="name">Ваше имя *</label>
		</div>
		<div class="form-group">
			<input id="phone" name="phone" type="tel" class="form-control" required>
			<label for="phone">Номер телефона *</label>
		</div>
		<div class="form-group">
			<input id="time" name="time" type="text" class="form-control" required>
			<label for="time">Желательное время звонка</label>
		</div>
		<div class="form-group">
			<input id="email" name="email" type="email" class="form-control" required>
			<label for="email">Адрес электронной почты *</label>
		</div>
		<div class="form-group">
			<textarea id="message" name="phone" class="form-control" required></textarea>
			<label for="message">Сообщение *</label>
		</div>

		<div class="input-group margin-bottom-20">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                    <i class="fa fa-paperclip"> </i>
                        Прикрепить файл 
                    <input type="file" name="file" id='file' multiple="">
                    </span>
                </span>
                <input type="text" class="form-control" readonly="">
    </div>

        <div class="g-recaptcha row" data-sitekey="6LdbUP4SAAAAAE3uvOFX2CP0msaL3ez4PzaAoE0u"></div>
		</form>



      </div>
  	  <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary pull-right">Отправить</button>
      </div>
    </div>
  </div>
</div>