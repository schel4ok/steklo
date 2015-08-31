@extends('backend.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Админка</div>

				<div class="panel-body">


<h3>Import excel</h3>
					

<h3>Check nested set tree</h3>
<h5>Дерево сломано?</h5> {{ var_dump($brokentree) }}
<h5>Список ошибок дерева:</h5> {{ var_dump($errorstree) }}


<h3>Generate thumbnails</h3>

					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
