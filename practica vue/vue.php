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
	<div id="contenedor">
		
		<p>
			{{users}}
		</p>
		<form>
			<fieldset>
				<legend>
					datos acceso
				</legend>
				<label>
					correo electronico
				</label>
				<input type="email" v-model="email" name="">
				<br>

				<label>
					password
				</label>
				<input type="password" v-model="password" name="">
				<br>

				<button @click="login">
					acceder
				</button>

			</fieldset>
		</form>
			
		
		
	</div>
	<script src="https://unpkg.com/vue@3"></script>
	<script type="text/javascript">

		const {createApp} = Vue

		
		
		const app = createApp({
			data(){
				return{
					users:null,
					email:"",
					password:""
				}
			},
			methods:{
				login(e){
					var tmp_mail = this.email;
					var tmp_pwd = this.password;

					var access = this.users.map(function(u){
						if (tmp_mail === u.email) {
							if (tmp_pwd === u.password) {
								/*
								var tmp_usr ={
									name: u.name,
									username: u.username,
									email: u.email
								}

								localStorage.setItem('user',JSON.stringify(u.name))
								*/
								alert("acceso consedido")
								window.location.href = "users.html"
							}
							
						}
						
					})
					alert("denegado")

					console.log(this.email)
					console.log(this.password)

					e.preventDefault()
				}

			},
			mounted(){
				fetch('data/users.json')
					.then((res)=> res.json())
					.then((json)=>(this.users = json))
					.catch((err)=> (alert('no data')))
			}

		}).mount('#contenedor')

		
		
	</script>
	
</body>

</html>