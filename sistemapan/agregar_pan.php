<!DOCTYPE html>
<?php require_once('comprobarweb.php');  ?>
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
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
 <link rel="stylesheet" type="text/css" href="  pag/jquery.dataTables.css"><script type="text/javascript" language="javascript" src="pag/funciones.js"></script>
  <script type="text/javascript" language="javascript" src="pag/jquery.dataTables.js"></script>
	 <script type="text/javascript" language="javascript" src="pag/jslistadopaises.js"></script>
   <!-- <script type="text/javascript" language="javascript" src="js/jquery-1.11.3.js"></script>
     <script type="text/javascript" language="javascript" src="js/jquery.js"></script>

    <!-- Bootstrap core CSS -->
  
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
  
   <?php   include("modalm.php");   include("modalm.php");   ?>
   
<!-- NAVBAR
================================================== -->
  <body class="body">
  <?php  include("modal_eliminar.php"); include("modal_vermas.php"); ?>
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
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">  Negocio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
      		 <li class="active"><a href="Agregar_pan.php">Agregar/ver Pan</a></li><li><a href="Pedido.php">Orden de Pedido</a></li><li><a href="adorno.php">Adornos de Pan</a></li>
				 <li><a href="decoracion.php">Decoracion </a></li> <li><a href="migajon_a.php">Gramos de Migajon </a></li><li><a href="inventario.php">Inventario </a></li> <li><a href="usuarios.php">Usuarios </a></li>
            </ul>
            </div>
            </nav>

   <!--   </div>-->
    </div> <!-- Trigger the modal with a button  SELECT DISTINCT nombre FROM adorno     -->
  <?php  include ("conexion.php");  include ("crear_dropdown.php");  include("modalm.php");    include("modal_eliminar.php");   ?>
  <h2> <center> Lista de  Productos Elaborados   </center></h2>

      <?php $_SESSION['SESS_MEMBER_ID']; $xsql=mysqli_query($conexion,"SELECT * FROM acceso WHERE id='".$_SESSION['SESS_MEMBER_ID']."'"); while($row=mysqli_fetch_array($xsql)){ $rol=$row['permiso']; }  
       if ($rol=="administrador")
        {
          ?>
    
     <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#nvoklink">Pan de Migajon</button> 
     <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#Bambazo">Pan de Pambazo</button>
     <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#Bolillo">Pan de Bolillo</button>
      <button type="button" class="btn btn-info btn" data-toggle="modal" disabled="true" data-target="#Nuez">Pan de Nuez</button>
      <button type="button" class="btn btn-info btn" data-toggle="modal" disabled="true"  data-target="#hnaranja">Hojaldra de Naranja</button>
<button type="button" class="btn btn-info btn" data-toggle="modal"  disabled="true"  data-target="#Nescle">Pan de Leche Nescle</button>  
<button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#polvoron">Pan de Polvoron</button>  

     <?php }  ?>
    

      
     <div class="modal fade" id="nvoklink" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Pan de Migajon</h4>
            <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
    <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
  

<table  BORDER="0"  class="table table-hover" >
	<tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="3"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
  <tr> <td ><label for="name"  >Nombre de Pan   </label></td>  <td colspan="3"> <input type="text" name="nombre"   class="form-control" /> <BR></td></tr>
      <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="3"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
         <tr> <td ><label for="name"  >Adorno Base</label></td><td colspan="2"> 
         <input name="abase" type="radio" value="si" />si <BR></td> <td> <input name="abase" type="radio" value="no" />no <BR></td></tr>

   
 <tr> <td colspan="4"><label for="name"  > Selecciona el Decorado :</label>
              <?php
            $options = array();include ("conexion.php");$result = mysqli_query($conexion,"SELECT * FROM base_decorado ");
           while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {$options[] = $row[1]; } $name = 'decoracion'; $selected = $name;  echo crear_dropdown( $name, $options, $selected ); ?>
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

 <!--Modal Bambazo -->
   <div class="modal fade" id="Bambazo" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Pan de Pambazo</h4>
            <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
    <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
  

