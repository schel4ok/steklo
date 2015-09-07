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

<div class="cat">

	@foreach ($categories as $item)
		<div class="flexitem">
			<a class="thumbnail" href="faq/{{ $item->sef }}">
				<img src="{{ $item->image }}" alt="{{ $item->title }}">
			</a>
			<span class="caption">{{ $item->title }}</span>
		</div>
    @endforeach

</div>
{!! $categories->render() !!}

@endsection
