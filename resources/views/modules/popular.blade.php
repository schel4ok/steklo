		<div class="panel panel-primary">
		  <div class="panel-heading">
		      <h3 class="panel-title"><i class="fa fa-star-o text-primary"></i> Популярное</h3>
		  </div>
		  <div class="panel-body">

		  			<div class="list-icons">
		  			@foreach ($popular as $item)
		  				<div>
        				<div class="fa fa-hand-o-right"></div> 
        				<div>{{ $item->title }}</div>
        				</div>
        			@endforeach
        			</div> 

  		  </div>
  		</div>