<table  BORDER="0"  class="table table-hover" >
  <tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="3"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
  
  
     <tr> <td ><label for="name">Nombre de Pan</label></td><td colspan="3"> <input type="text" name="nombre" class="form-control" /> <BR></td></tr>
      <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="3"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
         <tr> <td ><label for="name">Adorno Base</label></td><td colspan="2"> 
         <input name="abase" type="radio" value="si"/>si <BR></td> <td> <input name="abase" type="radio" value="no" />no <BR></td>
          <tr> <td colspan="4"><label for="name"  > Selecciona el Decorado :</label>
              <?php $options = array();include ("conexion.php");$result = mysqli_query($conexion,"SELECT * FROM base_decorado");
           while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {$options[] = $row[1]; } $name = 'decoracion'; $selected = $name;  echo crear_dropdown( $name, $options, $selected ); ?>
 

         </tr>
                 <?php     ?>
   
 
              <?php ?>
      </table> 
     </center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="npambazo" value="Agregar Datos" size="20">Registar</button>
       </form>
      
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
     
    </div>
  </div>

<?php
if(isset($_POST["npambazo"])) 
{ 

  $tmasa="Pambazo";  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre'];  $deco=$_REQUEST['decoracion']+1;   $abase=$_REQUEST['abase'];


$xsql=mysqli_query($conexion,"SELECT * FROM masa_bambazo WHERE cantidad='".$tipox."'");
//  if(mysqli_num_rows($xsql)>0){
  while($row = mysqli_fetch_array($xsql))
             {
                $uharina= $row['harina'];$uazucar= $row['azucar'];$uamanteca= $row['manteca'];$uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura']; }

 $bdeco=mysqli_query($conexion,"SELECT * FROM base_decorado WHERE id='".$deco."'");
while($row = mysqli_fetch_array($bdeco)){$dnombre= $row['n_decorado'];$insimo1= $row['insumo1'];$insimo1b= $row['base1'];$insimo2= $row['insumo2'];$insimo2b= $row['base2'];$insimo3= $row['insumo3'];$insimo3b= $row['base3'];}
echo   $tbase1= $tipox*$insimo1b;   echo "<br>";echo   $tbase2= $tipox*$insimo2b; echo "<br>";   echo   $tbase3= $tipox*$insimo3b; $dosp=" ";  echo "<br>";
echo $tt1=$insimo1.$dosp.$tbase1; echo $tt2=$insimo2.$dosp.$tbase2; echo $tt3=$insimo3.$dosp.$tbase3;
$xsqla=mysqli_query($conexion,"SELECT * FROM nvo_pan");   while($row = mysqli_fetch_array($xsqla)){ $d1= $row['deco1']; $d2= $row['deco2']; $d3= $row['deco3'];     }





if($abase=="si")
{
    $xsqla=mysqli_query($conexion,"SELECT * FROM adorno WHERE gramos='1'");
    while($row = mysqli_fetch_array($xsqla)){ $uharinax= $row['Harina']; $uazucarx= $row['azucar'];$uamantecax= $row['manteca']; $sbx= $row['saborizante'];
                        $aha=$uharinax*$tipox; $aaz=$uazucarx*$tipox; $ama=$uamantecax*$tipox; $asb=$sbx*$tipox;     }

$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,agua,sal,levadura,aharina,aazucar,amanteca,asabor,deco1) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uagua','$usal','$ulevadura','$aha','$aaz','$ama','$asb','$tt1');");


}

else if($abase=="no"){
 // echo "zzzzzzz";
$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,agua,sal,levadura,deco1) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uagua','$usal','$ulevadura','$tt1');");


  ?>
<!--<div class="alert alert-warning">  <strong>Alerta!</strong> Gramos No registrados en Masa Migajon.</div>-->
    <?php
}



//}



/*
 $result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,precio,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura) 
    VALUES ('$nom','$tipox','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$ucanela','$uesencia','$uchuevo','$uagua','$usal','$ulevadura');");


*/
}


  ?>

  <!--  bolillo-->
    <div class="modal fade" id="Bolillo" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Pan de Bolillo</h4>
            <p> Rellena la informacion Solicitada</p>
        </div>
        <div class="modal-body">
    <center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
  

