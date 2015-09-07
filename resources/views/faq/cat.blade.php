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
<ul class="pager"><li><a href="/faq">&uarr; в раздел</a></li></ul>

@endsection
