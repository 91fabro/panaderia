<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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




     <body class="body">
  <?php  include("modal_eliminar.php"); ?>
   <div id="loader" class="text-center"></div>
   	<div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
	<div class="outer_div">



  
<?php/*
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
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">  Negocio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
      		 <li class="active"><a href="Agregar_pan.php">Agregar/ver Pan</a></li><li><a href="Pedido.php">Orden de Pedido</a></li><li><a href="Pedido.php">Adornos de Pan</a></li>
					<li><a href="Inventario.php">Inventario </a></li>
	         
		
              </ul>
            </div>
       
        </nav>

   <!--   </div>-->
    </div>





 <h1><center> Lista de Adornos para piezas de pan </center></h1>
 

 
 <center>
	
  <table  class="table table-hover"    id="tabla_lista_paises" >
    <thead >
      <tr >
	     
      <th>Nombre </th>    <th>cantidad </th><th>Harina </th>  <th>Azucar </th> <th>Manteca</th> <th>Huevo</th> 
       
      </tr>
    </thead>
    <tbody>


	 		<?PHP include("conexion.php");


             $resultx = mysqli_query($conexion,"SELECT * FROM adorno ORDER BY  nombre ASC;

 ");
            while($row = mysqli_fetch_array($resultx))
             {
       ?>      <tr>
             	<td ALIGN='CENTER' width='100'><?php echo($row["nombre"]); ?>  <td ALIGN='CENTER' width='100'><?php echo($row["elemento1"]); ?><td ALIGN='CENTER' width='100'><?php echo($row["elemento2"]); ?> Gramos </td><td ALIGN='CENTER' width='100'><?php echo($row["elemento3"]); ?> Gramos </td>
             	   <td ALIGN='CENTER' width='100'><?php echo($row["elemento4"]); ?> Gramos </td><td ALIGN='CENTER' width='100'><?php echo($row["elemento5"]); ?> Gramos </td>
             	   <td ALIGN='CENTER' width='100'><?php echo($row["elemento5"]); ?> Gramos </td>
 <?php      
         

}  ?>




			

			 </table>


		</center>	
 
	</div> 
	
 </div>

		<script src="app.js"></script>

    
	

   <!--     <script> 		$(document).ready(function(){ 		load(1); 		}); </script>-->
</body>
</html>

</body>
</html>