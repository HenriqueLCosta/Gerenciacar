<?php 
include ("../validar.php");
include ("../../lib.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$id_usuario = $_POST['id_usuario'];

$sql = "SELECT * FROM `usuarios` WHERE id_usuario = '".$id_usuario."'";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($row = mysqli_fetch_object($query)) {
    $senha1 = utf8_encode($row->senha);}
if($senha == ""){
    $senha = $senha1;
    
}



$tipo = $_POST['tipo'];

$usuarioauten = $_SESSION['usuario'];
$senhaauten = $_POST['senhaauten'];

$sql1 = "select * from usuarios where id_usuario = '".$usuarioauten."' and senha = '".$senhaauten."'";
$query1 = mysqli_query($link,$sql1);
if(mysqli_num_rows($query1)==0){
?>

    <script>
        alert("Autenticação não verificada.");
        location.href = '../usuarios_add.php';
    </script>
    <?php
    exit;
}
else
{


#atualizacao do usuario
$sql = "UPDATE `usuarios` SET `id_usuario`='".$id_usuario."',`nome`='".$nome."',`usuario`='".$usuario."',
`senha`='".$senha."',`tipo`='".$tipo."' WHERE id_usuario = '".$id_usuario."'";

$query = mysqli_query($link, $sql);
if ($query == False) {
    ?>
<script type='text/javascript'>
		alert('Ocorreu algum erro ao cadastrar o usuario. Verifique os dados e tente novamente.');
		location.href = '../usuarios_add.php';
	</script>
<?php
exit();
} else {
    ?>
<script>alert('Dados Salvos com sucesso!');</script>

<?php   
    header("location: ../home.php");
    exit();
    
}

}?>