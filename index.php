<?php 

session_start();

if(isset($_SESSION['logon']) && !empty($_SESSION['logon'])){

      header("Location:view/acessos.php");
      //echo $_SESSION['logado'];
      
}else{
    header("Location:view/login.php");
    exit;
}



