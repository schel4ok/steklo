@extends('layout.main')

@section('content')

		<div class="panel-primary">
		  <div class="panel-heading">
		      <h3 class="panel-title">{{ $category->title }}</h3>
		  </div>
		  <div class="panel-body">


		  			@foreach ($categories as $item)
        				<div class="col-sm-4 {{ $item->class }}" align="center">
                		<a href="{{ $category->sef.'/'.$item->sef }}" title="{{ $item->title }}">{{ $item->title }}</a>
        				</div>
        			@endforeach


  		  </div>
  		</div>

{!! $categories->render() !!}

@endsection
