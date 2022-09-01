<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Examen 1
	</title>
	<style type="text/css">
		canvas{
			/*background-color: red;*/
			margin: auto;
		}
	</style>

</head>
<body>
	<canvas id="miexam" width="1000" height="1000">
		Tu navegador no soporta canvas
	</canvas>

	<script type="text/javascript">
		var cv = null;
		var ctx = null;
		var player = null;
		var Sx = 20;
		var Sy = 20;
		var score = 0;
		var wall = new Array(10);
		var wallRomp =new Array(5);

		var imgplayer = new Image();
		var imgpared = new Image();
		var imgparedromp = new Image(); 

		var pause = false;

		function start(){
			cv = document.getElementById('miexam');
			ctx = cv.getContext('2d');

			player = new cuadrado(Sx, Sy, 30, 30);

			wall = new cuadrado(100, 100, 40,40);

			imgplayer.src = 'player.png';
			imgpared.src = 'pared.png';
			imgparedromp.src = 'paredromp.png'
			paint();
		}

		function paint(){
			
			window.requestAnimationFrame(paint)

			
			ctx.fillStyle = "white";
			
			ctx.fillRect(0, 0, 1000, 1000);
			
			

			player.dibujar(ctx);
			wall.dibujar(ctx);

			ctx.drawImage(imgpared, wall.x,wall.y,40,40);
			ctx.drawImage(imgplayer, player.x, player.y, 30, 30);

			ctx.fillStyle = "black";
			ctx.fillText("TIME: " + score, 10,10 );
			

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
			if(player.se_tocan(wall)){
				if(direction == 'left'){
					player.x += 40;
				}

				if(direction == 'right'){
					player.x -= 40;
				}

				if(direction == 'up'){
					player.y += 40;
				}
				
				if(direction == 'down'){
					player.y -= 40;
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
				Sy -= 40;
				player.y -=40;
			}
			//abajo
			if(e.which == 83 || e.which == 40){
				direction = 'down';
				Sy += 40;
				player.y +=40;
			}
			//izquierda
			if(e.which == 65 || e.which == 37){
				direction = 'left';
				Sx -= 40;
				player.x -=40;
			}
			//derecha
			if(e.which == 68 || e.which == 39){
				direction = 'right';
				Sx += 40;
				player.x +=40;
			}
			//paint();

			//pausa
			if(e.which == 32){
				//pause = true;
				pause = (pause)?false:true;
			}
		})
	</script>

</body>

</html>