<table  BORDER="0"  class="table table-hover" >
  <tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="3"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
  
  
     <tr> <td ><label for="name">Nombre de Pan</label></td><td colspan="3"> <input type="text" name="nombre" class="form-control" /> <BR></td></tr>
      <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="3"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
        
                 <?php     ?>
   
 
              <?php ?>
      </table> 
     </center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="nbolillo" value="Agregar Datos" size="20">Registar</button>
       </form>
      
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
     
    </div>
  </div>

<?php
if(isset($_POST["nbolillo"])) 
{  $tmasa="Bolillo";  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre'];   //$adorno=$_REQUEST['decoracion']+1;  $abase=$_REQUEST['abase'];
$xsql=mysqli_query($conexion,"SELECT * FROM masa_bolillo WHERE cantidad='".$tipox."'");
  if(mysqli_num_rows($xsql)>0){
  while($row = mysqli_fetch_array($xsql)) { $uharina= $row['harina'];$uazucar= $row['azucar'];$uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura'];}
  $result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,agua,sal,levadura) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uagua','$usal','$ulevadura');");
} } ?>

 <!--  Nuez-->
    <div class="modal fade" id="Nuez" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Nuevo Pan de Nuez</h4><p> Rellena la informacion Solicitada</p></div>
        <div class="modal-body"><center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
          <table  BORDER="0"  class="table table-hover" >
          <tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="3"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name">Nombre de Pan</label></td><td colspan="3"> <input type="text" name="nombre" class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="3"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
         <tr><td><label for="name">Adorno Base</label></td><td colspan="2"><input name="abase" type="radio" value="si"/>si <BR></td><td><input name="abase" type="radio" value="no" />no <BR></td>
          </tr>
      </table></center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="nnuez" value="Agregar Datos" size="20">Registar</button>
       </form>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
     
    </div>
  </div>

<?php
if(isset($_POST["nnuez"])) 
{ 

  $tmasa="nuez";  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre'];  
   //$adorno=$_REQUEST['decoracion']+1;  
   $abase=$_REQUEST['abase'];
$xsql=mysqli_query($conexion,"SELECT * FROM masa_nuez WHERE cantidad='".$tipox."'");
  if(mysqli_num_rows($xsql)>0){
  while($row = mysqli_fetch_array($xsql))
             {
                $uharina= $row['Harina']; $uazucar= $row['azucar']; $uamanteca= $row['manteca']; $huevo= $row['huevo']; $mant1= $row['mant_nuez']; 
                $emant= $row['ecencia_mlla']; $p_nuez= $row['p_nuez'];  $uagua= $row['agua']; $ulevadura= $row['levadura']; $nuez= $row['nuez'];
                 
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

$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,agua,levadura,mant_nuez,p_nuez,nuez,aharina,aazucar,amanteca,asabor) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$huevo','$uagua','$ulevadura','$mant1','$p_nuez','$nuez','$aha','$aaz','$ama','$asb');");


}

else if($abase=="no"){
 // echo "zzzzzzz";
$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,ecencia_mlla,agua,levadura,mant_nuez,p_nuez,nuez,aharina,aazucar,amanteca,asabor) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$huevo','$emant','$uagua','$ulevadura','$mant1','$p_nuez','$nuez');");

  ?>
<!--<div class="alert alert-warning">  <strong>Alerta!</strong> Gramos No registrados en Masa Migajon.</div>-->
    <?php
} } 

}


  ?>


 <!--  HOJALDRA NARANJA-->
    <div class="modal fade" id="hnaranja" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Nuevo Pan de Nuez</h4><p> Rellena la informacion Solicitada</p></div>
        <div class="modal-body"><center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
          <table  BORDER="0"  class="table table-hover" >
          <tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="3"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name">Nombre de Pan</label></td><td colspan="3"> <input type="text" name="nombre" class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="3"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
         <tr><td><label for="name">Adorno Base</label></td><td colspan="2"><input name="abase" type="radio" value="si"/>si <BR></td><td><input name="abase" type="radio" value="no" />no <BR></td>
          </tr>
      </table></center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="nhnaranja" value="Agregar Datos" size="20">Registar</button>
       </form>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
     
    </div>
  </div>

