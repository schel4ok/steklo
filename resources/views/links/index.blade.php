@extends('layout.main')


@section('title')
Ссылки на материалы о стекле, фурнитуре и изделиях из стекла
@stop

@section('keywords')
Ссылки, файлы, каталоги, госты, справочники, стекло, фурнитура, Стекло Групп
@stop

@section('description')
Ссылки на материалы о стекле, фурнитуре и изделиях из стекла от компании Стекло Групп
@stop


@section('content')

<h1>{{ $category->title }}</h1>

<div class="category links">
 @foreach ($categories as $item)
	<div class="col-xs-6 col-sm-4 padding-5">
		<a href="{{ $category->sef }}/{{ $item->sef }}" class="thumbnail">
		<img src="{{ $item->image }}" alt="{{ $item->title }}">
		</a>
		<span class="caption">{{ $item->title }}</span>
	</div>
 @endforeach
</div>

<div class="clearfix"></div>
{!! $categories->render() !!}

@endsection
