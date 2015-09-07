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

        <i class="fa fa-calendar text-primary"> {{ date('d M Y', strtotime($item->created_at)) }} </i>
        <h1>{{ $item->title }}</h1>

       		<a href="/img/news/big/{!! $item->image !!}"data-lightbox="news" data-title="{!! $item->title !!}"> 
       			{!! HTML::image('/img/news/'.$item->image, $alt = $item->title, array('class' => 'thumbnail img-responsive pull-left margin-right-20' )) !!}
       		</a>

       	<div class="fulltext">{!! $item->fulltext !!}</div>
       	<div class="clearfix"></div>

    </article>


<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id )
<li class="previous"><a href="{{ $previous->sef }}">← Пред новость</a></li>
@endif

<li><a href="/news">&uarr; в раздел</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="{{ $next->sef }}">След новость →</a></li>
@endif
</ul>


@stop