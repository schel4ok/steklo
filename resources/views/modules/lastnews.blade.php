		<div class="panel panel-primary">
		  <div class="panel-heading">
		      <h3 class="panel-title"><i class="fa fa-newspaper-o text-primary"></i> Последние новости</h3>
		  </div>
		  <div class="panel-body">
		  			<ul class="icon-list">

		  			@foreach ($lastnews as $new)
        				<li><i class="fa fa-calendar"> {{ date('d M Y', strtotime($new->created_at)) }} </i> | {!! HTML::link('news/'.$new->sef, $new->title, array('class' => 'link', 'title' => $new->title)) !!} </li>
        			@endforeach




        			</ul> 
  		  </div>
  		</div>


