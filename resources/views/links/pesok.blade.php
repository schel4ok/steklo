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
	
	<article class="pesok">

		@foreach ($img as $item)
		  	<div class="col-xs-12 col-sm-4 col-md-3 padding-5">
                <a href="/img/risunki/pesok/{{ $item->getRelativePathName() }}" class="zoom" data-lightbox="pesok" 
                data-title="каталог пескоструйных рисунков">
                	<img src="/img/risunki/pesok/{{ $item->getRelativePathName() }}" class="img-thumbnail img-responsive zoom" style="height:160px;"> 
                	<span class="overlay"><i class="fa fa-expand"></i></span>
                </a>
            </div>
    	@endforeach
    </article>

       	<div class="clearfix"></div>
		{!! $img->render() !!}


<ul class="pager"><li><a href="/links/{{ $category->sef }}">&uarr; в категорию</a></li></ul>

@stop