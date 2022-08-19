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
		var Sx = 240;
		var Sy = 240;

		function start(){
			cv = document.getElementById('micanvas');
			ctx = cv.getContext('2d');

			player = new cuadrado(Sx, Sy, 40, 40, "blue");

			paint();
		}

		function paint(){
			
			window.requestAnimationFrame(paint)

			ctx.fillStyle = "white";
			/*
			ctx.fillRect(Sx-15, Sy-15, 100, 100);
			ctx.fillRect(Sx+15, Sy+15, 100, 100);
			*/
			ctx.fillRect(player.x-15, player.y-15, 100, 100);
			ctx.fillRect(player.x+15, player.y+15, 100, 100);
			player.dibujar(ctx);
			/*
			//ctx.fillStyle = "blue";
			ctx.fillStyle = random_rgba();
			ctx.fillRect(Sx, Sy, 60, 60);
			ctx.strokeRect(Sx, Sy, 60, 60);
			*/
			update();
		}

		function update(){
			player.x += 5;
			if(player.x>500){
				player.x = 0;
			}
			player.y += 5;
			if(player.y>500){
				player.y = 0;
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

			this.dibujar = function(ctx){
				ctx.fillStyle = this.c;
				ctx.fillRect(this.x, this.y, this.w, this.h);
				ctx.strokeRect(this.x, this.y, this.w, this.h);
			}
		}

		/*
		document.addEventListener('keydown', function(e){
			console.log(e)
			//arriba
			if(e.which == 87 || e.which == 38){
				Sy -= 5;

			}
			//abajo
			if(e.which == 83 || e.which == 40){
				Sy += 5;
			}
			//izquierda
			if(e.which == 65 || e.which == 37){
				Sx -= 5;
			}
			//derecha
			if(e.which == 68 || e.which == 39){
				Sx += 5;
			}
			paint();
		})
		*/
	</script>

</body>

</html>