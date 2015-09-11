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
    	<img src="{!! $item->image !!}" alt="{!! $item->title !!}" class="thumbnail img-responsive pull-left">
        <div class="introtext">{!! $item->introtext !!}</div>
        <div class="fulltext">{!! $item->fulltext !!}</div>
       	<div class="clearfix"></div>


  </article>

@stop