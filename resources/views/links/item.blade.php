@extends('layout.main')

@foreach ($news as $item)


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
        <h1 class="page-header margin-0">{{ $item->title }}</h1>


       	<div class="page-content">
       	{!! HTML::image($item->image, $alt = $item->title, array('class' => 'thumbnail img-responsive pull-left')) !!}
       	<div class="fulltext">{!! $item->fulltext !!}
         </div>
       	<div class="clearfix"></div>
       	</div>

    </article>

@endforeach



<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id )
<li class="previous"><a href="{{ $previous->sef }}">← Пред новость</a></li>
@endif

<li><a href="/news">&uarr; Наверх</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="{{ $next->sef }}">След новость →</a></li>
@endif
</ul>


@stop