<?php
if(isset($_POST["nhnaranja"])) 
{ 

  $tmasa="Hojalda";  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre'];  
   //$adorno=$_REQUEST['decoracion']+1;  
   $abase=$_REQUEST['abase'];
$xsql=mysqli_query($conexion,"SELECT * FROM masa_hnaranja WHERE cantidad='".$tipox."'");
  if(mysqli_num_rows($xsql)>0){
  while($row = mysqli_fetch_array($xsql))
             {
              /*  $uharina= $row['Harina']; $uazucar= $row['azucar']; $uamanteca= $row['manteca']; $huevo= $row['huevo']; $mant1= $row['mant_nuez']; $emant= $row['ecencia_mlla'];
                 $p_nuez= $row['p_nuez'];  $uagua= $row['agua']; $ulevadura= $row['levadura']; $nuez= $row['nuez'];
                */
                 $uharina= $row['Harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $uhuevo= $row['huevo']; $ucanela= $row['mant_naranja'];$uesencia= $row['ecencia_nja'];
                $uchuevo= $row['rayadura_naranja']; $uagua= $row['agua']; 
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

$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,agua,mant_naranja,ecencia_nja,rayadura_naranja,aharina,aazucar,amanteca,asabor) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$uagua','$ucanela','$uesencia','$uchuevo','$aha','$aaz','$ama','$asb');");


}

else if($abase=="no"){
 // echo "zzzzzzz";
$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,agua,mant_naranja,ecencia_nja,rayadura_naranja) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$uagua','$ucanela','$uesencia','$uchuevo');");

  ?>
<!--<div class="alert alert-warning">  <strong>Alerta!</strong> Gramos No registrados en Masa Migajon.</div>-->
    <?php
} } 

}


  ?>



 <!--  PAN DE LECHE NESCLE-->
    <div class="modal fade" id="Nescle" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Nuevo Pan de Leche Nescle</h4><p> Rellena la informacion Solicitada</p></div>
        <div class="modal-body"><center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
          <table  BORDER="0"  class="table table-hover" >
          <tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="3"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name">Nombre de Pan</label></td><td colspan="3"> <input type="text" name="nombre" class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="3"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
         <tr><td><label for="name">Adorno Base</label></td><td colspan="2"><input name="abase" type="radio" value="si"/>si <BR></td><td><input name="abase" type="radio" value="no" />no <BR></td>
          </tr>
      </table></center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="nnescle" value="Agregar Datos" size="20">Registar</button>
       </form>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
     
    </div>
  </div>

