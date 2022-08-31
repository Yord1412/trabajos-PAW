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
		<h1>
			{{name}}

		</h1>
		{{lastname}}

		<form>
			<fieldset>
				<legend>Datos personales</legend>
				<input type="text" v-model="name" name="">
				<input type="text" v-model="lastname" name="">
			</fieldset>
		</form>

		<button @click="saludar" >
			saludar
		</button>

		<form>
			<fieldset>
				<legend>Calculadora</legend>
				<input type="" v-model="num1" name="">
				<input type="" v-model="num2" name="">
				<button @click="sumar" >
					sumar
				</button>
				<p>
					{{resultado}}
				</p>
			</fieldset>

			<fieldset>
				<label>
					ingrese su edad
				</label>
				<input type="" v-model="age" name="">
				<h1 v-if="age>=18">
					pasele a pistear
				</h1>
				<h1 v-else>
					no
				</h1>
			</fieldset>

			<h2>
				top salon
			</h2>
			<ol>
				<li v-for="gente in gentes">
					{{gente.name}}:
					{{gente.role}}
				</li>
			</ol>
			<fieldset>
				<label>
					nuevo alumno
				</label>
				<input type="text" v-model="name" name="">
				<input type="text" v-model="role" name="">
				<button @click="addGente" >
					ingresar
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
					name:'Jordy',
					lastname:'Segoviano',
					num1:0,
					num2:0,
					resultado:0,
					age:0,
					gentes:[
						{name:'x',role:'backend'},
						{name:'y',role:'algo'},
						{name:'k',role:'nada'}],
					a_name:"",
					role:""

				}
			},
			methods:{
				saludar(){
					alert("hola: " + this.name + " " + this.lastname)
				},
				sumar(){
					this.resultado = parseInt(this.num1) +
						parseInt(this.num2)
					
				},
				addGente(){
					this.gentes.push({name:this.a_name, 
						role:this.role})
				}
			}

		}).mount('#contenedor')

		
		
	</script>
	
</body>

</html>