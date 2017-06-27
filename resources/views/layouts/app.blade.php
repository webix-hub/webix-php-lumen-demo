<!DOCTYPE html>
<html>
	<head>
		<title>Webix PHP (Lumen) - samples</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/assets/styles.css">

		<script type="text/javascript" src="//cdn.webix.com/edge/webix_debug.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.webix.com/edge/webix.css">
	</head>
	<body>
		<h1 class='header'>
			<a href="/">
			<div class="webix-logo"></div>
			PHP (Lumen) Samples
			<a class='docs' href='https://docs.webix.com/desktop__basic_tasks.html'>Go to docs</span>
			</a>
		</h1>
		<div class='mainarea'>
		<ul class='left'>
@foreach ($pages as $page)
			<li><span>{{ $page["name"] }}</span><ul>
	@foreach ($page["data"] as $sub)
		@if (app("request")->is($sub["url"]))
    		<li class='selected'>
		@else
			<li>
		@endif
				<a href='/{{ $sub["url"] }}'>{{ $sub["name"] }}</a>
			</li>
@endforeach
			</ul></li>
@endforeach
		</ul>
		<content class="right">
			@yield("content")
		</content>
		</div>
	</body>
</html>