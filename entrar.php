<?php
include("lib.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "select * from usuarios where usuario = '".$usuario."' and senha = '".$senha."'";
$query = mysqli_query($link,$sql);
if(mysqli_num_rows($query)==0){
?>

    <script>
        alert("Usuario ou senha incorretos.");
        location.href = 'index.php';
    </script>
    <?php
    exit;
    }
    session_start();
    $row = mysqli_fetch_object($query);
    $_SESSION['usuario'] = $row->id_usuario;


    header("location: veiculos/home.php");
    exit;
?>