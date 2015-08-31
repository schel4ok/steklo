@extends('layout.main')


@section('title')
Ссылки на {{ $category->title }} о стекле, фурнитуре и изделиях из стекла
@stop

@section('keywords')
Ссылки, файлы, {{ $category->title }}, стекло, фурнитура, Стекло Групп
@stop

@section('description')
Ссылки на {{ $category->title }} о стекле, фурнитуре и изделиях из стекла от компании Стекло Групп
@stop


@section('content')


		<div class="panel-primary">
		  <div class="panel-heading">
		      <h1 class="panel-title">{{ $category->title }}</h1>
		  </div>
		  <div class="panel-body">

            @foreach ($links as $item)
        				<article class="row">
        				@if ( File::extension($item->url) == 'pdf')
        					<i class="fa fa-file-pdf-o text-primary"></i>
        				@elseif ( File::extension($item->url) == 'xls' or File::extension($item->url) == 'xlsx')
        					<i class="fa fa-file-excel-o text-primary"></i>
        				@elseif ( File::extension($item->url) == 'zip' or File::extension($item->url) == 'rar')
        					<i class="fa fa-file-archive-o text-primary"></i>
						@else
							<i class="fa fa-file-o text-primary"></i>
        				@endif


                {!! HTML::link($item->url, $item->title, array('class' => 'link', 'title' => $item->title)) !!}
        				</article>
        		@endforeach

  		  </div>
  		</div>


{!! $links->render() !!}


@endsection