<?php
if(isset($_POST["nnescle"])) 
{ 

  $tmasa="Leche Nescle";  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre'];  
   //$adorno=$_REQUEST['decoracion']+1;  
   $abase=$_REQUEST['abase'];
$xsql=mysqli_query($conexion,"SELECT * FROM masa_lnescle WHERE cantidad='".$tipox."'");
  if(mysqli_num_rows($xsql)>0){
  while($row = mysqli_fetch_array($xsql))
  { $uharina= $row['harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $uhuevo= $row['huevo']; $ucanela= $row['mant_biscocho']; $uesenciam= $row['e_mant'];$ulevadura= $row['levadura'];
                $leche= $row['l_polvo_entera']; $uagua= $row['agua'];//$usal= $row['nuez'];
              /*  $uharina= $row['Harina']; $uazucar= $row['azucar']; $uamanteca= $row['manteca']; $huevo= $row['huevo']; $mant1= $row['mant_nuez']; $emant= $row['ecencia_mlla'];
                 $p_nuez= $row['p_nuez'];  $uagua= $row['agua']; $ulevadura= $row['levadura']; $nuez= $row['nuez'];
                *
                 $uharina= $row['Harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $uhuevo= $row['huevo']; $ucanela= $row['mant_naranja'];$uesencia= $row['ecencia_nja'];
                $uchuevo= $row['rayadura_naranja']; $uagua= $row['agua']; */
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

$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,ecencia_mlla,agua,levadura,mant_biscocho,l_polvo_entera,aharina,aazucar,amanteca,asabor) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$uesenciam','$uagua','$ulevadura','$ucanela','$leche','$aha','$aaz','$ama','$asb');");


}

else if($abase=="no"){
 // echo "zzzzzzz";
$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,agua,mant_naranja,ecencia_nja,rayadura_naranja) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$uagua','$ucanela','$uesencia','$uchuevo');");

  ?>
<!--<div class="alert alert-warning">  <strong>Alerta!</strong> Gramos No registrados en Masa Migajon.</div>-->
    <?php
} } 

}


  ?>



 <!--  PAN DE POLVORON-->
    <div class="modal fade" id="polvoron" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Nuevo Pan de polvoron</h4><p> Rellena la informacion Solicitada</p></div>
        <div class="modal-body"><center>
         <form class="contact_form" action="<?=$_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
          <table  BORDER="0"  class="table table-hover" >
          <tr><td><label for="name"  >Gramos de Pan   </label></td> <td colspan="3"> <input type="text" name="tpan"   class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name">Nombre de Pan</label></td><td colspan="3"> <input type="text" name="nombre" class="form-control" /> <BR></td></tr>
          <tr> <td ><label for="name"  >precio de venta   </label></td>  <td colspan="3"> <input type="text" name="precio"   class="form-control" /> <BR></td></tr>
         <tr><td><label for="name">Adorno Base</label></td><td colspan="2"><input name="abase" type="radio" value="si"/>si <BR></td><td><input name="abase" type="radio" value="no" />no <BR></td>
           <tr> <td colspan="4"><label for="name"  > Selecciona el Decorado :</label>
              <?php $options = array();include ("conexion.php");$result = mysqli_query($conexion,"SELECT * FROM base_decorado ");
           while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {$options[] = $row[1]; } $name = 'decoracion'; $selected = $name;  echo crear_dropdown( $name, $options, $selected ); ?>
          </tr>
      </table></center>
        </div>
        <div class="modal-footer">
        <button    class="btn btn-default"  type="submit" name="npolvoron" value="Agregar Datos" size="20">Registar</button>
       </form>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
     
    </div>
  </div>

<?php
if(isset($_POST["npolvoron"])) 
{ 

  $tmasa="polvoron";  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre'];  echo"decoracion    ".$deco=$_REQUEST['decoracion']+1;  $abase=$_REQUEST['abase'];
$xsql=mysqli_query($conexion,"SELECT * FROM masa_polvoron WHERE cantidad='".$tipox."'");
/*  if(mysqli_num_rows($xsql)>0){*/
  while($row = mysqli_fetch_array($xsql))
             {$uharina= $row['harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $royal= $row['royal'];   echo "col".$colorante= $row['colorante'];
                $e_mant= $row['e_mant'];$e_vainilla= $row['e_vainilla'];//$usal= $row['nuez'];
              /*  $uharina= $row['Harina']; $uazucar= $row['azucar']; $uamanteca= $row['manteca']; $huevo= $row['huevo']; $mant1= $row['mant_nuez']; $emant= $row['ecencia_mlla'];
                 $p_nuez= $row['p_nuez'];  $uagua= $row['agua']; $ulevadura= $row['levadura']; $nuez= $row['nuez'];
                *
                 $uharina= $row['Harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $uhuevo= $row['huevo']; $ucanela= $row['mant_naranja'];$uesencia= $row['ecencia_nja'];
                $uchuevo= $row['rayadura_naranja']; $uagua= $row['agua']; */
}

$bdeco=mysqli_query($conexion,"SELECT * FROM base_decorado WHERE id='".$deco."'");
     while($row = mysqli_fetch_array($bdeco))
             {  $dnombre= $row['n_decorado']; $insimo1= $row['insumo1'];$insimo1b= $row['base1'];$insimo2= $row['insumo2'];$insimo2b= $row['base2'];$insimo3= $row['insumo3'];$insimo3b= $row['base3'];  
           $insimo4= $row['insumo4'];$insimo4b= $row['base4']; $insimo5= $row['insumo5'];$insimo5b= $row['base5'];  


                }

          echo   $tbase1= $tipox*$insimo1b;   echo "<br>";echo   $tbase2= $tipox*$insimo2b; echo "<br>";   echo   $tbase3= $tipox*$insimo3b;  echo   $tbase4= $tipox*$insimo4b;  echo   $tbase5= $tipox*$insimo5b; 
          $dosp=" "; 
echo "<br>";
echo $tt1=$insimo1.$dosp.$tbase1;
echo $tt2=$insimo2.$dosp.$tbase2;
echo $tt3=$insimo3.$dosp.$tbase3;
echo $tt4=$insimo4.$dosp.$tbase4;
echo $tt5=$insimo5.$dosp.$tbase5;






if($abase=="si")
{
  $xsqla=mysqli_query($conexion,"SELECT * FROM adorno WHERE gramos='1'");
                    while($row = mysqli_fetch_array($xsqla)) { $uharinax= $row['Harina']; $uazucarx= $row['azucar'];$uamantecax= $row['manteca']; $sbx= $row['saborizante'];
                         /* $ucanela= $row['can_molida'];$uesencia= $row['ecencia_mlla'];$uchuevo= $row['col_huevo']; $uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura'];*/

                        $aha=$uharinax*$tipox; $aaz=$uazucarx*$tipox; $ama=$uamantecax*$tipox; $asb=$sbx*$tipox;

}

$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,ecencia_mlla,royal,col_amarillo,e_vainilla,aharina,aazucar,amanteca,asabor) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$e_mant','$royal','$colorante','$e_vainilla','$aha','$aaz','$ama','$asb');");


}

else if($abase=="no"){
 // echo "zzzzzzz";
$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,ecencia_mlla,col_huevo,royal,deco1,deco2,deco3,deco4) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$e_mant','$colorante','$royal','$tt1','$tt2','$tt3','$tt4');");

  ?>
<!--<div class="alert alert-warning">  <strong>Alerta!</strong> Gramos No registrados en Masa Migajon.</div>-->
    <?php
}  /* } */

}


  ?>


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
        <button    class="btn btn-default"  type="submit" name="adeeeeemasa" value="Agregar Datos" size="20">Guardar</button>
       </form>
      
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>

