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


	<article>
        <h1 class="page-header margin-0">{{ $link->title }}</h1>

       	<div class="page-content pesok">

		  	@foreach ($img as $item)
		  		<div class="col-xs-12 col-sm-4 col-md-3 padding-5">
                <a href="/img/risunki/sand/{{ $item->getRelativePathName() }}" class="zoom" data-type="image" data-toggle="lightbox" data-gallery="multiimages" title="Nature Portfolio" data-title="Amazing Nature" data-footer="The beauty of nature">
                <img src="/img/risunki/sand/{{ $item->getRelativePathName() }}" class="img-thumbnail img-responsive zoom" style="height:160px;"> 
                <span class="overlay"><i class="fa fa-expand"></i></span>
                </a>
                </div>
                 

    		@endforeach

<br>

{!! $img->render() !!}

       	</div>

    </article>



@stop