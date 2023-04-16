<?php
include ("../validar.php");
include ("../../lib.php");
$id_usuario = $_GET['id_usuario'];

#apagar o veiculo
$sql = "DELETE FROM usuarios WHERE id_usuario = '".$id_usuario."'";

$query = mysqli_query($link, $sql);
if ($query == False) {
    ?>
<script type='text/javascript'>
		alert('Ocorreu algum erro ao apagar o veiculo. Verifique os dados e tente novamente.');
		location.href = '../usuarios_read.php?id_usuario=<?php echo $id_usuario?>';
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
?>