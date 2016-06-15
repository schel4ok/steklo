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

	<article class="steklo">

    	<h1>{{ $item->title }}</h1>


        <a href="{{ $item->image }}" class="thumb left col-sm-6 col-xs-12" data-sub-html="{{ $item->title }}"> 	
        <img src="{{ $item->image }}" alt="{{ $item->title }}"></a>

        <div class="introtext">{!! $item->introtext !!}</div>
        <div class="fulltext">{!! $item->fulltext !!}</div>
       	<div class="clearfix"></div>

 

<div class="list-icons">
<li class="panel-title"><i class="fa fa-camera fa-lg"></i>Посмотреть больше фотографий стеклянных дверей в <a href="/foto/risunki">галерее</a>.</li>
</div>

        <div class="clearfix"></div>


       	@if ($item->sef == 'steklyannye-dveri-dlya-sauny')
        <div class="order">@include('modules.calculators.sauna')</div>
		    <div class="clearfix"></div>
        @elseif ($item->sef == 'santehnicheskie-peregorodki')
        <div class="order">@include('modules.calculators.dush-peregorodka')</div>
        <div class="clearfix"></div>
        @elseif ($item->sef == 'steklyannye-fartuki-dlya-kukhni-skinali')
        <div class="order">@include('modules.calculators.skinali')</div>
        <div class="clearfix"></div>
		    @endif

  </article>







<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id)
<li class="previous"><a href="{{ $previous->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← Пред</a></li>
@endif

<li><a href="/{{ $category->parent->sef }}/{{ $category->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->title }}">&uarr; в раздел</a></li>

@if (!empty($next) and $next->category_id === $item->category_id)
<li class="next"><a href="{{ $next->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">След →</a></li>
@endif
</ul>

@stop