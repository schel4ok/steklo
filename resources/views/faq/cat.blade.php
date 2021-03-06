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

  @foreach ($items as $item)
      <article class="row">
        <a href="{{ $category->sef.'/'.$item->sef }}" title="{{ $item->title }}">{{ $item->title }}</a>
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
