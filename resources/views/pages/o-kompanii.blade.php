@extends('layout.main')

@section('title')
{{ $category->title }}
@stop

@section('keywords')
{{ $category->title }}, стекло, фурнитура, изделия из стекла
@stop

@section('description')
{{ $category->title }} Стекло Групп, изделиях из стекла и наших клиентах
@stop


@section('content')

<h1>О компании - Стекло Групп</h1>

<img src="img/pages/o-kompanii.jpg" class="img-responsive">

<br />
<h2>Мы любим изделия из стекла и делаем их доступнее!</h2>
<p>Первая стеклянная перегородка была установлена нашими сотрудниками еще в 2008 году. С тех пор мы накопили большой опыт работы со стеклом и изделиями из него. Наладили надежные связи с поставщиками и производителями с мировыми именами. А география наших объектов вышла за границы Московской области. Сегодня мы устанавливаем стеклянные двери, стеклянные перегородки и душевые кабины из стекла, окна, стеклянные козырьки, стеклянные лестницы, стеклянные ограждения, а также фасадное остекление в следующих регионах:</p>

<img src="img/pages/o-kompanii-2.jpg" class="img-responsive pull-right">

<ul>
  <li>Московская область</li>
  <li>Владимирская область</li>
  <li>Ивановская область</li>
  <li>Калужская область</li>
  <li>Костромская область</li>
  <li>Липецкая область</li>
  <li>Смоленская область</li>
  <li>Ярославская область</li>
</ul>

<h2>Мы оказываем комплексные услуги</h2>
<p style="clear: both;">Комплексный подход заключается в том, что нашим клиентам не приходится обращаться за дополнительными услугами куда-то еще: все, что потребуется, мы делаем сами.
При установке цельностеклянной перегородки мы можем выполнять подготовительные общестроительные работы, например, монтаж верхней закладной балки на уровне подвесного потолка. А также дополнительные финишные работы после монтажа перегородки по желанию клиента. К примеру мы умеем выполнять обрамление стекла массивом дерева благородных пород (дуб, бук, ясень) и многое другое.</p>

<h2>Мы работаем по ценам ниже московских</h2>
<p>Наши склады и цеха располагаются в Московской области, соответственно, наши траты на поддержание работоспособности и содержание сотрудников в нашем штате на порядок ниже, чем в Москве. Поэтому мы можем себе позволить работать по ценам ниже московских – при сохранении всех прочих возможностей.</p>

<h2>Инженерный подход — философия нашей компании</h2>
<p>Благодаря наличию качественных инженерных ресурсов за несколько лет упорной работы мы смогли накопить солидный опыт по производству нестандартных конструкций из стекла: цельностеклянные перегородки высотой до 4,5 метров с обрамлением из массива дуба, лифтовые шахты с остеклением триплексом, безкаркасные козырьки со стеклом на тягах (вантах), спайдерное остекление фасадов торговых центров.</p>

<h2>Мы контролируем качество на всех этапах работы</h2>
<p>Качество – один из главных принципов работы нашей компании. Поэтому мы внимательно относимся к материалам, используемым в работе, а также ведем постоянную работу с поставщиками для повышения надежности и технологичности профилей и фурнитуры.</p>

<h2>Главное отличие от конкурентов в том, что ни один человек нашей команды не может сказать: «Мне все равно, что продавать»!</h2>
<br />
<br />

<h2>Наши клиенты</h2>
<div class="flex">
<img src="img/clients/arigato.png" alt="Суши бар Аригато в Люберцах" data-toggle="tooltip" data-placement="bottom" title="Суши бар Аригато в Люберцах" >
<img src="img/clients/avangard.png" alt="Банк Авангард (Москва и Московская область)" data-toggle="tooltip" data-placement="bottom" title="Банк Авангард (Москва и Московская область)">
<img src="img/clients/bankgorod.png" alt="Банк Город (Москва и Ярославль)" data-toggle="tooltip" data-placement="bottom" title="Банк Город (Москва и Ярославль)">
<img src="img/clients/ersh.png" alt="Сеть ресторанов Ёрш" data-toggle="tooltip" data-placement="bottom" title="Сеть ресторанов Ёрш">
<img src="img/clients/flexgym.png" alt="Фитнес клуб FlexGYM (Щёлково)" data-toggle="tooltip" data-placement="bottom" title="Фитнес клуб FlexGYM (Щёлково)">
<img src="img/clients/gagarin.png" alt="Торговый центр Гагарин (Ивантеевка)" data-toggle="tooltip" data-placement="bottom" title="Торговый центр Гагарин (Ивантеевка)">
<img src="img/clients/imarket.png" alt="Сеть компьютерных магазинов АЙ маркет" data-toggle="tooltip" data-placement="bottom" title="Сеть компьютерных магазинов АЙ маркет">
<img src="img/clients/novye-veshki.png" alt="Коттеджный поселок Вешки" data-toggle="tooltip" data-placement="bottom" title="Коттеджный поселок Вешки">
<img src="img/clients/ozero-krugloe.png" alt="Пансионат Круглое озеро" data-toggle="tooltip" data-placement="bottom" title="Пансионат Круглое озеро">
<img src="img/clients/pride-wellness-club.png" alt="PRIDE Wellness Club Жуковка XXI" data-toggle="tooltip" data-placement="bottom" title="PRIDE Wellness Club Жуковка XXI">
<img src="img/clients/primefitness.png" alt="Сеть Фитнес клубов PrimeFitness (Иваново и Липецк)" data-toggle="tooltip" data-placement="bottom" title="Сеть Фитнес клубов PrimeFitness (Иваново и Липецк)">
<img src="img/clients/sberbank.png" alt="Северный филиал Сбербанка (Ярославская и Костромская область)" data-toggle="tooltip" data-placement="bottom" title="Северный филиал Сбербанка (Ярославская и Костромская область)">
<img src="img/clients/tanuki.png" alt="Сеть ресторанов Тануки" data-toggle="tooltip" data-placement="bottom" title="Сеть ресторанов Тануки">
<img src="img/clients/uryuk.png" alt="Чайхана Урюк" data-toggle="tooltip" data-placement="bottom" title="Чайхана Урюк">
<img src="img/clients/izum.png" alt="Чайхана Изюм" data-toggle="tooltip" data-placement="bottom" title="Чайхана Изюм">
<img src="img/clients/benefit.png" alt="Бенефит Бизнес" data-toggle="tooltip" data-placement="bottom" title="Бенефит Бизнес">
<img src="img/clients/minstroy.png" alt="Министерство строительного комплекса Московской области" data-toggle="tooltip" data-placement="bottom" title="Министерство строительного комплекса Московской области">
<img src="img/clients/stalm.png" alt="Группа компаний СтальМ" data-toggle="tooltip" data-placement="bottom" title="Группа компаний СтальМ">
<img src="img/clients/president.png" alt="Cтоматологический комплекс ПрезиДент в Кожухово" data-toggle="tooltip" data-placement="bottom" title="Cтоматологический комплекс ПрезиДент в Кожухово">
<img src="img/clients/danilov-plaza.png" alt="Бизнес-центр Danilov Plaza" data-toggle="tooltip" data-placement="bottom" title="Бизнес-центр Danilov Plaza">
</div>

@endsection


@section('bottommodules')

<div class="col-md-4">
@include('modules.popular')
</div>

<div class="col-md-4">
@include('modules.lastnews')
</div>

<div class="col-md-4">
@include('modules.lastworks')
</div>

@endsection
