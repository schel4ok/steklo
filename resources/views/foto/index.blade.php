@extends('layout.main')


@section('title')
{{ $category->metatitle }}
@stop

@section('keywords')
{{ $category->metakey }}
@stop

@section('description')
{{ $category->metadesc }}
@stop


@section('content')

<h1>{{ $category->title }}</h1>

<div class="category">
 @foreach ($categories as $item)
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 padding-5">
		<a href="{{ $category->sef }}/{{ $item->sef }}" class="thumbnail">
		<img src="{{ $item->image }}" alt="{{ $item->title }}">
		</a>
		<span class="caption">{{ $item->title }}</span>
	</div>
 @endforeach
</div>


@endsection
