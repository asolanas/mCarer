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
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
		      <li><a href="quisom.php">Quienes somos</a></li>
		      <li class="active"><a href="productes.php">Productos</a></li>
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
	    <div class="span10 offset1" >
	      <br />
	      m-Carer, tu cuidador móvil, se adapta a tus necesidades. Ya seas un particular con una persona dependiente a tu
	      cargo o una residencia con cientos de personas dependientes, m-Carer es para ti.
	      <br />	      <br />
	      <b>m-Carer Básico:</b> Aplicación gratuita para atender a una sola persona, con un máximo de dos familiares o
	      cuidadores asociados.
	      <br />	      <br />
	      <b>m-Carer Premium:</b> Activa funcionalidades avanzadas desde nuestro panel de gestión por una pequeña tarifa
	      mensual, trimestral o anual. Consulta si tu compañía aseguradora o mutua ya te ofrece m-Carer Premium.
	      	      <br />	      <br />
	      <b>m-Carer Group:</b> Producto específico para centros geriátricos para gestionar un gran número de usuarios
	      y pacientes. Tarifas semestrales o anuales por volumen de usuarios. Adaptación a casos específicos para una
	      mejor adaptabilidad a sus necesidades. Formación específica.
	      	      <br />	      <br />
	    </div>
	  	<div class="row-fluid">
  			<div class="span4">
				<form method="post" class="basico" action="formulari.php">
				  <fieldset>
				    <legend>Básico</legend>
				    <br />
				    <ul>
				      <li> Localización activa</li>
				      <li> Zonas de riesgo</li>
				      <li> Discreto </li>
				      <li> Accesible</li>
				      <li> Atiende a una sola persona</li>
				    </ul>
				      <br \>
				    </label>
				    <?php
				      $sql= "SELECT Consultes FROM Log_Interes_Productes WHERE ID_Producte='1'";
				      $resultat = mysql_query($sql) or die('Error en la consulta: ' . mysql_error());
				      $row = mysql_fetch_array($resultat);
				      echo $row[Consultes];
				    ?>
				    <button type="submit" class="btn btn-info" name="pack_1">Más información</button>
				  </fieldset>
				</form>
  			</div>
  			<div class="span4">
  				<form method="post" class="avanzado" action="formulari.php">
				  <fieldset>
				    <legend>Avanzado</legend>
				    <br />
				    <ul>
				      <li> Localización activa</li>
				      <li> Zonas de riesgo</li>
				      <li> Discreto </li>
				      <li> Accesible</li>
				      <li> Sistema de alarmas</li>
				      <li> Detección de desorientación</li>
				      <li> Privacidad </li>
				      <li> Atiende hasta cuatro personas</li>
				    </ul>
				    <br />
				    </label>
				    <?php
				      $sql= "SELECT Consultes FROM Log_Interes_Productes WHERE ID_Producte='2'";
				      $resultat = mysql_query($sql) or die('Error en la consulta: ' . mysql_error());
				      $row = mysql_fetch_array($resultat);
				      echo $row[Consultes];
				    ?>
				    <button type="submit" class="btn btn-info" name="pack_2">Más información</button>
				  </fieldset>
				</form>
  			</div>
  			<div class="span4">
  				<form method="post" class="grupo" action="formulari.php">
				  <fieldset>
				    <legend>Grupo</legend>
				    <br />
				    <ul>
				      <li> Localización activa</li>
				      <li> Zonas de riesgo</li>
				      <li> Discreto </li>
				      <li> Accesible</li>
				      <li> Sistema de alarmas</li>
				      <li> Detección de desorientación</li>
				      <li> Privacidad </li>
				      <li> Gestión centralizada</li>
				      <li> Formación técnica para cuidadores</li>
				      <li> Atiende grupos ilimitados</li>
				    </ul>
				    <br />
				    </label>
				    <?php
				      $sql= "SELECT Consultes FROM Log_Interes_Productes WHERE ID_Producte='3'";
				      $resultat = mysql_query($sql) or die('Error en la consulta: ' . mysql_error());
				      $row = mysql_fetch_array($resultat);
				      echo $row[Consultes];
				    ?>
				    <button type="submit" class="btn btn-info" name="pack_3">Más información</button>
				  </fieldset>
				</form>
  			</div>
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