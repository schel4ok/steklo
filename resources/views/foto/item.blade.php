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

	<article class="foto">

    <h1>{{ $item->title }}</h1>

	<div class="cat">
		@foreach ($img as $node)
		<div class="flexitem">
            <a href="/img/foto/{{$item->sef}}/{{$node->getRelativePathName()}}" class="thumbnail" data-lightbox="{{$item->sef}}" data-title="{{$item->title}}">
            <img src="/img/foto/thumbs/{{$node->getRelativePathName()}}" alt="{{ $item->title }}"> 
            </a>
		</div>
    	@endforeach
	</div>

  </article>

  <div class="clearfix"></div>
  {!! $img->render() !!}


<ul class="pager"><li><a href="/{{ $category->sef }}">&uarr; в категорию</a></li></ul>


@stop