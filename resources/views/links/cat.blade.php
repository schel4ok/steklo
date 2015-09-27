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

    <h1>{{ $category->title }}</h1>

        @foreach ($items as $item)
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

        		<a href="/{!! $item->url !!}" class="link" title="{!! $item->title !!}">{!! $item->title !!}</a>

        	</article>
        @endforeach


{!! $items->render() !!}


<ul class="pager">
@if (!empty($previous))
<li class="previous"><a href="/{{ $previous->parent->sef }}/{{ $previous->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← {{ $previous->title }}</a></li>
@endif

<li><a href="/{{ $category->parent->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->parent->title }}">&uarr; в раздел</a></li>

@if (!empty($next))
<li class="next"><a href="/{{ $next->parent->sef }}/{{ $next->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">{{ $next->title }} →</a></li>
@endif
</ul>


@endsection
