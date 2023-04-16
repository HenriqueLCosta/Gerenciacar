<?php
include ("validar.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gerenciador de veiculos</title>
<link rel="canonical"
	href="https://getbootstrap.com/docs/5.2/examples/sidebars/">

<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
	crossorigin="anonymous">
</head>


<script src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"
	integrity="sha256-HkXXtFRaflZ7gjmpjGQBENGnq8NIno4SDNq/3DbkMgo="
	crossorigin="anonymous"></script>

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css"
	href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script
	src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<script>
	$(document).ready( function () {
	    $('#tabela').DataTable({
		        language:{
		        "sEmptyTable": "Nenhum registro encontrado",
		        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
		        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
		        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
		        "sInfoPostFix": "",
		        "sInfoThousands": ".",
		        "sLengthMenu": "_MENU_ resultados por página",
		        "sLoadingRecords": "Carregando...",
		        "sProcessing": "Processando...",
		        "sZeroRecords": "Nenhum registro encontrado",
		        "sSearch": "Pesquisar",
		        "oPaginate": {
		            "sNext": "Próximo",
		            "sPrevious": "Anterior",
		            "sFirst": "Primeiro",
		            "sLast": "Último"
		        },
		        "oAria": {
		            "sSortAscending": ": Ordenar colunas de forma ascendente",
		            "sSortDescending": ": Ordenar colunas de forma descendente"
		        }
		    }
		});
	});

	$(document).on('click', '.voltar', function(event) {
    window.history.back()

});

$(document).on('click', '.apagar', function(event) {
		var result = confirm("Tem certeza que deseja apagar esse usuario ?");
		if(result == true){
		var id_usuario = $(this).attr('id_usuario');
		window.location.href = ("valid/validar_usuario_del.php?id_usuario="+id_usuario);
	     if (window.focus) {newwindow.focus()}
		return false;
		event.preventDefault();
		}
		else{

		}
	});

	$(document).on('click', '.editar', function(event) {
		var id_usuario = $(this).attr('id_usuario');
		window.location.href = ("usuarios_update.php?id_usuario="+id_usuario);
	     if (window.focus) {newwindow.focus()}
		return false;
		event.preventDefault();
	});

</script>
<body>

	<main class="d-flex flex-nowrap"style=" min-height: 620px;">
		<div class="b-example-divider b-example-vr"></div>

		<div class="d-flex flex-column flex-shrink-0 bg-light"
			style="width: 4.5rem; padding-top: 3%;">
			<ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
				<li><a href="../veiculos/home.php" class="nav-link py-3 border-bottom rounded-0"
					title="Veiculos" data-bs-toggle="tooltip" data-bs-placement="right">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
</svg>
				</a></li>
				<li><a href="../usuarios/home.php"
					class="nav-link active py-3 border-bottom rounded-0" title="Usuarios"
					data-bs-toggle="tooltip" data-bs-placement="right"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>
				</a></li>
			</ul>
			<div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="rounded-circle" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="../logout.php">Sair</a></li>
      </ul>
    </div>
		</div>
		<?php
		$id_usuario = $_GET['id_usuario'];
		include ('../lib.php');

$sql = "SELECT * FROM `usuarios` WHERE id_usuario = '".$id_usuario."'";

$query = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($row = mysqli_fetch_object($query)) {
    $nome = utf8_encode($row->nome);
    $usuario = utf8_encode($row->usuario);

	$tipo = utf8_encode($row->tipo);
}

		?>
		<div class="card" style="width: 100%; background-color: #93bef9;">
			<div class="card" style="margin: 15px; background-color: white;">
				<div class="input-group mb-3">
				<h5 class="card-title"
					style="padding-left: 15px; padding-top: 15px;"><button type="button" class="btn btn-secondary voltar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"></path>
</svg>
              </button> Usuarios - <?php echo $nome?></h5>
					</div>
					
				<form style="margin: 15px" method="post" enctype="multipart/form-data" name="formulario" action="../usuarios/valid/validar_usuario_add.php">
					<div class="form-row">
					<div class="form-group col-md-5">
							<label for="inputText3">Usuario</label> <input type="text"
								class="form-control" name='usuario' value='<?php echo $usuario ?>' disabled placeholder="Usuario" required="required">
						</div>
						<div class="form-group col-md-7">
							<label for="inputText3">Nome</label> <input type="text"
								class="form-control" name='nome' value='<?php echo $nome?>' disabled placeholder="Nome completo" required="required">
						</div>
						<div class="form-group col-md-6">
							<label for="inputText3">Senha</label> <input type="password"
								class="form-control" name='senha' placeholder="Senha" disabled required="required">
						</div>
						<div class="form-group col-md-6">
							<label for="inputText3">tipo</label>
							<select class="form-select" name='tipo' disabled aria-label="Default select example">
							<?php
							if($tipo == 0){
								?>
  <option value="0">Administrador</option>
							<?php
						}else{
							?>
								<option value="1">Usuario</option>
							<?php
						}?>
</select>
						</div>
						<div  class="form-group col-md-12">
						<button type="button" id_usuario="<?php echo $id_usuario?>" class="btn btn-primary editar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
</svg>
                Editar
              </button>
<button type="button" id_usuario="<?php echo $id_usuario?>" class="btn btn-outline-danger apagar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
</svg>
                Apagar
              </button>
						</div>
					</div>
				</form>
			</div>
		</div>
				</tbody>
			</table>
		</div>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
			crossorigin="anonymous"></script>

</main>
</body>
</html>
