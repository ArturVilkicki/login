<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Main page</h1>
		<div class="row">
			<div class="col">
				
				Sveiki, <?= $vardas; ?> (<a class="btn btn-sm btn-dark" href="?logout=true">Logout</a>)
			</div>
		</div>
	</div>
</body>
</html>