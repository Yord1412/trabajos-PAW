<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		vue
	</title>
	

</head>
<body>
	<div id="myapp">
		<h1>
			hello {{ name }}
		</h1>
		
	</div>
	<script src="https://unpkg.com/vue@3"></script>
	<script type="text/javascript">
		
		const { createApp } = Vue

		createApp({
			data(){
				return{
					name: 'Jordy Segoviano'
				}
			}
		}).mount('#myapp')
	</script>
	

</body>

</html>