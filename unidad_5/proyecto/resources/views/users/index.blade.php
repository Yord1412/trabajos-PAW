<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background-color: gray;
		}
	</style>
</head>
<body>

	<h1>
		Usuarios del sistema:
	</h1>

	<ol>

		@foreach ($users as $user)
			<li>

				{{ $user->name }} 

				<a href="{{ url('/users', $user->id) }}">
					Editar
				</a>

			</li>
		@endforeach

	</ol>


</body>
</html>