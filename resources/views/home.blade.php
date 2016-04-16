@extends('layout.main')

@section('content')

<!-- слайдер (карусель) картинок на главной -->

<!-- слайдер (карусель) картинок на главной -->
@include('modules.mainslider')


<!-- Преимущества стеклянных перегородок -->
	<div class="col-md-8 preimuschestva">
		<div class="panel-primary">
		  <div class="panel-heading">
		      <h3 class="panel-title"><i class="fa fa-line-chart text-primary"></i> Преимущества стеклянных перегородок</h3>
		  </div>
		  <div class="panel-body">

		  	<div class="row margin-bottom-20">
		  		<div class="col-sm-4">
		  			<img class="img-responsive margin-bottom-20" src="img/homepage/designer.jpg" alt="">
		  		</div>

		  		<div class="col-sm-8">
		  			Стекло - натуральный, экологически чистый материал, делающий интерьер более изысканным, лёгким, светлым и современным.
		  			
            <div class="list-icons">
              <div><div class="fa fa-check"></div><div>большой простор для фантазии при оформлении помещения</div></div>
              <div><div class="fa fa-check"></div><div>простота и скорость установки</div></div>
              <div><div class="fa fa-check"></div><div>отсутствие грязных работ</div></div>
              <div><div class="fa fa-check"></div><div>больше света в помещении</div></div>
        		</div> 
        		</div>
        	</div>

            <blockquote class="homepage">
                    <p>Входя в помещение, где много света и стекла, мы чувствуем себя свободней и комфортней. Особенной популярностью стекляннные перегородки пользуются в общественных местах, таких как, фитнес клубы, магазины, и кафе.</p>
                    <small>дизайнер, Михаил</small>
            </blockquote>

  		  </div>
  		</div>
  	</div>


<div class="col-md-4 lastworks">
@include('modules.lastworks')
</div>

@endsection


@section('bottommodules')


<div class="clearfix"></div>

<div class="col-md-4">
@include('modules.popular')
</div>

<div class="col-md-4">
@include('modules.lastnews')
</div>

<div class="col-md-4">
@include('modules.test')
</div>


@endsection


