<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	  <style type="text/css">
	  	* {
	border: 0px;
	margin: 0px;
	padding: 0px;
}
.capita {
	position: absolute;
	top: 3px;
left: 500px;
}
.capita2 {
	position: absolute;
	top: 340px;
left: 500px;
}
.mitabla {
	position: absolute;
	/*top: 100px;*/
	left: 10px;

}
.mitabla2 {
	position: absolute;
	top: 100px;
	left: 100px;
	width: -moz-available;

}
.capita3 {
	position: absolute;
	top: 340px;
left: 1100px;
}
.mitabla3 {
	position: absolute;
	/*top: 100px;*/
	left: 10px;

}


	  </style>
</head>
<body>



<?php include("conexion.php");?>

 <form class="contact_form" action="<?php $_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
	      <table  BORDER="0"  class="table table-hover" >
	      <h1>Lista de productos para hacer</h1>
	      <label>producto</label>
	     
     		 <tr> <td color="red">
					<label for="name"  >Pan 1   </label>
					 <select name="tipo1">	<option>concha</option><option>Dona</option> <option>Polvoron</option>    </select></td>
			   <td> <input type="text" name="pan1"   class="form-control" /> <BR></td>
			</tr>
			 <tr> <td color="red">
					<label for="name"  >Pan 2   </label>
					 <select name="tipo2">
	      	<option>concha</option><option>Dona</option> <option>Polvoron</option>
	      </select></td>
			   <td> <input type="text" name="pan2"   class="form-control" /> <BR></td>
			</tr>
		<!--	 <tr> <td color="red">
					<label for="name"  >Pan 3   </label>
					 <select name="tipo3">
	      	<option>concha</option><option>Dona</option> <option>Polvoron</option>
	      </select></td>
			   <td> <input type="text" name="pan3"   class="form-control" /> <BR></td>
			</tr>-->
		<!--	<tr>  <td>		  <label for="name"   >Costo   </label></td><td>    <input type="text" name="mar" class="form-control"/> <BR></td></tr>-->
			
			
			</table> 
		 
        
       
		    <button    class="btn btn-default" type="submit" name="SagregrarX" value="Agregar Datos" size="20">Registar</button>
			 </form>
			
<?php

if(isset($_POST["SagregrarX"])) 
{ 
	$tipo1=$_REQUEST['tipo1'];	$tipo2=$_REQUEST['tipo2'];//activr	$tipo3=$_REQUEST['tipo3'];
$p1=$_REQUEST['pan1'];$p2=$_REQUEST['pan2'];   //$p3=$_REQUEST['pan3'];echo "<br>";
echo $tipo1; echo "<br>";echo $p1; echo "<br>";
echo $tipo2;echo "<br>";echo $p2;echo "<br>";
//activar      echo $tipo3;echo "<br>";echo $p3;echo "<br>";
//$mar=$_REQUEST['mar'];
//$car=$_REQUEST['car'];
/*
echo "**************PAN 1**************";
echo "<br>";*/
 $xsql=mysqli_query($conexion,"SELECT * FROM pan_insumos WHERE pan='".$tipo1."'");
	//$res=mysql_query($sql,$con);
	while($row=mysqli_fetch_array($xsql))
	{
	$ping1=$row['ing1'];
	$ping2=$row['ing2'];
	$ping3=$row['ing3'];
	//echo $ping1;  
	}	

//	number_format(numero, decimales, separador_decimal, separador_miles); 
//$numero_formateado= number_format($p2, "2"); 
	//$numero_formateado = number_format($p1, 3, ".", ","); 
//echo $numero_formateado;
//echo $ting1=$numero_formateado*$ping1;
      $ting1p1=$p1*$ping1;
  $ting2p2=$p1*$ping2;?>

  <div class="capita2">
	<table class="mitabla2">
			<tr><h1>Cantidad por pan </h1> </tr>

	<tr><td colspan="3">Cantidad por cada pan #1   :  <?php echo $tipo1; echo $p1;?></td> </tr>
	<tr><td colspan="3">Cantidad por cada pan #2  :  <?php echo $tipo2; echo $p2;?></td> </tr>
	<tr><td colspan="3">***PAN 1***</td> </tr>
	<tr><td colspan="3">Ingrediente 1  :  <?php echo $ting1p1;?></td> </tr>
		<tr><td colspan="3">Ingrediente 2  :  <?php echo $p1*$ping2;?></td> </tr>


	</table>
	</div>

	<div class="capita2">
	<table class="mitabla2">
			<tr><h1>Cantidad por pan </h1> </tr>

	<tr><td colspan="3">Cantidad por cada pan #1   :  <?php echo $tipo1; echo $p1;?></td> </tr>
	<tr><td colspan="3">Cantidad por cada pan #2  :  <?php echo $tipo2; echo $p2;?></td> </tr>
	<tr><td colspan="3">***PAN 1***</td> </tr>
	<tr><td colspan="3">Ingrediente 1  :  <?php echo $ting1p1;?></td> </tr>
	<tr><td colspan="3">Ingrediente 2  :  <?php echo $p1*$ping2;?></td> </tr>
	<tr><td colspan="3">*************</td> </tr>
<?php $xsql=mysqli_query($conexion,"SELECT * FROM pan_insumos WHERE pan='".$tipo2."'");
	//$res=mysql_query($sql,$con);
	while($row=mysqli_fetch_array($xsql))
	{
	$ping12=$row['ing1'];
	$ping2=$row['ing2'];
	$ping3=$row['ing3'];
	//echo $ping1;  
	}	
	 $ting1p2=$p2*$ping12;
	  //echo "Ingrediente1:    ";echo $ting1p2;echo "<br>";
//	echo $p2*$ping2;echo "<br>";
//	echo $p2*$ping3;echo "<br>";
//	echo "****************************";

/*	echo "<br>"; 
echo "Total por Ingrediente 1 ";*/
$ii=$ting1p1+$ting1p2;
//echo $ii;

?>
<tr><td colspan="3">***PAN 2***</td> </tr>
<tr><td colspan="3">Ingrediente 1  :  <?php echo $ting1p2;?></td> </tr>
<tr><td colspan="3">Ingrediente 2  :  <?php echo $p1*$ping2;?></td> </tr>
<tr><td colspan="3">Total por ingredientes</td> </tr>
<tr><td colspan="3">Ingrediente 1  :  <?php echo $ii;?></td> </tr>
<?php $xsqlt=mysqli_query($conexion,"SELECT * FROM inv_gen WHERE nombre='ing1'");
	//$res=mysql_query($sql,$con);
	while($rowt=mysqli_fetch_array($xsqlt))
	{
	$cant1=$rowt['cant'];
	/*$ping2=$row['ing2'];
	$ping3=$row['ing3'];
	//echo $ping1;  */
	}	

$tti=$cant1-$ii;

//echo "<br>";
//echo $tti;
?>
<tr><td colspan="3">Descuento total por Ingrediente  :  <?php echo $tti;?></td> </tr>


	</table>
	</div>

<?php
  //  echo "Ingrediente1:    ";echo $ting1p1;echo "<br>";
	//echo $p1*$ping2;echo "<br>";
	//echo $p1*$ping3;echo "<br>";
//	echo "****************************";

	
/*echo "**********PAN 2******************";
echo "<br>";
 */

//	number_format(numero, decimales, separador_decimal, separador_miles); 
//$numero_formateado= number_format($p2, "2"); 
	//$numero_formateado = number_format($p1, 3, ".", ","); 
//echo $numero_formateado;
//echo $ting1=$numero_formateado*$ping1;
  

 


}	




