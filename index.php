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
		var cv = document.getElementById('micanvas');
		var ctx = cv.getContext('2d');

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
		
		ctx.fillStyle="blue"
		ctx.fillRect(30,30,50,50);

		ctx.fillStyle="red"
		ctx.fillRect(70,70,50,50);

		ctx.fillStyle="rgb(200,0,50,.5)"
		ctx.fillRect(110,110,50,50);
		

		// segundo trabajo
		
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
		


		//tercer trabajo
		
		ctx.beginPath();
		ctx.arc(250,100,50,0,2*Math.PI);
		ctx.stroke();

		ctx.beginPath();
		ctx.arc(360,100,50,0,2*Math.PI);
		ctx.stroke();
		ctx.fill();
		

		//ctx.fill();

		//trabajo 4
		
		ctx.font = "30px Arial";
		ctx.fillText("hola mundo",50,30);

		ctx.strokeText("hola mundo",50,60);
		
	</script>

</body>

</html>