<p>
Имя: {{ $name }}<br>
Телефон : {{ $tel }}<br>
Желательное время звонка : {{ isset($time) ? $time : ' ' }}<br>
Email :  {{ isset($email) ? $email : ' ' }}<br>
-------------------------<br>
Сообщение : {{ isset($msg) ? $msg : ' ' }}
</p>