<nav class="navbar navbar-default navbar-right topmenu">
		<header class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</header>
		<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
			<ul class="nav menu nav-pills">
  				@foreach ($tree as $node)  
  					@if ($node->menutype == 'topmenu')
  					<li><a href="/{{ $node->sef }}" class="{{ $node->class }} {{ Request::is($node->sef. '*') ? 'active' : '' }}"> {{ $node->title }}</a></li>
  					@endif
  				@endforeach		
				<li><a class="fa fa-star-o" rel="sidebar" data-toggle="tooltip" data-placement="bottom"
    			title="В избранное" data-original-title="В избранное" href=""
    			onclick="this.title=document.title;this.href=document.URL;if(window.external &&
    			(!document.createTextNode || (typeof(window.external.AddFavorite)=='unknown')))
   	 			{window.exterToggle Navigationnal.AddFavorite(document.URL, document.title);return false}">
    			<span> В избранное</span></a></li>	
			</ul>
		</div>
</nav>
