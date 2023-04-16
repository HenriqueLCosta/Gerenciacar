<?php 
include ("../../lib.php");
include ('../validar.php');

$id_veiculo = $_POST['id_veiculo'];

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$versao = $_POST['versao'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

$placa = $_POST['placa'];
$renavam = $_POST['renavam'];
$tipo = $_POST['tipo'];



#cadastro do veiculo
$sql = "UPDATE veiculos SET id_veiculo = '".$id_veiculo."', `renavam` = '".$renavam."', `placa` = '".$placa."', `marca` = '".$marca."',
 `modelo` = '".$modelo."', `versao` = '".$versao."', `ano` = '".$ano."', `cor` = '".$cor."', `tipo` = '".$tipo."' WHERE id_veiculo = '".$id_veiculo."'";
$query = mysqli_query($link, $sql);
if ($query == False) {
    ?>
<script type='text/javascript'>
		alert('Ocorreu algum erro ao cadastrar o veiculo. Verifique os dados e tente novamente.');
		location.href = '../veiculos_update.php?id_veiculo=<?php echo $id_veiculo?>';
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