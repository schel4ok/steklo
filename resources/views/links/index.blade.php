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


		<div class="panel-primary">
		  <div class="panel-heading">
		      <h3 class="panel-title">{{ $category->title }}</h3>
		  </div>
		  <div class="panel-body">


		  			@foreach ($categories as $item)
        				<div class="col-sm-4 {{ $item->class }}" align="center">
                {!! HTML::link('links/'.$item->sef, $item->title, array('class' => 'link', 'title' => $item->title)) !!}
        				</div>
        			@endforeach


  		  </div>
  		</div>

{!! $categories->render() !!}

@endsection
