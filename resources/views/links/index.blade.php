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


<div class="cat">

	@foreach ($categories as $item)
		<div class="flexitem">
			<a class="thumbnail" href="links/{{ $item->sef }}">
				<img src="{{ $item->image }}" alt="{{ $item->title }}">
			</a>
			<span class="caption">{{ $item->title }}</span>
		</div>
    @endforeach

</div>


{!! $categories->render() !!}

@endsection
