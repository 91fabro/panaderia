<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>   </title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/mybootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
  

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
  
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/mybootstrap.css">

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->



  
 

  </head>
  
     <div class="modal-header">   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Acceder Administrador</button>
	
        </div>
  
  
  
<!-- NAVBAR
================================================== -->
  <body>
   
<?php // $localIP = getHostByName(getHostName());    //echo $localIP;?>
  
  <div class="container">
  <h2>  </h2>
 <!-- <br><br><br><br><br><br>-->
  <!-- Trigger the modal with a button -->
  <center>   <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
 
 
       </div></div>
	      <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
    <form class="contact_form" action="iniciov.php"   method="post" name="f1"         >
	<input type="hidden" name="tipo" value="visitante" /> 
	
  
   	 </form>     </div></div>   </div>
   </center>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header-acceso">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Acceso al Sistema</h4>
		  <span>Solo para usuarios autorizados.</span>
        </div>
		
		
        <div class="modal-bodyrep">
		<center>
		
		  <img src="userlock.jpg"   class="img-circle" width="200px" height="201px">
				
         <form class="contact_form"  action="checklogin.php"  method="post" name="f1"         >
		 </br></br>
             <table  BORDER="0"  width="80px" >
              <tr>
			  <td > <label for="name"  > Usuario  </label></td>
			   <td> <input type="text"  name="username" /> <BR></td>
			</tr>
		  <tr>	  <td > <label for="name"  >  </label></td> </tr>
		    <tr>	  <td > <label for="name"  >  </label></td> </tr>
		
			<tr>
			 <td>		  <label for="name"   >Contraseña   </label></td>
		<td>    <input type="password" name="password"  class="inputpass"/> <BR></td>
			</tr>
			 
			</table> 
		   </br> </br>
		 
		 </center>
        </div>
        <div class="modal-footer">
		  <button    class="btn btn-default"  type="submit" name="agregrar" value="Agregar Datos" size="20">Ingresar</button>
		   </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
    </div>
  </div>
   
  
</div>


<?php  include("indexinicioV.php") ; ?>

	
	</body>
 
  
</html>