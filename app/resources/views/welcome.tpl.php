<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="{{ $__charset__ }}">
		<title>Mako {{mako\Mako::VERSION}}</title>
		<style>
			body
			{
				background: #eee;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-weight: bold;
				padding:0px;
				margin:0px;
			}
			a
			{
				color: #03C5A0;
				text-decoration: none;
			}
			a:hover
			{
				color: #067761;
			}
			.welcome
			{
				text-align: center;
				top: 50%;
				left: 50%;
				position: absolute;
				transform: translate(-50%, -50%);
			}
			.mako
			{
				font-size: 200px;
			}
		</style>
	</head>
	<body>
		<div class="welcome">
			<span class="mako"><a title="Head over to the documentation" href="https://makoframework.com/docs">MAKO</a></span>
		</div>
	</body>
</html>
