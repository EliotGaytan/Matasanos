<?php 

session_start();
$mail=$_POST["correo"];
$pass=$_POST["contra"];
$mysqli = new mysqli("localhost", "root", "", "matasanos") or die("No se pudo connectar");
$mysqli->set_charset('utf8');


$sql =$mysqli->query( "SELECT Registro FROM usuario WHERE Correo='$mail' and Password='$pass'");
$CONT=$sql->num_rows;


if($CONT>0){
  $resultado="ok";
  $f = $sql->fetch_object();
  $_SESSION['id_usuario']=$f->Registro;
  } 

  else
  {
  $resultado=0;
  }

 echo $resultado;
 
?>
