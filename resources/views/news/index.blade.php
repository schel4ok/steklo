@extends('layout.main')

@section('content')


		<div class="panel-primary">
		  <div class="panel-heading">
		      <h3 class="panel-title">Новости</h3>
		  </div>
		  <div class="panel-body">

		  			@foreach ($news as $item)
        				<article class="row">
        				<h5><i class="fa fa-calendar text-primary"> {{ date('d M Y', strtotime($item->created_at)) }} </i> | 
                {!! HTML::link('news/'. $item->sef, $item->title, array('class' => 'link', 'title' => $item->title)) !!}
                </h5>

        				{!! HTML::image($item->image, $alt = $item->title, array('class' => 'thumbnail img-responsive col-md-3')) !!}

       					<div class="col-md-9 introtext">	{!!  $item->introtext !!}                   
       					{!! HTML::link('news/'. $item->sef, 'Подробнее', array('class' => 'btn btn-default pull-right', 'title' => $item->title)) !!}
       					</div>


        				</article>
        			@endforeach


  		  </div>
  		</div>

{!! $news->render() !!}

@endsection
