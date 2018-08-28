<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>流程</h1>
	@if($isvip)
		<span style="color:red">VIP</span>
	@endif
	<h2>循环控制</h2>
	<h2>选择题</h2>
	lamp 207
	<ul>
		@foreach($classmates as  $v)
			<li>{{$v}}<input type="radio" name="boy"></li>
		@endforeach	
	</ul>
</body>
</html>