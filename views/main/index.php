<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="public/css/output.css" rel="stylesheet">
  <title> Nosotros</title>
</head>
<body>
<br>
<br>
<nav>
  <ul>
	 <li><a href="#">Sobre nosotros</a></li>   
  </ul>
</nav>

	<style>
		.container {
			display: flex;
			flex-direction: row;
			align-items: center;
			flex-wrap: wrap;
			justify-content: center;
		}

		.texto {
			flex: 1;
			margin: 20px;
			font-family: Arial, sans-serif;
			font-size: 18px;
			line-height: 1.5;
			color: #333;
			left: 180px;
			margin-left: 30px;		
			max-width: 600px;
			word-wrap: break-word;
			text-overflow: ellipsis;
			overflow: hidden;

				
		}

		img {
            max-width: 310px;
			margin-left: 200px;
			height: auto;
			margin: 75px;
            border-radius: 20px;
             box-shadow: 0px 3px 5px rgba(15,15,15,  .5);
		}

		@media screen and (max-width: 300px) {
			.container {
				flex-direction: column;
				align-items: flex-start;
				justify-content: flex-start;
			}

			.texto {
                text-align: center;
				        direction: ltr;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="public/img/logoNosotros.png" alt="Mi imagen">
		<div class="texto">
			<h3> ¿ QUE VAPING CLOUD?</h3>
			<p>Lorem Ipsum es simplemente el texto de relleno de
				 las imprentas y archivos de texto. Lorem Ipsum ha
				  sido el texto de relleno estándar de las industrias 
				  desde el año 1500, cuando un impresor (N. del T. 
				  persona que se dedica a la imprenta) desconocido usó 
				  una galería de textos y los mezcló de tal manera que
	             logró hacer un libro de textos especimen.
	</div>
   
</body>
</html>