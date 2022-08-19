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
		var cv = document.getElementById('micanvas');
		var ctx = cv.getContext('2d');
		var Sx = 240;
		var Sy = 240;

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

		function paint(){
			
			ctx.fillStyle = "white";
			ctx.fillRect(Sx-15, Sy-15, 100, 100);
			ctx.fillRect(Sx+15, Sy+15, 100, 100);

			ctx.fillStyle = "blue";
			ctx.fillRect(Sx, Sy, 60, 60);
			ctx.strokeRect(Sx, Sy, 60, 60);


		}
		/*
		var color = "red";
		var fig = "arc";
		var press;

		/*ctx.strokeStyle="white";
		ctx.strokeRect(10,10,150,150);

		ctx.strokeStyle="black";
		ctx.strokeRect(80,80,150,150);
		*/
		/*ctx.fillStyle="blue"
		ctx.fillRect(10,10,50,50);

		ctx.fillStyle="rgb(0,0,1,.5)"
		ctx.fillRect(30,30,50,50);
		*/

		/* primer trabajo*/
		/*
		ctx.fillStyle="blue"
		ctx.fillRect(30,30,50,50);

		ctx.fillStyle="red"
		ctx.fillRect(70,70,50,50);

		ctx.fillStyle="rgb(200,0,50,.5)"
		ctx.fillRect(110,110,50,50);
		*/

		// segundo trabajo
		/*
		ctx.moveTo(0,0);
		ctx.lineTo(250,250);
		ctx.stroke();
		

		
		ctx.moveTo(200,150);
		ctx.lineTo(300,250);
		ctx.stroke();


		ctx.fillStyle="pink";
		ctx.moveTo(200,250);
		ctx.lineTo(250,300);
		ctx.lineTo(250,200);
		ctx.lineTo(200,250);
		ctx.stroke();
		ctx.fill();
		*/


		//tercer trabajo
		/*
		ctx.beginPath();
		ctx.arc(250,100,50,0,2*Math.PI);
		ctx.stroke();

		ctx.beginPath();
		ctx.arc(360,100,50,0,2*Math.PI);
		ctx.stroke();
		ctx.fill();
		*/

		//ctx.fill();

		//trabajo 4
		/*
		ctx.font = "30px Arial";
		ctx.fillText("hola mundo",50,30);

		ctx.strokeText("hola mundo",50,60);
		*/
		//trabajo 5
		var grd = ctx.createLinearGradient(0,0,200,0);
		/*
		grd.addColorStop(0,"red");
		grd.addColorStop(0.5,"yellow");
		grd.addColorStop(1,"blue");

		ctx.fillStyle = grd;
		ctx.fillRect(20, 20, 150, 100);
		*/
		/*
		var grd = ctx.createLinearGradient(100,10,40,90,60);
		grd.addColorStop(0,"red");
		grd.addColorStop(0.5,"yellow");
		grd.addColorStop(1,"blue");

		ctx.fillStyle = grd;
		ctx.fillRect(100, 100, 200, 80);
		*/

		//trabajo 6
		/*
		var img = document.getElementById("imagen");
  		ctx.drawImage(img, 10, 10);
		*/
		
  		//trabajo 7
  		/*
  		cv.addEventListener('click', function(e){
  			//ctx.fillStyle = grd;
  			//ctx.fillRect(e.offsetX-20,e.offsetY-20,40,40);
  			//ctx.fillStyle="rgb(200,0,50,.5)";
  			ctx.fillStyle= color;
  			
  			if(fig=='rec'){
  				ctx.fillRect(e.offsetX-20,e.offsetY-20,40,40);
  				ctx.fillStyle="rgb(200,0,50,.5)";
  			}
  			else{
  				ctx.beginPath();
				ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
				ctx.fill();
  			}
  			
  			/*
  			ctx.beginPath();
			ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
			ctx.fill();
			*/
  			//ctx.fillRect(20, 20, 150, 100);
  		/*
  	 	});
		
  		/*
  		//trabajo 7
  		cv.addEventListener('mouseover', function(e){
  			color = random_rgba();

   		});

  		//trabajo 8
  		cv.addEventListener('mouseout', function(e){
  			fig = (fig=='arc')?'rec':'arc';

   		});
   		*/
  		/*
   		//trabajo 9 dibujar con el mouse mientras pases por el area del canvas
   		cv.addEventListener('mousemove', function(e){
   			if(press){
   				ctx.fillStyle="rgb(200,0,50,.5)";
   				//ctx.fillStyle= color;
   				ctx.fillRect(e.offsetX-20,e.offsetY-20,10,10);
   			}
   			

   		});
   		*/
   		/*
   		//trabajo 10 pulsar para dibujar los cuadrados (y un if en el trabajo 9)
   		cv.addEventListener('mousedown', function(e){
   			press = true;

   		});
   		cv.addEventListener('mouseup', function(e){
   			press = false;

   		});

   		//trabajo 11
   		cv.addEventListener('key', function(e){
   			press = true;

   		});
   		*/
	</script>

</body>

</html>