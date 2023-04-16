<?php 
include ("../../lib.php");
include ('../validar.php');

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$versao = $_POST['versao'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

$placa = $_POST['placa'];
$renavam = $_POST['renavam'];
$tipo = $_POST['tipo'];



#cadastro do veiculo
$sql = "INSERT INTO `veiculos` (`id_veiculo`, `renavam`, `placa`, `marca`, `modelo`, `versao`, `ano`, `cor`, `tipo`)
 VALUES (NULL, '".$renavam."', '".$placa."', '".$marca."', '".$modelo."', '".$versao."', '".$ano."', '".$cor."', '".$tipo."')";

$query = mysqli_query($link, $sql);
if ($query == False) {
    ?>
<script type='text/javascript'>
		alert('Ocorreu algum erro ao cadastrar o veiculo. Verifique os dados e tente novamente.');
		location.href = '../veiculos_add.php';
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