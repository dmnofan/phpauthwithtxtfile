<?php
    extract($_REQUEST);
    $file=fopen("users.txt","a");
    
    fwrite($file, $username ."|");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: signup.php");
 ?>
