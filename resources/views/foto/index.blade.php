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

<div class="cat">

	@foreach ($categories as $item)
		<div class="flexitem">
			<a class="thumbnail" href="foto/{{ $item->sef }}">
				<img src="{{ $item->image }}" alt="{{ $item->title }}">
			</a>
			<span class="caption">{{ $item->title }}</span>
		</div>
    @endforeach

</div>

@endsection
