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
  	<?
  		if(isset($_POST["pack_1"]) || isset($_POST["pack_2"]) || isset($_POST["pack_3"]))
  		{	  	  
	  		
  		}
  		if(isset($_POST["pack_1"]))
  		{
				//insert a la BD
				mysql_query("UPDATE Log_Interes_Productes SET Consultes = Consultes + 1 WHERE ID_Producte = '1'");
  		}
  		if(isset($_POST["pack_2"]))
  		{
	  		//insert a la BD
			mysql_query("UPDATE Log_Interes_Productes SET Consultes = Consultes + 1 WHERE ID_Producte = '2'");
  		}
  		if(isset($_POST["pack_3"]))
  		{
	  		//insert a la BD
			mysql_query("UPDATE Log_Interes_Productes SET Consultes = Consultes + 1 WHERE ID_Producte = '3'");
  		}
  		?>
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
		<form enctype="multipart/form-data" method="post" id="form_653p32" action="index.php">
		<fieldset>
		<div>
			<input type="hidden" name="frm_action" value="create">
			<input type="hidden" name="form_id" value="3">
			<input type="hidden" name="form_key" value="653p32">
			
			<div class="control-group">
				<label>
					<strong>Nombre</strong>
			    	<span class="frm_required">*</span>
			    </label>
			    <input type="text" id="field_nombre2" name="item_meta[19]" value="" class=" required">
			</div>
			
			<div class="control-group">
			    <label>
			    	<strong>Apellidos</strong>
					<span class="frm_required">*</span>
				</label>
				<input type="text" id="field_apellidos2" name="item_meta[20]" value="" class=" required">
			</div>
			    
			<div class="control-group">
			    <label>
			    	<strong>Teléfono de contacto</strong>
			        <span class="frm_required">*</span>
			    </label>
			    <input type="text" id="field_telfonodecontacto2" name="item_meta[24]" value="" class=" required">
			</div>
			    
			<div class="control-group">
			    <label>
			    	<strong>E-mail</strong>
			        <span class="frm_required">*</span>
			    </label>
			    <input type="text" id="field_e-mail2" name="item_meta[25]" value="" class=" required">
			</div>
			
			<div class="control-group">
			    <label>
			    	<strong>Indique qué tipo de uso va a darle a mCarer</strong>
			        <span class="frm_required">*</span>
			    </label>
		    </div>
		    
		    <div class="control-group">
			    <label for="field_26-0" class="radio">
			    	<input type="radio" name="item_meta[26]" id="field_26-0" value="Tengo un familiar o conocido que necesita esta herramienta" class=" required"> 
			    	Tengo un familiar o conocido que necesita esta herramienta
			    </label>
			
			    <label for="field_26-1" class="radio">
			    	<input type="radio" name="item_meta[26]" id="field_26-1" value="Somos una asociación sin ánimo de lucro" class=" required">
			    	Somos una asociación sin ánimo de lucro
			    </label>
			    
			    <label for="field_26-2" class="radio">
			    	<input type="radio" name="item_meta[26]" id="field_26-2" value="Somos un centro privado que damos asistencia " class=" required">
			    	Somos un centro privado que damos asistencia 
			    </label>
			    
			    <label for="field_26-3" class="radio">
			    	<input type="radio" name="item_meta[26]" id="field_26-3" value="Otros" class=" required">
			    	Otros
			    </label>
		    </div>
		    
		    <div class="control-group">
			    <label class="frm_primary_label">
			    	<strong>En el caso de pertenecer a una empresa u asociación, por favor, indiquela</strong>
			        <span class="frm_required"></span>
			    </label>
			    <input type="text" id="field_enelcasodeperteneceraunaempresauasociacinporfavorindiquela" name="item_meta[27]" value="" size="50" class=" auto_width">
			</div>
			
			<div class="control-group">
			    <label>
			    	<strong>Página web de la empresa o asociación</strong>
			        <span class="frm_required"></span>
			    </label>
			    <input type="text" id="field_pginawebdelaempresaoasociacin" name="item_meta[29]" value="">
			</div>
		    
		</fieldset>
		
		<input type="submit" value="Enviar" class="btn">
		
		</form>
		
	</div>
	</div>
	    </div>
	  </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>