?>

<!--   PARA HACER EL PAM -->
			<form class="contact_form" action="<?php $_SERVER['PHP_SELF']?>"  method="post" name="f1"  enctype="multipart/form-data"        >
	 		     <table  BORDER="0"  class="table table-hover" >
	  			    <h1>Hacer pieza  de pan</h1>
	    			  <td>Producto</td>
	      <td><select name="tipo1p">	<option>concha</option><option>Dona</option> <option>Polvoron</option>    </select></td>
     		 <tr> <td color="red">
					<label for="name"  >Ingrediente 1   </label></td>
			   <td> <input type="text" name="cantp"   class="form-control" /> <BR></td>
			</tr>
			 <tr> <td color="red">
					<label for="name"  >Ingrediente 2   </label></td>
			   <td> <input type="text" name="cant2p"   class="form-control" /> <BR></td>
			</tr>
			 <tr> <td color="red">
					<label for="name"  >Ingrediente 3   </label></td>
			   <td> <input type="text" name="cant3p"   class="form-control" /> <BR></td>
			</tr>
		<!--	<tr>  <td>		  <label for="name"   >Costo   </label></td><td>    <input type="text" name="mar" class="form-control"/> <BR></td></tr>-->
			
			
			</table> 
		
		    <button    class="btn btn-default" type="submit" name="Sagregrarp" value="Agregar Datos" size="20">Registar</button>
			 </form>
			
<?php

if(isset($_POST["Sagregrarp"])) 
{ 
$pan=$_REQUEST['tipo1p'];
$c1p=$_REQUEST['cantp'];
$c2p=$_REQUEST['cant2p'];
$c3p=$_REQUEST['cant3p'];echo "<br>";
echo $c1p; echo "<br>";
echo $c2p;echo "<br>";
echo $c3p;
//$mar=$_REQUEST['mar'];
//$car=$_REQUEST['car'];
$result = mysqli_query($conexion,"INSERT INTO  pan_insumos(pan,ing1,ing2,ing3) VALUES ('$pan','$c1p','$c2p','$c3p');");
}


?>
 <div class="capita3">
 <div class="table table-hover"  >
	<table class="table table-hover" >
	  <tr >
	  
        <th>Tipo de pan </th>
        <th>ing1 </th>
        <th>ing2</th> <th>ing3</th>
		  
		  
      </tr>

	
            <?PHP include("conexion.php");
									
						
							$result = mysqli_query($conexion,"SELECT * FROM pan_insumos");
							while($row = mysqli_fetch_array($result))
							{
								
							?><tr>
							<td> <label > <?php print($row["pan"]); ?></label></td>
								<td> <label > <?php print($row["ing1"]); ?></label></td>
								<td> <label > <?php print($row["ing2"]); ?></label></td>
								<td> <label > <?php print($row["ing3"]); ?></label></td>
<?php	}  ?>

</tr></table></div></div>



</body>
</html>