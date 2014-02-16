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
		      <li class="active"><a href="index.php">Inicio</a></li>
		      <li><a href="quisom.php">Quienes somos</a></li>
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
	    <div class="span12" >
	      <br />
	     Noticias relacionadas con la dependencia
	      <hr /> 
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