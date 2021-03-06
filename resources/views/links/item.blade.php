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
<li class="previous"><a href="/{{ $previous->url }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← Пред документ</a></li>
@endif

<li><a href="/{{ $category->parent->sef }}/{{ $category->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->title }}">&uarr; в раздел</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="/{{ $next->url }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">След документ →</a></li>
@endif
</ul>


@stop