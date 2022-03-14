<?php
$name = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
</head>

<body>
	<header>
		<nav>
			<ul>
				@foreach ($menu_items as $menu_item)
				<li>
					<a href="{{$menu_item['href']}}">{{$menu_item['name']}}</a>
				</li>
				@endforeach
			</ul>
		</nav>
	</header>
	<h1>Hello World!</h1>
	<h1>Ciao Mondo!</h1>
	<h1>👋🏼🌍!</h1>
</body>

</html>