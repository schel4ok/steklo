<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="rights" content="schel4ok" />

    <title>@yield('title', 'Стеклянные двери, стеклянные перегородки, душевые кабины, фурнитура для стекла') 
    | 8 (495) 790-84-15 Стекло Групп</title>

	<meta name="keywords" content="@yield('keywords', 'стеклянные двери, цельностеклянные перегородки, стеклянные душевые кабины, зеркала, стеклянные полки и стеллажи, мебель из стекла и другие конструкции на заказ')" />

  	<meta name="description" content="@yield('description', 'Производство и монтаж стеклянных дверей, цельностеклянных перегородок, стеклянных душевых кабин, зеркал, стеклянных полок...')" />

	<link rel="stylesheet" href="{{ elixir("css/app.css") }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>

<div id="main" class="container-fluid">

		<header class="main-header">
            <form class="search pull-left">
               <i class="fa fa-search"> </i><input type="text" name="search" class="form-control fa fa-search" placeholder=" Найти...">
            </form>
			@include('modules.topmenu')

			<div class="callback">
                    <a href="/" class="root"> </a>
                    <p>8 (495) 790 84 15<br>
                    <a href="mailto:sales@steklo-group.ru">sales@steklo-group.ru</a><br>
                    <a class="btn btn-primary btn-large" href="#callback" title="Обратный звонок" data-toggle="modal" data-target="#callback">
                    <i class="fa fa-phone"> </i> Обратный звонок</a></p>
            </div>
			@include('modules.mainmenu')
		</header>

		@include('modules.breadcrumbs', [ 'bread' => $category ])

		<section id="content" class="content col-md-12" style="clear:both;">@yield('content')</section>
		<div class="clearfix"></div>
		<section id="bottommodules" style="clear:both;">@yield('bottommodules')</section>

</div><!-- ./ #main -->

 	@include('modules.totop')
 	@include('modules.callback')
	<!-- Scripts -->
	<script src="{{ elixir("js/all.js") }}"></script>


</body>
</html>

{{ $_SERVER['REQUEST_URI'] }}
