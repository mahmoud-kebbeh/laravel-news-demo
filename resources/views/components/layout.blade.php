<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel News</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
	<div class="wrapper">
		<a class="btn" href="/">Home</a>
		<header class="header">
			<nav class="nav">
				<a href="/news">News</a>
				<a href="/categories">Categories</a>
				<a href="/tags">Tags</a>
			</nav>
			<x-search />
		</header>
		<main class="main">
		  {{ $slot }}
	  </main>
		<footer class="footer">
			<p>Copyright &copy; 2020 - {{ date("Y"); }}. <a href="https://laravel.com/docs/10.x/">Laravel</a>, All rights reserved.</p>
		</footer>
	</div>
</body>
</html>