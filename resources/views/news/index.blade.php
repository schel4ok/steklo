@extends('layout.main')


@section('title')
Новости компании Стекло Групп о стекле, фурнитуре и изделиях из стекла 
@stop

@section('keywords')
Новости, Стекло Групп, стекло, фурнитура для стекла, изделия из стекла 
@stop

@section('description')
Новости компании Стекло Групп о стекле, фурнитуре и изделиях из стекла 
@stop

@section('content')

<h1>{{ $category->title }}</h1>

	@foreach ($news as $item)
        <article class="row">

        	<h3><i class="fa fa-calendar text-primary"> {{ date('d M Y', strtotime($item->created_at)) }} </i> | 
            {!! HTML::link('/news/'. $item->sef, $item->title, array('class' => 'link', 'title' => $item->title)) !!}
            </h3>

        	{!! HTML::image('/img/news/'.$item->image, $alt = $item->title, array('class' => 'thumbnail img-responsive col-md-3')) !!}

       		<div class="col-md-9 introtext">	
       			{!!  $item->introtext !!}                   
       			{!! HTML::link('/news/'. $item->sef, 'Подробнее', array('class' => 'btn btn-default pull-right', 'title' => $item->title)) !!}
       		</div>

        </article>
    @endforeach

{!! $news->render() !!}

@endsection
