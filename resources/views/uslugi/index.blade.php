@extends('layout.main')


@section('title')
Услуги о стекле, фурнитуре и изделиях из стекла 
@stop

@section('keywords')
Услуги, Стекло Групп, стекло, фурнитура для стекла, изделия из стекла 
@stop

@section('description')
Услуги компании Стекло Групп о стекле, фурнитуре и изделиях из стекла 
@stop

@section('content')

<h1>{{ $category->title }}</h1>

<div class="uslugi">
  @foreach ($items as $item)
        <article class="col-sm-6 col-xs-12">
          <h3><a href="/{{ $category->sef }}/{{ $item->sef }}" class="link" title="{{ $item->title }}">{!! $item->title !!}</a>
          </h3>

            <img src="/img/{{ $category->sef }}/{{ $item->image }}" alt="{{ $item->title }}" class="img-responsive pull-left">
            <div class="introtext">{!!  $item->introtext !!}
            <a href="/{{ $category->sef }}/{{ $item->sef }}" class="btn btn-default pull-right" title="{{ $item->title }}">Подробнее</a></div>
        </article>
    @endforeach
</div>
@endsection
