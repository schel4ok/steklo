		<div class="panel panel-primary">
		  <div class="panel-heading">
		      <h3 class="panel-title"><i class="fa fa-star-o text-primary"></i> Популярное</h3>
		  </div>
		  <div class="panel-body">
		  			<ul class="icon-list" >

		  			@foreach ($popular as $item)
        				<li><i class="fa fa-hand-o-right text-primary"></i> {{ $item->title }} </li>
        			@endforeach


        			</ul> 

  		  </div>
  		</div>
