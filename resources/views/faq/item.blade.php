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

	<article class="faq">

    <h1>{{ $item->title }}</h1>
        <div class="introtext">{!! $item->introtext !!}</div>
        <div class="fulltext">{!! $item->fulltext !!}</div>
       	<div class="clearfix"></div>

  	</article>

<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id )
<li class="previous"><a href="{{ $previous->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← Пред</a></li>
@endif

<li><a href="/{{ $category->parent->sef }}/{{ $category->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->title }}">&uarr; в раздел</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="{{ $next->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">След →</a></li>
@endif
</ul>


@stop