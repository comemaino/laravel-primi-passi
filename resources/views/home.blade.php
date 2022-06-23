<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Laravel primi passi</title>
</head>

<body>
		<header>
				@include('header')
		</header>
		<main>
				<h1>
						Hello Tutor
				</h1>

				<ul>
						@foreach ($services as $service)
								<li>
										<img src="https://placebear.com/200/200" alt="">
										<h4>{{ $service['name'] }}</h4>
										<p>{{ $service['description'] }}</p>

								</li>
						@endforeach
				</ul>
		</main>
</body>

</html>
