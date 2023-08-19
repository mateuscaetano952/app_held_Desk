<?php
 session_start();

if($_SESSION['autenficado'] != 'sim'){
    header('location: index.php?login=erro2');
}
  

?>