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

		<br>

		<label>
			Apellido
		</label>
		<input type="text" name="lastname">
		<br>

		<label>
			Email
		</label>
		<input type="email" name="email">

		<br>

		<label>
			Contraseña
		</label>
		<input type="password" name="password">

		<br>

		<button>
			Guardar
		</button>
	</form>
</body>
</html>
