
	
	<?php /*
$host='localhost';
$usuario='root';

$pass='123';
$bd='eclipse';
*/
//$conexion=mysqli_connect("mysql.hostinger.mx", "u865680260_root", "0295452081", "u865680260_ca") or die("No se pudo crear la conexion con SQL.");
$conexion=mysqli_connect("localhost", "root", "", "pan_base") or die("No se pudo crear la conexion con SQL.");
//mysqli_select_db($conexion) or die("No se pudo crear la conexion con la base de datos.");
mysqli_select_db($conexion, "pan_base");

	
	

?>