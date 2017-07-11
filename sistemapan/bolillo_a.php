<!DOCTYPE html>
<?php require_once('comprobarweb.php'); ?>
<html lang="en">
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
 
 	
	                                  <link rel="stylesheet" type="text/css" href="  pag/jquery.dataTables.css">
                                      <script type="text/javascript" language="javascript" src="pag/funciones.js"></script>
                                      <script type="text/javascript" language="javascript" src="pag/jquery.dataTables.js"></script>
	                                  <script type="text/javascript" language="javascript" src="pag/jslistadopaises.js"></script>

    <!-- Bootstrap core CSS -->
  
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
	
	 <?php 
 include("modalm.php");  	 include("modalm.php"); 	 ?>
	 
	 
	 
	 <style type="text/css">
    #zoom{
        /* Aumentamos la anchura y altura durante 2 segundos */
        transition: width 2s, height 2s, transform 2s;
        -moz-transition: width 2s, height 2s, -moz-transform 2s;
        -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
        -o-transition: width 2s, height 2s,-o-transform 2s;
    }
    #zoom:hover{
        /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
        transform : scale(2);
        -moz-transform : scale(2);      /* Firefox */
        -webkit-transform : scale(2);   /* Chrome - Safari */
        -o-transform : scale(2);        /* Opera */
    }
</style>
  </head>
  
  
    
  
  
  
<!-- NAVBAR
================================================== -->
  <body class="body">
  <?php  include("modal_eliminar.php"); ?>
   <div id="loader" class="text-center"></div>
   	<div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
	<div class="outer_div">



  
<?/*
 $xsql=mysqli_query($conexion,"SELECT * FROM miembros WHERE id='".$_SESSION['SESS_MEMBER_ID']."'");
    while($row=mysqli_fetch_array($xsql))
	{
	$user=$row['usuario'];
	  
	}	 
  echo $user;
*/  ?>
     <div class="navbar-wrapper">
    <!--  <div class="container">-->

        <nav class="navbar navbar-inverse navbar-static-top">
       
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">  Negocio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
      		 <li><a href="Agregar_pan.php">Agregar/ver Pan</a></li><li><a href="Pedido.php">Orden de Pedido</a></li><li><a href="adorno.php">Adornos de Pan</a></li>
				 <li><a href="decoracion.php">Decoracion </a></li>  
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ver Masa <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li ><a href="migajon_a.php">Gramos de Migajon </a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>




          <!-- <li class="active"><a href="migajon_a.php">Gramos de Migajon </a></li>-->
             <li><a href="inventario.php">Inventario </a></li><li><a href="usuarios.php">Usuarios </a></li>
         


           </ul>
           </div></nav><!--   </div>--></div>


<!-- <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> Star  </button> -->
 
  <!-- Trigger the modal with a button  SELECT DISTINCT nombre FROM adorno     -->
  
  
  <?php  include ("conexion.php");  include ("crear_dropdown.php");     ?>
  
  <div class="alert alert-info"><center> Lista de Gramos Registrados para Masa Bolillo </center> </div>
  


      <?php
      $_SESSION['SESS_MEMBER_ID'];
    $xsql=mysqli_query($conexion,"SELECT * FROM acceso WHERE id='".$_SESSION['SESS_MEMBER_ID']."'");
    while($row=mysqli_fetch_array($xsql))
  {
  $rol=$row['permiso'];
    
  }  


       if ($rol=="administrador")
        {
          ?>
    
   

     <?php }  ?>
    

      <?php  include("modalm.php");  	 include("modal_eliminar.php"); ?>
     <div class="modal fade" id="nvoklink" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Pan</h4>
      <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
    <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
  

<table  BORDER="0"  class="table table-hover" >
	<tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="2"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
 
  
     <tr> <td ><label for="name"  >Nombre de Pan   </label></td>  <td colspan="2"> <input type="text" name="nombre"   class="form-control" /> <BR></td></tr>
      <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="2"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
         <tr> <td ><label for="name"  >Adorno Base</label></td><td colspan="2"> 
         <input name="abase" type="radio" value="si" />si <BR></td> <td> <input name="abase" type="radio" value="no" />no <BR></td>

         </tr>
    <!--<tr> <td ><label for="name"  >Harina   </label></td> <td> <input type="text" name="ing1"   class="form-control" /> <BR></td></tr>
     <tr> <td ><label for="name"  >azucar   </label></td> <td> <input type="text" name="ing2"   class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name"  >sal   </label></td> <td> <input type="text" name="ing3"   class="form-control" /> <BR></td></tr>

-->
 <tr> <td colspan="2">Selecciona un tipo de Pan :
              <?php


              //crear array
              $options = array();
              include ("conexion.php");

              $result = mysqli_query($conexion,"SELECT DISTINCT nombre FROM adorno");

              while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
                $options[] = $row[0];
                }
                $name = 'adorno';
                
                $selected = $name;
   
                 echo crear_dropdown( $name, $options, $selected ); ?>
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

  <!--ver mas info -->


 <div class="modal fade" id="vermas" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Informacion Completa</h4>
             <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
    <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
  

<table   class="table table-hover" >
  <tr><td><label for="name"  >Gramos de Pan:   </label></td> <td colspan="2"> <input type="text" name="gramosp"   class="form-control" /> <BR></td></tr>
   <tr><td><label for="name"  >Nombre de Identificacion:   </label></td> <td colspan="2"> <input type="text" name="idpang"   class="form-control" /> <BR></td></tr>
 
  
    
      </table> 
     </center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="addmasa" value="Agregar Datos" size="20">Guardar</button>
       </form>
      
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>

