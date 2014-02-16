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
	    <div class="span7 offset1" >
	      <br />
	      m-Carer es tu cuidador móvil. <br /><br />
	      Si te sientes desorientado durante tus paseos o te has perdido alguna vez,
	      m-Carer es para ti.<br />
	      Si tienes algún ser querido que se siente inseguro al realizar sus salidas habituales, m-Carer es para ti.
	      Para su seguridad y para tu tranquilidad. <br /><br />
	      <ul>
		<li>m-Carer es discreto: es una app que funciona en el teléfono movil.</li>
		<li>m-Carer es avanzado: utiliza inteligencia artificial y aprende de ti.</li>      
		<li>m-Carer es privado: no localiza, sino que cuida de ti.</li>
	      </ul>
	      m-Carer se configura mediante una sencillo panel de gestión vía web, que dota al motor de
	      inteligencia artificial de un sinfín de herramientas velando para una mejor calidad de vida.
	      <br /><br />
	      m-Carer aprende, m-Carer se adapta.
	      <hr /> 
	    </div>
	    <div class="span3" >
	      <br />
	      <img src="imatges/mans_reduced.jpg" alt="m-Carer">
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