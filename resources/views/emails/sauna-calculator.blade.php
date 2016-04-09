<p>
Формат двери: {{ $door_size_radio }}<br>
Размер дверной коробки (в миллиметрах): {{{ ($door_size_radio == 'standard') ? $door_size_standard :  $door_size_b . 'x' . $door_size_h }}}<br>
Стекло: {{ $glass }}<br>
Материал дверной коробки: {{ $korobka }}<br>
Цвет фурнитуры: {{ $petli }}<br>
Декор стекла: {{ $dekor }}<br>
Доставка: {{ $dostavka }}<br>
Монтаж: {{ $montazh }}<br>
-------------------------<br>
Имя: {{ $name }}<br>
Телефон : {{ $tel }}<br>
Email :{{ $email }}<br>
-------------------------<br>
Сообщение :{{ $user_message }}
</p>
<p>Это сообщение отправлено со страницы  $pagetitle  -  {{ $_SERVER['SERVER_NAME'] }} $pageurl</p>