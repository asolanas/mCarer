<!DOCTYPE html>
  <?
include ("connect.php");
mb_internal_encoding('utf8');
header('Content-Type: text/html; charset=utf-8');
?>
<html>
  <head>
    <title>mCarer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
  	
  	
  	<div class="container">
	  	<div class="navbar">
		  <div class="navbar-inner-superior">
		    <table width=100%>
		      <tbody>
			<tr>
			  <td>
			    <a class="brand" href="#"> <img src="imatges/logo_petit.png" alt="m-Carer"> m-Carer</a>
			  </td>
			  <td class="LeyendaTitulo">
			    tu cuidador móvil
			  </td>
			</tr>
		      </tbody>  
		    </table>	    
		  </div>  
		  <div class="navbar-inner">
		    <ul class="nav">
		      <li><a href="index.php">Inicio</a></li>
		      <li class="active"><a href="quisom.php">Quienes somos</a></li>
		      <li><a href="productes.php">Productos</a></li>
		    </ul>
		    <ul class="nav" style="float:right">
		      <li style="background-color: #FEE; border-color: #F88; float:right;"><a href="clients.php">Área de clientes</a></li>
		    </ul>
		  </div>
		</div>
  	</div>
  	  	
	<div class="container">
	  <div class="principal">
	  <div class="row-fluid">
	    <div class="span4 offset1" >
	      <br />
	      ¿Quienes somos?
	      <br /><br />
	      Somos una empresa nacida en el entorno universitario de la investigación,
	      y con una sólida experiencia en la programación de aplicaciones móviles. <br />
	      <br />
	      Generamos
	      conocimiento para nuevos servicios TIC de valor añadido y m-Carer es nuestro
	      producto para hacer que las personas afectadas con demencias cognitivas leves, sus
	      familiares y cuidadores se sientan más seguros.
	      <br /><br />
	      <hr /> 
	    </div>
	    <div class="span2" >
	      <br />
	      <img src="imatges/Agusti.jpg" alt="m-Carer"> Agusti Solanas <br /><br />
	      <img src="imatges/Toni.jpg" alt="m-Carer">  Antoni Martínez-Ballesté
	    </div>
	    <div class="span2" >
	      <br />
	      <img src="imatges/Pau.jpg" alt="m-Carer"> Pablo A. Pérez Martínez
	      <img src="imatges/Miquel.jpg" alt="m-Carer"> Miquel Carrió
	    </div>
	    <div class="span2" >
	      <br />
	      <img src="imatges/Albert.jpg" alt="m-Carer">Albert Fernández de la Peña
	      <img src="imatges/Javier.jpg" alt="m-Carer"> Javier Ramos Félix
	    </div>

	  </div>
	  </div>
	  <hr>
  	
	  	
	  	<div class="pull-right">
		  	<p>
		  		<small>LBTech SL</small>
		  	</p>
		 </div>
		 
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>