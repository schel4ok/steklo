@extends('layout.main')

@section('content')

		<div class="panel-primary">
		  <div class="panel-heading">
          <h1 class="panel-title">{{ $category->title }}</h1>
		  </div>

		  <div class="panel-body">

            @foreach ($links as $item)
        				<article class="row">
        				<i class="fa info-circle text-primary"> </i>
                    <a href="{{ $category->sef.'/'.$item->sef }}" title="{{ $item->title }}">{{ $item->title }}</a>
        				</article>
        		@endforeach


  		  </div>
  		</div>


{!! $links->render() !!}

@endsection
