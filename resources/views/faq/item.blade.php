@extends('layout.main')

@section('content')

	<article>

        <i class="fa fa-calendar text-primary"> {{ date('d M Y', strtotime($item->created_at)) }} </i>
        <h1 class="page-header margin-0">{{ $item->title }}</h1>

       	<div class="page-content">
       	{!! HTML::image($item->image, $alt = $item->title, array('class' => 'thumbnail img-responsive pull-left')) !!}
        <div class="introtext">{!! $item->introtext !!}</div>
        <div class="fulltext">{!! $item->fulltext !!}</div>
       	<div class="clearfix"></div>
       	</div>

    </article>

@stop