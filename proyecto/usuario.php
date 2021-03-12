<?php
  	$UA = "admin";
     $CA = "nimda";
  
     $UC = "cliente";
     $CC = "etneilc";
     if( $_POST['user'] == $UA && $_POST['password'] == $CA )
     {
      header("location: admin.php");
     } else {
      if($_POST['user'] == $UC && $_POST['password'] == $CC)
      {
              header("location: cliente.php");
               echo "Cliente";
            } 
            else{
           echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
         }
   }

   
?>