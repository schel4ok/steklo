@extends('layout.main')

@section('content')


<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
  				@foreach ($tree as $node)

  					<li class="dropdown"><a href="{{ $node->sef }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $node->title }} <span class="caret"></span></a>
						    <ul class="dropdown-menu" role="menu">
  								@foreach ($node->children as $child)
  									<li><a href="{{ $child->sef }}">{{ $child->title }}</a></li>
								@endforeach
						    </ul>
  					</li>



  				@endforeach					
			</ul>
		</div>
    </div>
</nav>



<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">


				</div>
			</div>
		</div>
	</div>
</div>
@endsection





