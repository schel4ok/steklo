@extends('layout.main')


@section('title')
Полезная информация связанная со стеклом, стеклянными конструкциями, фурнитурой и строительством.
@stop

@section('keywords')
Полезная информация, частые вопросы, стекло, фурнитура, Стекло Групп
@stop

@section('description')
Частые вопросы наших клиентов и другая полезная информация, связанную со строительством, стеклом и стеклянными конструкциями от компании Стекло Групп
@stop


@section('content')

<h1>{{ $category->title }}</h1>

<div class="category furnitura">
 @foreach ($categories as $item)
	<div class="col-xs-6 col-sm-4 col-md-3 padding-5">
		<a href="{{ $category->sef }}/{{ $item->sef }}" class="thumbnail" title="{{ $item->title }}">
			<img src="/{{ $item->image }}" alt="{{ $item->title }}">
			<span class="caption">{{ $item->title }}</span>
		</a>
	</div>
 @endforeach
</div>

<div class="clearfix"></div>
{!! $categories->render() !!}

@endsection
