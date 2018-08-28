<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
</head>
<body>
	@include('layouts/header')
	<h5>{{$username or 'vip'}}</h5>
	<p>{{date('Y-m-d')}}</p>
	<h2>{{$title}}</h2>
	<h1>{{$content}}</h1>
	<p>{!!$pages!!}</p>
	@include('layouts/footer')
</body>
</html>