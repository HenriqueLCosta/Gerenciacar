<?php

session_start();
session_destroy();
if(!$_SESSION['usuario']) {
        
       header("location: index.php");
	   exit();
    };
    header("location: index.php");
?>