<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		canvas
	</title>
	<style type="text/css">
		canvas{
			/*background-color: red;*/
			margin: auto;
		}
	</style>

</head>
<body>
	<canvas id="micanvas" width="500" height="500">
		Tu navegador no soporta canvas
	</canvas>

	<script type="text/javascript">
		function random_rgba() {
    		var o = Math.round, r = Math.random, s = 255;
    		return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
		}
		var cv = null;
		var ctx = null;
		var player = null;
		var player2 = null; 
		var Sx = 240;
		var Sy = 240;
		var speed = 5;
		var score = 0;
		var wall = null;
		var wall2 = null;

		var imgpared = new Image();
		var imgplayer = new Image();
		var imgplayer2 = new Image(); 

		var sonido = new Audio();	

		var pause = false;

		var direction = 'left';


		function start(){
			cv = document.getElementById('micanvas');
			ctx = cv.getContext('2d');

			player = new cuadrado(Sx, Sy, 40, 40, "green");

			player2 = new cuadrado(generateRandomInteger(500), generateRandomInteger(500), 40, 40, "red");

			wall = new cuadrado(100, 100, 40,80, "gray");
			wall2 = new cuadrado(100, 300, 150,50, "gray");

			imgpared.src = 'pared.png';
			imgplayer.src = 'jugador.png';
			imgplayer2.src = 'twitter.png';
			sonido.src = 'click.mp3';
			paint();
		}

		function paint(){
			
			window.requestAnimationFrame(paint)

			ctx.fillStyle = "white";
			//ctx.font(10, 'arial')
			ctx.strokeText("SCORE: " + score, 10,10 );
			/*
			ctx.fillRect(Sx-15, Sy-15, 100, 100);
			ctx.fillRect(Sx+15, Sy+15, 100, 100);
			*/
			ctx.fillRect(player.x-15, player.y-15, 100, 100);
			ctx.fillRect(player.x+15, player.y+15, 100, 100);
			player.dibujar(ctx);
			player2.dibujar(ctx);
			wall.dibujar(ctx);
			wall.dibujar(ctx);
			ctx.drawImage(imgpared, wall.x,wall.y,40,80);
			ctx.drawImage(imgpared, wall2.x,wall2.y,150,50);
			ctx.drawImage(imgplayer, player.x, player.y, 40, 40);
			ctx.drawImage(imgplayer2, player2.x, player2.y, 40, 40);

			/*
			//ctx.fillStyle = "blue";
			ctx.fillStyle = random_rgba();
			ctx.fillRect(Sx, Sy, 60, 60);
			ctx.strokeRect(Sx, Sy, 60, 60);
			*/
			//update();
			if(pause){
				ctx.fillStyle = "rgba(0,0,0,0.5)";
				ctx.fillRect(0,0,500,500);
				
				
				ctx.fillStyle = "white";
				ctx.fillText("pause",250,250);
				
			}else{

				update();			
			}

		}

		function update(){
			if(direction == 'left'){
				player.x -= 5;
				if(player.x< -40){
					player.x = 500;
				}
			}

			if(direction == 'right'){
				player.x += 5;
				if(player.x>500){
					player.x = 0;
				}
			}

			if(direction == 'up'){
				player.y -= 5;
				if(player.y< -40){
					player.y = 500;
				}
			}
			
			if(direction == 'down'){
				player.y += 5;
				if(player.y>500){
					player.y = 0;
				}
			}

			if(player.se_tocan(player2)){

				ctx.fillRect(player2.x, player2.y, 10, 10);
				ctx.fillRect(player2.x, player2.y, 10, 10);

				player2.x = generateRandomInteger(500);
				player2.y = generateRandomInteger(500);

				score += 10;

				sonido.play();
			}

			if(player.se_tocan(wall) || player.se_tocan(wall2)){
				if(direction == 'left'){
					player.x += 5;
					
				}

				if(direction == 'right'){
					player.x -= 5;
					
				}

				if(direction == 'up'){
					player.y += 5;
					
				}
				
				if(direction == 'down'){
					player.y -= 5;
					
				}
			}

			
		}

		window.addEventListener('load',start)

		window.requestAnimationFrame = (function () {
    		return window.requestAnimationFrame ||
        		window.webkitRequestAnimationFrame ||
        		window.mozRequestAnimationFrame ||
	        	function (callback) {
	            	window.setTimeout(callback, 17);
	        	};
		}());
		
		function cuadrado(x,y,w,h,c){
			this.x = x;
			this.y = y;
			this.w = w;
			this.h = h;
			this.c = c;

			this.se_tocan = function (target) { 
				if(this.x < target.x + target.w &&
				   this.x + this.w > target.x && 
				   this.y < target.y + target.h && 
				   this.y + this.h > target.y)

				{

				return true;  

				}  

			};

			this.dibujar = function(ctx){
				ctx.fillStyle = this.c;
				ctx.fillRect(this.x, this.y, this.w, this.h);
				ctx.strokeRect(this.x, this.y, this.w, this.h);
			}
		}

		
		document.addEventListener('keydown', function(e){
			console.log(e)
			//arriba
			if(e.which == 87 || e.which == 38){
				direction = 'up';
				//Sy -= 5;

			}
			//abajo
			if(e.which == 83 || e.which == 40){
				direction = 'down';
				//Sy += 5;
			}
			//izquierda
			if(e.which == 65 || e.which == 37){
				direction = 'left';
				//Sx -= 5;
			}
			//derecha
			if(e.which == 68 || e.which == 39){
				direction = 'right';
				//Sx += 5;
			}
			//paint();

			//pausa
			if(e.which == 32){
				//pause = true;
				pause = (pause)?false:true;

			}
			
		})

		function generateRandomInteger(max) {
		    return Math.floor(Math.random() * max) + 1;
		}
		
	</script>

</body>

</html>