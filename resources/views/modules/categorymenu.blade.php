<div class="panel panel-primary col-md-3 padding-left-0">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-bars text-primary"></i> Фотогалерея</h3>
	</div>
	<div class="panel-body">
		<ul class="icon-list">

		@foreach ($items as $item)
        	<li><a href="{!! $item->sef !!}" class="link" title="{!! $item->title !!}">{!! $item->title !!}</a>
        	</li>
        @endforeach
        </ul> 
  	</div>
</div>


