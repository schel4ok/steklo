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
      <div class="fulltext">{!! $item->description !!}</div>
      <div class="clearfix"></div>
    </article>

<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id )
<li class="previous"><a href="/{{ $previous->url }}">← Пред документ</a></li>
@endif

<li><a href="/links/{{ $category->sef }}">&uarr; в категорию</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="/{{ $next->url }}">След документ →</a></li>
@endif
</ul>


@stop