<!--  masa migajon   -->
 <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#masa_migajon">Masa de Bolillo</button></br>

 <div class="modal fade" id="masa_migajon" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masa de Bolillo</h4>
             <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
    <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"  >
  

<table   class="table table-hover" >
  <tr><td><label for="name"  >Gramos de Pan:   </label></td> <td colspan="2"> <input type="text" name="gramosp"   class="form-control" /> <BR></td></tr>
   <tr><td><label for="name"  >Nombre de Identificacion:   </label></td> <td colspan="2"> <input type="text" name="idpang"   class="form-control" /> <BR></td></tr>
 
  
    
      </table> 
     </center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="addmasa" value="Agregar Datos" size="20">Guardar</button>
       </form>
      
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>

  <?php
  include("conexion.php");

 
if(isset($_POST["addmasa"])) 
{ 

echo $tipo=$_REQUEST['gramosp']; echo  $nomi=$_REQUEST['idpang'];
 $xsqla=mysqli_query($conexion,"SELECT * FROM masa_bolillo WHERE cantidad='1'");
  while($row = mysqli_fetch_array($xsqla))
  {$uharina= $row['harina']; $uazucar= $row['azucar'];$uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura'];
}
 $gharina=$tipo* $uharina;$gazucar=$tipo* $uazucar;$gagua=$tipo* $uagua; $gsal=$tipo* $usal;$glevadura=$tipo* $ulevadura;    


 $result = mysqli_query($conexion,"INSERT INTO  masa_bolillo(nombre_insumo,cantidad,harina,azucar,sal,levadura,agua)
                                              VALUES ('$nomi','$tipo','$gharina','$gazucar','$gsal','$glevadura','$gagua');");


/* $result = mysqli_query($conexion,"INSERT INTO  masa_migajon(nom_insumo,cantidad,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura) 
                          VALUES ('$nomi','$tipo',$gharina','$gazucar','$gmanteca','$ghuevo','$gcanela','$gesencia','$gchuevo','$gagua','$gsal','$glevadura');");

*/


} 

if(isset($_POST["Cagregrarlink"])) 
{ 

  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre'];  echo  $adorno=$_REQUEST['adorno']+1;  $abase=$_REQUEST['abase'];

$xsql=mysqli_query($conexion,"SELECT * FROM masa_migajon WHERE cantidad='".$tipox."'");
  while($row = mysqli_fetch_array($xsql))
             {
                $uharina= $row['Harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $uhuevo= $row['huevo']; $ucanela= $row['can_molida'];$uesencia= $row['ecencia_mlla'];
                $uchuevo= $row['col_huevo']; $uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura'];
}

if($abase=="si")
{
    $xsqla=mysqli_query($conexion,"SELECT * FROM adorno WHERE gramos='1'");
                    while($row = mysqli_fetch_array($xsqla))
                         {
                         $uharinax= $row['Harina']; $uazucarx= $row['azucar'];$uamantecax= $row['manteca']; $sbx= $row['saborizante'];/* $ucanela= $row['can_molida'];$uesencia= $row['ecencia_mlla'];
                $uchuevo= $row['col_huevo']; $uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura'];*/

                        $aha=$uharinax*$tipox; $aaz=$uazucarx*$tipox; $ama=$uamantecax*$tipox; $asb=$sbx*$tipox;

}

$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,precio,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura,aharina,aazucar,amanteca,asabor) 
    VALUES ('$nom','$tipox','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$ucanela','$uesencia','$uchuevo','$uagua','$usal','$ulevadura','$aha','$aaz','$ama','$asb');");


}



/*
 $result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,precio,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura) 
    VALUES ('$nom','$tipox','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$ucanela','$uesencia','$uchuevo','$uagua','$usal','$ulevadura');");


*/
}


  ?>
  

   	<div class="datos_ajax"></div><!-- Datos ajax Final -->
  <table  class="table table-hover"    id="tabla_lista_paises" >
    <thead >
      <tr >
	     
      <th>Nombre </th>    <th>cantidad </th><th>Harina </th>  <th>Azucar </th>
        <th>Agua</th><th>sal</th> <th>Levadura</th>
       
      </tr>
    </thead>
    <tbody>


	 		<?PHP include("conexion.php");


             $resultx = mysqli_query($conexion,"SELECT * FROM masa_bolillo ORDER BY  nombre_insumo ASC;");
            while($row = mysqli_fetch_array($resultx))
             {
       ?>      <tr>
             		   <td ALIGN='CENTER' width='100'><?php echo($row["nombre_insumo"]); ?> </td> <td ALIGN='CENTER' width='100'><?php echo($row["cantidad"]); ?> <td ALIGN='CENTER' width='100'><?php echo($row["harina"]); ?> Gr </td><td ALIGN='CENTER' width='100'><?php echo($row["azucar"]); ?> Gr </td>
            <td ALIGN='CENTER' width='100'><?php echo($row["agua"]); ?> Gr </td>
      
      	   	<td ALIGN='CENTER' width='100'><?php echo($row["sal"]); ?>Gr</td><td ALIGN='CENTER' width='100'><?php echo($row["levadura"]); ?> Gr </td>
          </tr>


            <!--<td><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#vermas">Ver mas </button></td> </tr>-->
 <?php      
         

}  ?>
		 </table>	</div>  </div>

		<script src="app.js"></script>

    
	

   <!--     <script> 		$(document).ready(function(){ 		load(1); 		}); </script>-->
</body>
</html>