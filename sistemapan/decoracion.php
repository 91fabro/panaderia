<!DOCTYPE html>
<?php require_once('comprobarweb.php');     include ("crear_dropdown.php");  error_reporting(0);  ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decoraciones</title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon/icono.jpg">

    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   <!--  no quitar-->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="  pag/jquery.dataTables.css"><script type="text/javascript" language="javascript" src="pag/funciones.js"></script>
  <script type="text/javascript" language="javascript" src="pag/jquery.dataTables.js"></script><script type="text/javascript" language="javascript" src="pag/jslistadopaises.js"></script>

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
			   <li><a href="decoracion.php">Decoracion </a></li>
             <li><a href="inventario.php">Inventario </a></li>
                <li><a href="usuarios.php">Usuarios </a></li>
           
	         
		
              </ul>
            </div>
       
        </nav>

   <!--   </div>-->

    <div class="alert alert-info">inventario de Decorado</div>
    </div>
 <button type="button" class="btn btn-danger btn" data-toggle="modal" data-target="#nvoklink">Nuevo producto</button>
  <!--<button type="button" class="btn btn-danger btn" data-toggle="modal" data-target="#ndecoracion">Nuevo Decoracion </button>-->
   <button type="button" class="btn btn-danger btn" data-toggle="modal" data-target="#basedeco">Nueva base de decorado</button>

 <div class="modal fade" id="nvoklink" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Decoracion</h4>
           <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
        <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
         <table  BORDER="0"  class="table table-hover" >
           <tr> <td ><label for="name"  >Nombre de Producto   </label></td>  <td> <input type="text" name="producto"   class="form-control" /> <BR></td></tr>
           <!--  <tr> <td ><label for="name"  >Marca de producto   </label></td>  <td> <input type="text" name="marca"   class="form-control" /> <BR></td></tr>-->
               <tr> <td ><label for="name"  >contenido neto (kg)  </label></td>  <td> <input type="text" name="contenido"   class="form-control" /> <BR></td></tr>
               <!--   <tr> <td ><label for="name"  >Merma de Producto </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>-->

                 <tr> <td ><label for="name"  >Costo de Presentacion ($)   </label></td>  <td> <input type="text" name="costo"   class="form-control" /> <BR></td></tr>

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

<div class="modal fade" id="ndecoracion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Decoracion</h4>
           <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
        <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
         <table  BORDER="0"  class="table table-hover" >
           <tr> <td ><label for="name"  >Nombre de Decoracion   </label></td>  <td colspan="2"> <input type="text" name="producto"   class="form-control" /> <BR></td>  </tr>
           <!--  <tr> <td ><label for="name"  >Marca de producto   </label></td>  <td> <input type="text" name="marca"   class="form-control" /> <BR></td></tr>-->
        <tr> <td ><label for="name">Insumo 1</label></td><td><input type="text" name="ins1" placeholder='Nombre de insumo 1' class="form-control"/></td>
          <td><input type="text" name="ins01"    placeholder='Cantidad de insumo' class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name">Insumo 2</label></td><td><input type="text" placeholder='Nombre de insumo 2' name="ins2" class="form-control"/></td>
          <td><input type="text" name="ins02"  class="form-control" placeholder='Cantidad de insumo' /> <BR></td></tr>
          <tr> <td ><label for="name">Insumo 3</label></td><td><input type="text" name="ins3" placeholder='Nombre de insumo 3' class="form-control"/></td>
          <td><input type="text" name="ins03"  class="form-control" placeholder='Cantidad de insumo' /> <BR></td></tr>
          <tr> <td ><label for="name">Insumo 4</label></td><td><input type="text" name="ins4" placeholder='Nombre de insumo 4' class="form-control"/></td>
          <td><input type="text" name="ins04"  class="form-control" placeholder='Cantidad de insumo'/> <BR></td></tr>
          <tr> <td ><label for="name">Insumo 5</label></td><td><input type="text" name="ins5" placeholder='Nombre de insumo 5' class="form-control"/></td>
          <td><input type="text" name="ins05"  class="form-control" placeholder='Cantidad de insumo' /> <BR></td></tr>
           <!--<tr> <td ><label for="name"  >Merma de Producto </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name"  >Costo de Presentacion ($)   </label></td>  <td> <input type="text" name="costo"   class="form-control" /> <BR></td></tr>-->
          </table></center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="adecoracion" value="Agregar Datos" size="20">Registar</button>
       </form>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div></div></div></div>
  <?php
  include("conexion.php");
 
