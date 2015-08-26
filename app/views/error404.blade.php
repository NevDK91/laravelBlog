<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>MySite</title>
@include('layouts.links_css')
</head>
<body>
<br><br>
<center>
{{ HTML::link('/', 'На главную') }}
<h3>Вы были перенаправлены на эту страницу потому, что</h3></center>
<div class="container">
<div class="row">
	
	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<div class="panel panel-default bg-danger">
		<p class="text-danger text-center">{{ $error404 }}</p>
		</div>
	</div>

</div>
</div>

@include('layouts.scripts')
</body>
</html>
