@extends('layout.main')


@section('title')
{{ $link->title }}
@stop

@section('keywords')
{{ $link->title }}, стекло, фурнитура, Стекло Групп
@stop

@section('description')
{{ $link->title }} о стекле, фурнитуре и изделиях из стекла от компании Стекло Групп
@stop


@section('content')

<h1>{{ $link->title }}</h1>
	
	<article class="gallery" id="fotogallery">

		@foreach ($img as $item)
                <a href="/img/risunki/pesok/{{ $item->getRelativePathName() }}" class="col-xs-6 col-sm-4 col-md-3 padding-5" title="каталог пескоструйных рисунков">
                <img src="/img/risunki/pesok/{{ $item->getRelativePathName() }}" class="img-thumbnail img-responsive" style="height:160px;"> 
                </a>
    	@endforeach
    </article>

       	<div class="clearfix"></div>
		{!! $img->render() !!}


<ul class="pager"><li><a href="/{{ $category->parent->sef }}/{{ $category->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->title }}">&uarr; в раздел</a></li></ul>

@stop