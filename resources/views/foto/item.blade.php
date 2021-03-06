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
<h1>{{ $item->title }}   </h1>

<a class="btn btn-xs btn-outline-blue categorymenu" data-spy="affix" data-offset-top="300" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lg fa-bars"> </i> Фотогалерея</a>


	<article class="gallery" id="fotogallery">
		@foreach ($img as $node)
        <a href="/img/foto/{{$item->sef}}/{{$node->getRelativePathName()}}" class="col-xs-6 col-sm-4 col-md-3 padding-5" title="{{$item->title}}">
          <img src="/img/foto/thumbs/{{$node->getRelativePathName()}}" class="thumbnail" alt="{{ $item->title }}">
        </a>
    @endforeach
	</article>


  <div class="clearfix"></div>
  {!! $img->render() !!}


<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id )
<li class="previous"><a href="{{ $previous->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← Пред</a></li>
@endif

<li><a href="/{{ $category->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->title }}">&uarr; в раздел</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="{{ $next->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">След →</a></li>
@endif
</ul>

@stop