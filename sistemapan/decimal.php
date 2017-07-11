<?php
$número = 1234.12345678;

// notación inglesa sin separador de millares
echo $english_format_number = number_format($número, 8, '.', '');
// 1234.57
?>



<?php
$email  = 'Harina:01245';
$domain = strstr($email, ':');
echo $domain; // mostrará @example.com

$user = strstr($email, ':', true); // Desde PHP 5.3.0
echo $user; // mostrará name




//  esta  funciom se puede aplicar a los inventarios 

 include("conexion.php");

  $xsqla=mysqli_query($conexion,"SELECT * FROM nvo_pan");
  while($row = mysqli_fetch_array($xsqla))
             {  $d1= $row['deco1'];}

         $user1 = strstr($d1, ':', true); // Desde PHP 5.3.0
echo $user1;  echo "<br>"; echo "<br>"; 
echo $domain = strstr($d1, ' ');




?>
