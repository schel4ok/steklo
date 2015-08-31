@extends('layout.main')

@section('content')


<!-- слайдер (карусель) картинок на главной -->
    			<div id="mainCarousel" class="carousel slide carousel-v1 margin-bottom-20 col-md-12">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/carousel/crystal.jpg" alt="Цельностеклянные перегородки">
                            <div class="carousel-caption">
                                <i>Цельностеклянные перегородки </i><a class="btn btn-xs btn-outline-white pull-right" href="#">Заказать</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/carousel/shower.jpg" alt="Стеклянные душевые кабины">
                            <div class="carousel-caption">
                                <i>Стеклянные душевые кабины</i><a class="btn btn-xs btn-outline-white pull-right" href="#">Заказать</a>
                            </div>
                            </div>
                        <div class="item">
                            <img src="img/carousel/vektor.jpg" alt="Раздвижные цельностеклянные двери">
                            <div class="carousel-caption">
                                <i>Раздвижные цельностеклянные двери</i><a class="btn btn-xs btn-outline-white pull-right" href="#">Заказать</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/carousel/polki.jpg" alt="Стеклянные полки">
                            <div class="carousel-caption">
                                <i>Стеклянные полки</i><a class="btn btn-xs btn-outline-white pull-right" href="#">Заказать</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/carousel/decorative.jpg" alt="Пескоструйные рисунки на стекле">
                            <div class="carousel-caption">
                                <i>Пескоструйные рисунки на стекле</i><a class="btn btn-xs btn-outline-white pull-right" href="#">Заказать</a>
                            </div>
                        </div>

                    </div>
                    
                    <div class="carousel-arrow">
                        <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#mainCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
    			</div>


<!-- Преимущества стеклянных перегородок -->
	<div class="col-md-8">
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
		  			<ul class="icon-list" >
        				<li><i class="fa fa-check text-primary "></i> большой простор для фантазии при оформлении помещения</li>
        				<li><i class="fa fa-check text-primary "></i> простота и скорость установки</li>
        				<li><i class="fa fa-check text-primary "></i> отсутствие грязных работ</li>
       					<li><i class="fa fa-check text-primary "></i> больше света в помещении</li>
        			</ul> 
        		</div>
        	</div>

            <blockquote class="homepage">
                    <p>Входя в помещение, где много света и стекла, мы чувствуем себя свободней и комфортней. Особенной популярностью стекляннные перегородки пользуются в общественных местах, таких как, фитнес клубы, магазины, и кафе.</p>
                    <small>дизайнер, Михаил</small>
            </blockquote>

  		  </div>
  		</div>
  	</div>

@endsection


@section('bottommodules')

<div class="col-md-4">
@include('modules.lastworks')
</div>

<div class="clearfix"></div>

<div class="col-md-4">
@include('modules.popular')
</div>

<div class="col-md-4">
@include('modules.lastnews')
</div>

@endsection
