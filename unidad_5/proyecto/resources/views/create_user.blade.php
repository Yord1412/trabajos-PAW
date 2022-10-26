<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>
		Regsitrar usuarios
	</h1>
	<form method="post" action="http://127.0.0.1:8000/users/">

		@csrf
		<label>
			Nombre
		</label>
		<input type="text" name="name">

		<label>
			Email
		</label>
		<input type="email" name="email">

		<button>
			Guardar
		</button>
	</form>
</body>
</html>