<!--  masa migajon   -->

 <div class="modal fade" id="masa_migajon" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masa de Migajon </h4>
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

  <?php
  include("conexion.php");

/****************************************************************************/ 
if(isset($_POST["addmasa"])) 
{ 
 $tipo=$_REQUEST['gramosp'];  $nomi=$_REQUEST['idpang'];
 $xsqla=mysqli_query($conexion,"SELECT * FROM masa_migajon WHERE cantidad='1'");
  while($row = mysqli_fetch_array($xsqla))
             {
                $uharina= $row['Harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $uhuevo= $row['huevo']; $ucanela= $row['can_molida'];$uesencia= $row['ecencia_mlla'];
                $uchuevo= $row['col_huevo']; $uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura'];
}

 $gharina=$tipo* $uharina;  $gazucar=$tipo* $uazucar;     $gmanteca=$tipo* $uamanteca;     $ghuevo=$tipo* $uhuevo;    $gcanela=$tipo* $ucanela;    $gesencia=$tipo* $uesencia;     $gchuevo=$tipo* $uchuevo;
   $gagua=$tipo* $uagua;   $gsal=$tipo* $usal;     $glevadura=$tipo* $ulevadura; 


 $result = mysqli_query($conexion,"INSERT INTO  masa_migajon(nom_insumo,cantidad,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura)
                                              VALUES ('$nomi','$tipo','$gharina','$gazucar','$gmanteca','$ghuevo','$gcanela','$gesencia','$gchuevo','$gagua','$gsal','$glevadura');");


/* $result = mysqli_query($conexion,"INSERT INTO  masa_migajon(nom_insumo,cantidad,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura) 
                          VALUES ('$nomi','$tipo',$gharina','$gazucar','$gmanteca','$ghuevo','$gcanela','$gesencia','$gchuevo','$gagua','$gsal','$glevadura');");

*/


} 
/************************************************************/
if(isset($_POST["Cagregrarlink"])) 
{ 

  $tmasa="Migajon";  $tipox=$_REQUEST['tpan'];  $precio=$_REQUEST['precio'];$nom=$_REQUEST['nombre']; echo "deco".$deco=$_REQUEST['decoracion']+1; echo "<br>"; // muestra el id decoracion
    $abase=$_REQUEST['abase'];

    $bdeco=mysqli_query($conexion,"SELECT * FROM base_decorado WHERE id='".$deco."'");
while($row = mysqli_fetch_array($bdeco)){$dnombre= $row['n_decorado'];$insimo1= $row['insumo1'];$insimo1b= $row['base1'];$insimo2= $row['insumo2'];$insimo2b= $row['base2'];$insimo3= $row['insumo3'];$insimo3b= $row['base3'];}
echo   $tbase1= $tipox*$insimo1b;   echo "<br>";echo   $tbase2= $tipox*$insimo2b; echo "<br>";   echo   $tbase3= $tipox*$insimo3b; $dosp=" ";  echo "<br>";
echo $tt1=$insimo1.$dosp.$tbase1; echo $tt2=$insimo2.$dosp.$tbase2; echo $tt3=$insimo3.$dosp.$tbase3;
$xsqla=mysqli_query($conexion,"SELECT * FROM nvo_pan");   while($row = mysqli_fetch_array($xsqla)){ $d1= $row['deco1']; $d2= $row['deco2']; $d3= $row['deco3'];     }



 /*  $user1 = strstr($d1, ':', true); echo $user1;  echo $domain1 = strstr($d1, ':');
$user2 = strstr($d2, ':', true); echo $user2;  echo $domain2 = strstr($d2, ':');
$user3 = strstr($d3, ':', true); echo $user3;  echo $domain3 = strstr($d3, ':');
*/

/* $bdeco=mysqli_query($conexion,"SELECT * FROM decoracion WHERE producto='".$ins1."'");
while($row = mysqli_fetch_array($bdeco)) { echo $dnombre= $row['producto']; echo $cantidad= $row['cantidad']; }echo "restaaaa".$resta_decoracion1=$cantidad-$cant1;

$bdeco=mysqli_query($conexion,"SELECT * FROM decoracion WHERE producto='".$ins2."'");
while($row = mysqli_fetch_array($bdeco)){echo $dnombre= $row['producto']; echo $cantidad2= $row['cantidad'];}echo "restaaaa2:  ".$resta_decoracion2=$cantidad2-$cant2;
echo "<br>"; echo "<br>";

 $bdeco=mysqli_query($conexion,"SELECT * FROM decoracion WHERE producto='".$ins3."'");
while($row = mysqli_fetch_array($bdeco)) { echo $dnombre= $row['producto']; echo $cantidad3= $row['cantidad']; }echo "restaaaa".$resta_decoracion3=$cantidad3-$cant3;

$bdeco=mysqli_query($conexion,"SELECT * FROM decoracion WHERE producto='".$ins4."'");
while($row = mysqli_fetch_array($bdeco)){echo $dnombre= $row['producto']; echo $cantidad4= $row['cantidad'];}echo "restaaaa2:  ".$resta_decoracion4=$cantidad4-$cant4;
echo "<br>"; echo "<br>";

*/


/*echo $deco01=$tipox*$cant1; echo $deco02=$tipox*$cant2;  echo $deco03=$tipox*$cant3; echo $deco04=$tipox*$cant4;  
//echo $deco01=$ins1.$deco01;
echo $deco01 = number_format($deco01, 3, '.', '');$nom_deco1=$ins1.$deco01;echo $deco02 = number_format($deco02, 3, '.', '');  $nom_deco2=$ins2.$deco02; //  con 5 decimales
echo $deco03 = number_format($deco03, 3, '.', ''); $nom_deco3=$ins3.$deco03; echo $deco04 = number_format($deco04, 3, '.', ''); $nom_deco4=$ins4.$deco04;   //  con 5 decimales
*/

$xsql=mysqli_query($conexion,"SELECT * FROM masa_migajon WHERE cantidad='".$tipox."'");
  if(mysqli_num_rows($xsql)>0){
  while($row = mysqli_fetch_array($xsql))
             {
                $uharina= $row['Harina']; $uazucar= $row['azucar'];$uamanteca= $row['manteca']; $uhuevo= $row['huevo']; $ucanela= $row['can_molida'];$uesencia= $row['ecencia_mlla'];
                $uchuevo= $row['col_huevo']; $uagua= $row['agua'];$usal= $row['sal'];$ulevadura= $row['levadura'];
}

if($abase=="si")
{
    $xsqla=mysqli_query($conexion,"SELECT * FROM adorno WHERE gramos='1'");
  while($row = mysqli_fetch_array($xsqla)){ $uharinax= $row['Harina']; $uazucarx= $row['azucar'];$uamantecax= $row['manteca']; $sbx= $row['saborizante'];}

         $aha=$uharinax*$tipox; $aaz=$uazucarx*$tipox; $ama=$uamantecax*$tipox; $asb=$sbx*$tipox;

 /* $r_adorno=mysqli_query($conexion,"SELECT * FROM inv_gen WHERE producto='Harina'");
  while($row = mysqli_fetch_array($r_adorno)){ $uharinax= $row['Harina']; $uazucarx= $row['azucar'];$uamantecax= $row['manteca']; $sbx= $row['saborizante'];}
$sql1="UPDATE decoracion SET  cantidad='".$resta_decoracion."' WHERE producto='".$ins1."'";  $query_update1 = mysqli_query($conexion,$sql1);
$sql2="UPDATE decoracion SET  cantidad='".$resta_decoracion2."' WHERE producto='".$ins2."'";  $query_update2 = mysqli_query($conexion,$sql2);
*/




$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura,aharina,aazucar,amanteca,asabor,deco1,deco2,deco3,deco4) 
VALUES('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$ucanela','$uesencia','$uchuevo','$uagua','$usal','$ulevadura','$aha','$aaz','$ama','$asb','$tt1','$tt2','$tt3','$nom_deco4');");


}

else if($abase=="no"){
 // echo "zzzzzzz";
$result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,masa,precio,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura,deco1,deco2,deco3,deco4) 
    VALUES ('$nom','$tipox','$tmasa','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$ucanela','$uesencia','$uchuevo','$uagua','$usal','$ulevadura','$tt1','$tt2','$tt3','$nom_deco4');");


  ?>
<!--<div class="alert alert-warning">  <strong>Alerta!</strong> Gramos No registrados en Masa Migajon.</div>-->
    <?php
}



}



/*
 $result = mysqli_query($conexion,"INSERT INTO  nvo_pan(nombre,nom_insumo,precio,Harina,azucar,manteca,huevo,can_molida,ecencia_mlla,col_huevo,agua,sal,levadura) 
    VALUES ('$nom','$tipox','$precio','$uharina','$uazucar','$uamanteca','$uhuevo','$ucanela','$uesencia','$uchuevo','$uagua','$usal','$ulevadura');");


*/
}


  ?>

   	<div class="datos_ajax"></div><!-- Datos ajax Final -->

 
	
  <table  class="table table-hover"    id="tabla_lista_paises" >
    <thead > <tr> <th>Nombre </th>    <th>cantidad </th><th>Tipo Masa</th > <th>ver </th >  </tr>   </thead>
    <?PHP include("conexion.php");


             $resultx = mysqli_query($conexion,"SELECT * FROM nvo_pan ORDER BY  nombre DESC; ");
            while($row = mysqli_fetch_array($resultx))
             {  $imasa=$row["nombre"];
       ?>      <tr>
             		   <td ><?php echo($row["nombre"]); ?> </td><td><?php echo($row["nom_insumo"]); ?> G</td><td><?php echo($row["masa"]); ?> </td>   
       
          
               <td ><button type="button"   class="btn btn-info"  onclick="location.href = 'ver_info.php?id=<?php print($imasa);?>'" >  <i class='glyphicon glyphicon-unchecked'></i>Informacion-completa</button> </td >
            


      
             </tr>
 <?php      
  

}  ?>

		 </table>
   <!--<button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#masa_migajon">Masa de Migajon</button></br>-->
			
 
	</div> 
	
 </div>

		<script src="app.js"></script>

    
	

   <!--     <script> 		$(document).ready(function(){ 		load(1); 		}); </script>-->
</body>
</html>