if(isset($_POST["adecoracion"])) 
{ 

 $producto=$_REQUEST['producto']; 
 $ins1=$_REQUEST['ins1']; $cins1=$_REQUEST['ins01']; $ins2=$_REQUEST['ins2']; $cins2=$_REQUEST['ins02']; 
 $ins3=$_REQUEST['ins3']; $cins3=$_REQUEST['ins03']; $ins4=$_REQUEST['ins4']; $cins4=$_REQUEST['ins04']; 
 $ins5=$_REQUEST['ins5']; $cins5=$_REQUEST['ins05'];// $ins6=$_REQUEST['ins6']; $cins6=$_REQUEST['ins06']; 

 //$kcosto=$costo/$contenido; $gcosto=$kcosto/1000;



 $deco1=$cins1/28; echo "<br>";  $deco1=$deco1/20; echo $deco1 = number_format($deco1, 3, '.', ''); //  con 5 decimales

 $deco2=$cins2/28; echo "<br>";  $deco2=$deco2/20; echo $deco2 = number_format($deco2, 3, '.', ''); //  con 5 decimales


$resulto = mysqli_query($conexion,"INSERT INTO  b_decoracion(nombrea,ins1,cant1,ins2,cant2) VALUES ('$producto','$ins1','$deco1','$ins2','$deco2');");

  $result = mysqli_query($conexion,"INSERT INTO  tdecoracion(nombrea,ins1,cant1,ins2,cant2,ins3,cant3,ins4,cant4,ins5,cant5)
   VALUES ('$producto','$ins1','$cins1','$ins2','$cins2','$ins3','$cins3','$ins4','$cins4','$ins5','$cins5');");   }


 ?>
 

<!--      model de deorado base    --> 


<div class="modal fade" id="basedeco" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva base de Decorado</h4>
           <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
        <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
         <table  BORDER="0"  class="table table-hover" >




           <tr> <td ><label for="name"  >Nombre de Decoracion   </label></td>  <td colspan="2"> <input type="text" name="producto"   class="form-control" /> <BR></td>
           <td ><label for="name"  >Tipo de masa   </label></td>  <td colspan="2"> <input type="text" name="masa"   class="form-control" /> <BR></td>
           


           </tr>
           <tr> <td ><label for="name"  >Nombre del unsumo (1)  </label></td>  <td> <input type="text" name="uno"   class="form-control" /> <BR></td>
            <td ><label for="name"  >Nombre del unsumo  (2)  </label></td>  <td> <input type="text" name="dos"   class="form-control" /> <BR></td>
             <td ><label for="name"  >Nombre del unsumo  (3) </label></td>  <td> <input type="text" name="tres"   class="form-control" /> <BR></td>
 <td ><label for="name"  >Nombre del unsumo  (4)  </label></td>  <td> <input type="text" name="cuatro"   class="form-control" /> <BR></td>
             <td ><label for="name"  >Nombre del unsumo(5) </label></td>  <td> <input type="text" name="cinco"   class="form-control" /> <BR></td>



             </tr>
        <tr> <td ><label for="name">Gramos de insumo (1)</label></td><td><input type="text" name="uno1" placeholder='' class="form-control"/></td>
         <td ><label for="name">Gramos de insumo  (2) </label></td><td><input type="text" name="dos1" placeholder='' class="form-control"/></td>
          <td ><label for="name">Gramos de insumo(3) </label></td><td><input type="text" name="tres1" placeholder='' class="form-control"/></td>
                <td ><label for="name">Gramos de insumo(4) </label></td><td><input type="text" name="cuatro1" placeholder='' class="form-control"/></td>
                      <td ><label for="name">Gramos de insumo(5) </label></td><td><input type="text" name="cinco1" placeholder='' class="form-control"/></td>
       </tr>
          <tr> <td ><label for="name">Piezas a que se producen</label></td><td><input type="text" placeholder='' name="uno2" class="form-control"/></td>
           <td ><label for="name">Piezas a que se producen</label></td><td><input type="text" placeholder='' name="dos2" class="form-control"/></td>
            <td ><label for="name">Piezas a que se producen</label></td><td><input type="text" placeholder='' name="tres2" class="form-control"/></td>
             <td ><label for="name">Piezas a que se producen</label></td><td><input type="text" placeholder='' name="cuatro2" class="form-control"/></td>
            <td ><label for="name">Piezas a que se producen</label></td><td><input type="text" placeholder='' name="cinco2" class="form-control"/></td>
        </tr>
          <tr> <td ><label for="name">Gramos de cada pieza</label></td><td><input type="text" name="uno3" placeholder='' class="form-control"/>
          <td ><label for="name">Gramos de cada pieza</label></td><td><input type="text" name="dos3" placeholder='' class="form-control"/>
          <td><label for="name">Gramos de cada pieza</label></td><td><input type="text" name="tres3" placeholder='' class="form-control"/>
           <td ><label for="name">Gramos de cada pieza</label></td><td><input type="text" name="cuatro3" placeholder='' class="form-control"/>
          <td><label for="name">Gramos de cada pieza</label></td><td><input type="text" name="cinco3" placeholder='' class="form-control"/>

          </td>
        <!--  <td><input type="text" name="ins03"  class="form-control" placeholder='Cantidad de insumo' /> <BR></td></tr>
          <tr> <td ><label for="name">Insumo 4</label></td><td><input type="text" name="ins4" placeholder='Nombre de insumo 4' class="form-control"/></td>
          <td><input type="text" name="ins04"  class="form-control" placeholder='Cantidad de insumo'/> <BR></td></tr>
          <tr> <td ><label for="name">Insumo 5</label></td><td><input type="text" name="ins5" placeholder='Nombre de insumo 5' class="form-control"/></td>
          <td><input type="text" name="ins05"  class="form-control" placeholder='Cantidad de insumo' /> <BR></td></tr>
           <!--<tr> <td ><label for="name"  >Merma de Producto </label></td>  <td> <input type="text" name="merma"   class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name"  >Costo de Presentacion ($)   </label></td>  <td> <input type="text" name="costo"   class="form-control" /> <BR></td></tr>-->
          </table></center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="nbase" value="Agregar Datos" size="20">Registar</button>
       </form>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div></div></div></div>
  <?php
  include("conexion.php");
 
if(isset($_POST["nbase"])) 
{ 

echo $producto=$_REQUEST['producto']; echo $masa=$_REQUEST['masa']; echo $nom_insumo1=$_REQUEST['uno']; echo $nom_insumo2=$_REQUEST['dos']; echo $nom_insumo3=$_REQUEST['tres'];
 echo $nom_insumo4=$_REQUEST['cuatro']; echo $nom_insumo5=$_REQUEST['cinco'];

 $uno1=$_REQUEST['uno1']; $uno2=$_REQUEST['uno2']; $uno3=$_REQUEST['uno3'];
  $dos1=$_REQUEST['dos1']; $dos2=$_REQUEST['dos2']; $dos3=$_REQUEST['dos3'];
  $tres1=$_REQUEST['tres1']; $tres2=$_REQUEST['tres2']; $tres3=$_REQUEST['tres3'];
    $cuatro1=$_REQUEST['cuatro1']; $cuatro2=$_REQUEST['cuatro2']; $cuatro3=$_REQUEST['cuatro3'];
     $cinco1=$_REQUEST['cinco1']; $cinco2=$_REQUEST['cinco2']; $cinco3=$_REQUEST['cinco3'];

 // $ins2=$_REQUEST['ins2'];  $ins3=$_REQUEST['ins3']; //$cins3=$_REQUEST['ins03']; $ins4=$_REQUEST['ins4']; $cins4=$_REQUEST['ins04']; 

 //$ins5=$_REQUEST['ins5']; $cins5=$_REQUEST['ins05'];// $ins6=$_REQUEST['ins6']; $cins6=$_REQUEST['ins06']; 
echo "<br>";
 //$kcosto=$costo/$contenido; $gcosto=$kcosto/1000;
 echo "  unoo".$nom_insumo1.$base_insumo1=$uno1/$uno2/$uno3;   echo "<br>"; echo round($nom_insumo1, 3, PHP_ROUND_HALF_UP) ; 
 echo "dps       ".$base_insumo2=$dos1/$dos2/$dos3;  echo "<br>"; echo round($nom_insumo2, 3, PHP_ROUND_HALF_UP) ; 
   echo "Tresssss       ".$base_insumo3=$tres1/$tres2/$tres3;  echo round($nom_insumo3, 3, PHP_ROUND_HALF_UP) ; 
echo "Cuatroo       ".$base_insumo4=$cuatro1/$cuatro2/$cuatro3;  echo round($nom_insumo4, 3, PHP_ROUND_HALF_UP) ; 
echo "Cincoooo       ".$base_insumo5=$cinco1/$cinco2/$cinco3;  echo round($nom_insumo5, 3, PHP_ROUND_HALF_UP) ; 



$n_deco=mysqli_query($conexion,"INSERT INTO  base_decorado(n_decorado,masa,insumo1,base1,insumo2,base2,insumo3,base3,insumo4,base4,insumo5,base5) VALUES ('$producto','$masa','$nom_insumo1','$base_insumo1','$nom_insumo2','$base_insumo2','$nom_insumo3','$base_insumo3','$nom_insumo4','$base_insumo4','$nom_insumo5','$base_insumo5');");


/*$n_deco =mysqli_query($conexion,"INSERT INTO  base_decorado (n_decorado,insumo1,base1,insumo2,base2,insumo3,base3)
 VALUES ('$producto','$nom_insumo1','$base_insumo1','$nom_insumo2','$base_insumo2'.'$nom_insumo3','$base_insumo3');");


/*
 $deco1=$cins1/28; echo "<br>";  $deco1=$deco1/20; echo $deco1 = number_format($deco1, 3, '.', ''); //  con 5 decimales

 $deco2=$cins2/28; echo "<br>";  $deco2=$deco2/20; echo $deco2 = number_format($deco2, 3, '.', ''); //  con 5 decimales

*/

}

 ?>
   <?php
  include("conexion.php");
 
if(isset($_POST["Cagregrarlink"])) 
{ 

 $producto=$_REQUEST['producto']; $contenido=$_REQUEST['contenido']; $costo=$_REQUEST['costo']; $kcosto=$costo/$contenido; $gcosto=$kcosto/1000;

 	$result = mysqli_query($conexion,"INSERT INTO  decoracion(producto,Cantidad,costo,kgcosto,gcosto)	VALUES ('$producto','$contenido','$costo','$kcosto','$gcosto');");

 }
 ?>
 
<center>
 <div class="table table-hover"  >
	<table class="table table-hover"    id="tabla_lista_paises" >
	
	  <tr>
        <th>Producto </th><th>Cantidad Presentacion </th><th>Costo Presentacion </th> <th>Costo por kilo </th><th>Costo por gramo </th>
		  
      </tr>

	
            <?PHP include("conexion.php");
									
						
							$result = mysqli_query($conexion,"SELECT * FROM decoracion");
							while($row = mysqli_fetch_array($result))
							{
								
							?><tr>
							<td> <label > <?php print($row["producto"]); ?></label></td><td> <label > <?php print($row["cantidad"]); ?></label></td><td> <label > <?php print($row["costo"]); ?></label></td>
              <td> <label >$ <?php print round($row["kgcosto"],3,PHP_ROUND_HALF_UP); ?></label></td><td> <label > <?php print round ($row["gcosto"],3,PHP_ROUND_HALF_UP); ?></label></td>
						
								
								
<?php	}  ?>

</tr></table></center>

<a href="lista_decorado.php">Consulta de decoraciones </a>
</body>
</html>