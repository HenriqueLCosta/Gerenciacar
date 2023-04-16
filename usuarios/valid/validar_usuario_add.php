<?php 
include ("../validar.php");
include ("../../lib.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

$usuarioauten = $_SESSION['usuario'];
$senhaauten = $_POST['senhaauten'];

$sql = "select * from usuarios where id_usuario = '".$usuarioauten."' and senha = '".$senhaauten."'";
$query = mysqli_query($link,$sql);
if(mysqli_num_rows($query)==0){
?>

    <script>
        alert("Autenticação não verificada.");
        location.href = '../usuarios_add.php';
    </script>
    <?php
    exit;
}else
{
    # Verifica se usuario ja existe
    $sql = "select * from usuarios where usuario = '".$usuario."'";
        $query = mysqli_query($link,$sql);
        if(mysqli_num_rows($query)==0){
    
            #cadastro do usuario
        $sql = "INSERT INTO `usuarios` (`id_usuario`, `nome`, `usuario`, `senha`, `tipo`) VALUES (NULL, '".$nome."',
        '".$usuario."', '".$senha."', '".$tipo."')";

        $query = mysqli_query($link, $sql);
        if ($query == False) {
            ?>
        <script type='text/javascript'>
                alert('Ocorreu algum erro ao cadastrar o usuario. Verifique os dados e tente novamente.');
                location.href = '../usuarios_add.php';
            </script>
        <?php
        exit();
        } else{
            ?>
        <script>alert('Dados Salvos com sucesso!');</script>

        <?php   
            header("location: ../home.php");
            exit();
            
        }
    
    }
    else
    {
        ?>
        <script>
            alert("Usuario nao disponivel.");
            location.href = '../usuarios_add.php';
        </script>
        <?php
        exit;


    }
}
