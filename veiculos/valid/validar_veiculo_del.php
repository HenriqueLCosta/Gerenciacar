<?php
include ("../../lib.php");
include ('../validar.php');

$id_veiculo = $_GET['id_veiculo'];

#apagar o veiculo
$sql = "DELETE FROM veiculos WHERE id_veiculo = '".$id_veiculo."'";

$query = mysqli_query($link, $sql);
if ($query == False) {
    ?>
<script type='text/javascript'>
		alert('Ocorreu algum erro ao apagar o veiculo. Verifique os dados e tente novamente.');
		location.href = '../veiculos_read.php?id_veiculo=<?php echo $id_veiculo?>';
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