@extends('layout.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Thumbs</div>

				<div class="panel-body">
					Thumb has been created.
				
				{{ var_dump($files) }}

				{{ var_dump($thumbnails) }}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
