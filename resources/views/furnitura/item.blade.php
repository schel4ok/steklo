@extends('layout.main')

@section('title')
{{ $item->metatitle }}
@stop

@section('keywords')
{{ $item->metakey }}
@stop

@section('description')
{{ $item->metadesc }}
@stop

@section('content')

	<article>

    <h1>{{ $item->title }}</h1>
		
<div class="col-xs-12 col-sm-4 furnitura-foto">
	<div class="furnitura-foto" id="thumbnail">
       	<a href="/img/furnitura/{{ $item->id }}-big.jpg" title="{!! $item->title !!}" > 
    	<img src="/img/furnitura/{{ $item->id }}-big.jpg" alt="{!! $item->title !!}" class="img-thumbnail img-responsive">
       	</a>

		@foreach ($img as $key)
			<a href="{{ $key }}" class="hidden" title="{!! $item->title !!}"><img src="{{ $key }}" alt="{!! $item->title !!}"></a>
		@endforeach
	</div>

	<div class="furnitura-links">
	@if(file_exists(public_path().'/img/furnitura/'. $item->artikul .'-dwg.jpg')) 
		<a href="/img/furnitura/{{ $item->artikul }}-dwg.jpg" title="Чертежи">
		<i class="fa fa-pencil"></i> Чертежи <img src="/img/furnitura/{{ $item->artikul }}-dwg.jpg" class="hidden" alt="{!! $item->title !!}"></a>
	@endif
		@foreach ($dwg as $d)
			<a href="{{ $d }}" title="{!! $item->title !!}" class="hidden"><img src="{{ $d }}" alt="{!! $item->title !!}"></a>
		@endforeach

	@if(file_exists(public_path().'/img/furnitura/'.$item->artikul.'-virez.jpg')) 
		<a href="/img/furnitura/{{ $item->artikul }}-virez.jpg" data-title="Вырезы в стекле"><i class="fa fa-scissors"></i> Вырезы в стекле <img src="/img/furnitura/{{ $item->artikul }}-virez.jpg" class="hidden" alt="{!! $item->title !!}"></a>
	@endif
		@foreach ($virez as $v)
			<a href="{{ $v }}" title="{!! $item->title !!}" class="hidden"><img src="{{ $v }}" alt="{!! $item->title !!}"></a>
		@endforeach

	</div>
		<a href="#CallBack" title="Обратный звонок" data-toggle="modal"><i class="fa fa-question"></i> Задать вопрос по этому товару</a> 


</div>

	<div class="furnitura-table col-xs-12 col-sm-8">
		<table class="table table-striped table-bordered table-hover"> <tbody> 
		<tr><th>Артикул:</th><td>{{ $item->artikul }}</td></tr> 
		<tr><th>Отделка:</th><td>{{ $item->otdelka }}</td></tr> 
		<tr><th>Ед. изм.:</th><td>{{ $item->pcs }}</td></tr> 
		<tr><th>Описание:</th><td>{!! $item->description !!}</td></tr> 
		</tbody>
		</table>
	</div>
    <div class="clearfix"></div>
    <div class="fulltext">{!! $item->fulltext !!}</div>

  	</article>


<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id )
<li class="previous"><a href="/furnitura/{{ $previous->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← Пред</a></li>
@endif

<li><a href="{{ $tocat }}/{{ $category->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->title }}">&uarr; в раздел</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="/furnitura/{{ $next->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">След →</a></li>
@endif
</ul>

@stop