 <?php
	//iniciar una sesion para guardar las coockies
	session_start();
	//realizar la conexión a la base de datos
	require_once('conexion.php');
	//recoger los valores de username y password
	echo $username = $_POST['username'];
	echo $password = $_POST['password'];
	echo $password=sha1($password) ; //   poener   para cifrar 
 //  $password = sha1($password);
	
	//realizar el query
$qry="SELECT * FROM  `usuarios` WHERE  `nombre` LIKE  '$username' AND  `password` LIKE  '$password'";
//guardar resultado de la query
	$result=mysqli_query($conexion,$qry);

	//comprobar si he conseguido algún valor, ni no he conseguido nada seguramente ha fallado el enlace a la BD
	if($result ) {
		if(mysqli_num_rows($result) == 1) {
			
			
			
			
			//Me he logado correctamente, ahora me falta cargar los pemisos
			//crear una sesesion (cookie) para guardar los datos)
			session_regenerate_id();
			//acceder al array de los datos obtenidos de la base de datos
			while ($member = mysqli_fetch_array($result)) {
			//guardar en la sesión con id desconocido, diferentes variables, con diferentes permisos (0,1)
				
				$id=$member['id_acceso'];
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				$_SESSION['SESS_USERNAME'] = $member['usuario'];
				$_SESSION['SESS_P'] = $member['acceso'];
					$_SESSION['rol'] = $member['permiso'];
				
				}
			
			
			
	
			
			}
			//finalizar la sesión de creación de cookies
			session_write_close();
			//si me he logado bien, ir directamente a la pagina index
		//	header("location: index.php");
			exit();
		}else {
		   //si me he logado mal ir de nuevo a la pagina de logueo
		//	header("location: acceso.php");
			exit();
		}
	
?>