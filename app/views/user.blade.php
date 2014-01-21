<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel localization flags</title>
	{{ HTML::style('css/styles.css') }}
	{{ HTML::style('css/flags.css') }}
</head>
<body>
	<div class="welcome">
		<a href="http://laravel.com" title="Laravel PHP Framework"><img src="{{url('images/laravel.png')}}"></a>
		<h1>@lang('messages.hello') {{$name}}</h1>
		<div>
			{{LaravelLocalization::getLanguageBar()}}
		</div>
		<div>
			<a href="{{route('home')}}">
				@lang('messages.home')
			</a>
		</div>
	</div>
</body>
</html>
