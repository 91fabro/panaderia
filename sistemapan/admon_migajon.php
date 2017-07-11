
<!DOCTYPE html>
<?php require_once('comprobarweb.php'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   <!--  no quitar-->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
 
 	
	                                  <link rel="stylesheet" type="text/css" href="  pag/jquery.dataTables.css">
                                      <script type="text/javascript" language="javascript" src="pag/funciones.js"></script>
                                      <script type="text/javascript" language="javascript" src="pag/jquery.dataTables.js"></script>
	                                  <script type="text/javascript" language="javascript" src="pag/jslistadopaises.js"></script>

    <!-- Bootstrap core CSS -->
  
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<?php include("conexion.php"); ?>
    
<div class="navbar-wrapper">
    <!--  <div class="container">-->

        <nav class="navbar navbar-inverse navbar-static-top">
       
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">  Negocio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
      		  <li><a href="agregar_pan.php">Agregar/ver Pan</a></li><li><a href="Pedido.php">Orden de Pedido</a></li>  <li><a href="adorno.php">Adornos de Pan</a></li>  
			    <li><a href="inventario.php">Inventario </a></li>
	         
		
              </ul>
            </div>
       
        </nav>

   <!--   </div>-->
    </div>
 <button type="button" class="btn btn-danger btn" data-toggle="modal" data-target="#nvoklink">Nuevo producto</button>

 <div class="modal fade" id="nvoklink" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gramos Nuevos</h4>
      <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
    <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
         <table  BORDER="0"  class="table table-hover" >
           <tr> <td ><label for="name"  >Nombre de identificacion   </label></td>  <td> <input type="text" name="producto"   class="form-control" /> <BR></td></tr>
             <tr> <td ><label for="name"  > Harina</label></td>  <td> <input type="text" name="marca"   class="form-control" /> <BR></td></tr>
               <tr> <td ><label for="name"  >Azucar </label></td>  <td> <input type="text" name="contenido"   class="form-control" /> <BR></td></tr>
                  <tr> <td ><label for="name"  >Manteca </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>
 <tr> <td ><label for="name"  > Huevo</label></td>  <td> <input type="text" name="marca"   class="form-control" /> <BR></td></tr>
               <tr> <td ><label for="name"  >Canela </label></td>  <td> <input type="text" name="contenido"   class="form-control" /> <BR></td></tr>
                  <tr> <td ><label for="name"  > Ecencia Mantequilla </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>
				   <tr> <td ><label for="name"  > Colorante</label></td>  <td> <input type="text" name="marca"   class="form-control" /> <BR></td></tr>
               <tr> <td ><label for="name"  >Agua </label></td>  <td> <input type="text" name="contenido"   class="form-control" /> <BR></td></tr>
                  <tr> <td ><label for="name"  >Sal </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>
				  <tr> <td ><label for="name"  >Levadura </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>
<tr> <td ><label for="name"  >Gramos </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>

                 

           </table>
  

     </center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="Cagregrarlink" value="Agregar Datos" size="20">Registar</button>
       </form>
      
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php
  include("conexion.php");
 
if(isset($_POST["Cagregrarlink"])) 
{ 

echo $producto=$_REQUEST['producto']; echo $marca=$_REQUEST['marca']; echo $contenido=$_REQUEST['contenido'];  echo  $merma=$_REQUEST['merma'];  echo $costo=$_REQUEST['costo']; echo "<br>";
echo $kcosto=$costo/$contenido; echo "<br>";
echo $gcosto=$kcosto/1000;

 	$result = mysqli_query($conexion,"INSERT INTO  inv_gen(producto,marca,cant,merma,costog,costok,costogr)	VALUES ('$producto','$marca','$contenido','$merma','$costo','$kcosto','$gcosto');");

 }


 ?>

<center>
 <div class="table table-hover"  >
	<table class="table table-hover" >
	  <tr ><th colspan="4"><h1><center> Inventario General</center></h1> </th> </tr>
	  <tr>
        <th>Producto </th> <th>Marca </th><th>Cantidad Presentacion </th> <th>Merma</th>
        <th>Costo Presentacion </th> <th>Costo por kilo </th><th>Costo por gramo </th>
		  
      </tr>

	
            <?PHP include("conexion.php");
									
						
							$result = mysqli_query($conexion,"SELECT * FROM inv_gen");
							while($row = mysqli_fetch_array($result))
							{
								
							?><tr>
							<td> <label > <?php print($row["producto"]); ?></label></td>
								<td> <label > <?php print($row["marca"]); ?></label></td>
							<td> <label > <?php print($row["cant"]); ?></label></td>

								<td> <label > <?php print($row["merma"]); ?></label></td>
								<td> <label > <?php print($row["costog"]); ?></label></td>
								<td> <label > <?php print($row["costok"]); ?></label></td>
							<td> <label > <?php print($row["costogr"]); ?></label></td>

								<td> <label > <?php print($row["Cant_ocu"]); ?></label></td>
								
								
<?php	}  ?>

</tr></table></center>
</body>
</html>