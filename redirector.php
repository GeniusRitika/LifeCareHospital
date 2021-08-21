<?php
 
$rb = $_POST['choice'];
 
switch ($rb) {
   case 1:
      header("Location: LoginAsAdmin.php");
      exit;
      break;
      
    case 2:
      header("Location: LoginAsPatient.php");
      exit;
      break;
}
 
?>