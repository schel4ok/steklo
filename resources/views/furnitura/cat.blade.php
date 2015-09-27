@extends('layout.main')

@section('title')
{{ $category->metatitle }}
@stop

@section('keywords')
{{ $category->metakey }}
@stop

@section('description')
{{ $category->metadesc }}
@stop


@section('content')

  <h1>{{ $category->title }}</h1>

@if (count($categories) > 0)
<div class="category furnitura">
 @foreach ($categories as $item)
	<div class="col-xs-6 col-sm-4 col-md-3 padding-5">
		<a href="{{ $category->sef }}/{{ $item->sef }}" class="thumbnail" title="{{ $item->title }}">
			<img src="/{{ $item->image }}" alt="{{ $item->title }}">
			<span class="caption">{{ $item->title }}</span>
		</a>
	</div>
 @endforeach
</div>
<div class="clearfix"></div>
@endif


@if (count($goods) > 0)
<div class="category furnitura">
  @foreach ($goods as $item)
	<div class="col-xs-6 col-sm-4 col-md-3 padding-5">
		<a href="{{ $category->sef }}/{{ $item->sef }}" class="thumbnail" title="{{ $item->title }}">
			<img src="/img/furnitura/{{ $item->id }}-small.jpg" alt="{{ $item->title }}">
			<span class="caption">{{ $item->title }}</span>
		</a>
	</div>
  @endforeach
</div>

<div class="clearfix"></div>
{!! $goods->render() !!}
@endif


<ul class="pager">
@if (!empty($previous))
<li class="previous"><a href="/{{ $previous->parent->sef }}/{{ $previous->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← {{ $previous->title }}</a></li>
@endif

<li><a href="/{{ $category->parent->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->parent->title }}">&uarr; в раздел</a></li>

@if (!empty($next))
<li class="next"><a href="/{{ $next->parent->sef }}/{{ $next->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">{{ $next->title }} →</a></li>
@endif
</ul>

@endsection
