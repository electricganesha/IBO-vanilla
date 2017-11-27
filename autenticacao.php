<?php
    $password = $_POST['pass'];
    echo $password;
D:

    if ($password == 'glaciares' || $password == 'Glaciares' ){
      setcookie('company','ticketline', time() + (60));
      header("location: ibo.php");
    }else{
      header("location: index.html");
    }
?>
